<?php

namespace App\Http\Controllers;

use App\TemplateHandler;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

use App\Models\ChatSession;

class BotController extends Controller
{
    protected function sendResponse($to, $message)
    {
        $twilio = new Client(config('services.twilio.sid'), config('services.twilio.token'));

        return $twilio->messages->create($to, [
            'from' => config('services.twilio.whatsapp_from'),
            'body' => $message
        ]);
    }


    protected function getResponseTemplate($body): string
    {
        $body = strtolower($body);


        // register accepted interaction codes;

        switch ($body) {
            case 'computers':
                return TemplateHandler::computersResponse();
            case 'development':
                return TemplateHandler::devResponse();
            case 'networks':
                return TemplateHandler::networks();
            case 'repairs':
                return TemplateHandler::repairs();
            case 'accessories':
                return TemplateHandler::accessories();
            case 'web':
                return TemplateHandler::web();
            case 'desktop':
                return TemplateHandler::desktop();
            case 'mobile':
                return TemplateHandler::mobile();
            case 'embedded':
                return TemplateHandler::embedded();
        }

        return TemplateHandler::basic();
    }


    /*
     * Provides simple interactive messages to a whatsapp client
     */
    public function interact(Request $request)
    {
        $phone = $request->input('From');
        $profile = $request->input('ProfileName');
        $body = $request->input('Body');


        $template = $this->getResponseTemplate($body);
        $message = sprintf($template, $profile);

        return $this->sendResponse($phone, $message);
    }


    public function handleChat(Request $request)
    {
        $phone = $request->input('From');
        $profile = $request->input('ProfileName');
        $body = $request->input('Body');


        $chatSession = ChatSession::getRecord($phone);

        $message = $chatSession->getMessage($body);
        return $this->sendResponse($phone, $message);
    }


}
