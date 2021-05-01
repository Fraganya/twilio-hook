<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\ChatSessionResponseHandler;

class ChatSession extends Model
{

    protected $fillable = ['phone', 'language', 'level', 'prev_response'];

    public static function getRecord($phone)
    {
        $chatSession = self::where(['phone' => $phone])->first();

        if (!$chatSession) {
            $chatSession = self::create([
                'phone' => $phone,
                'level' => 0
            ]);
        }

        return $chatSession;
    }

    public function getMessage($user_input)
    {
        $user_input = strtolower($user_input);


        // Handle First request in the session
        if ($this->level === 0) {
            $this->update(['level' => 1]);
            return ChatSessionResponseHandler::defaultResponse();
        }

        // Handle 2nd request in the session
        if ($this->level === 1) {
            if ($user_input != "1" && $user_input != "2") {
                return ChatSessionResponseHandler::defaultResponse();
            }

            $this->update(['language' => $user_input, 'level' => 2]);
            return ChatSessionResponseHandler::level1Response($this->language);
        }

        // handle 3rd request in session
        if ($this->level === 2) {
            if ($user_input == '*') {
                $this->update(['level' => 1]);
                return ChatSessionResponseHandler::level1Response($this->language);
            }

            if ($user_input !== "1" && $user_input != "2") {
                return ChatSessionResponseHandler::level1Response($this->language);
            }

            $this->update(['level' => 3, 'prev_response' => $user_input]);

            switch ($user_input) {
                case '1':
                    return ChatSessionResponseHandler::level2_1Response($this->language);
                case '2':
                    return ChatSessionResponseHandler::level2_2Response($this->language);
                default:
                    return 'Failed to send you a proper message!Try again later';
            }
        }

        if ($this->level === 3) {
            if ($user_input == '*') {
                $this->update(['level' => 2]);
                switch ($this->prev_response) {
                    case '1':
                        return ChatSessionResponseHandler::level2_1Response($this->language);
                    case '2':
                        return ChatSessionResponseHandler::level2_2Response($this->language);
                    default:
                        return 'Failed to send you a proper message.Try again later!';
                }
            }


            if (!in_array($user_input, ["1", "2", "3"])) {
                switch ($this->prev_response) {
                    case '1':
                        return ChatSessionResponseHandler::level2_1Response($this->language);
                    case '2':
                        return ChatSessionResponseHandler::level2_2Response($this->language);
                    default:
                        return 'Failed to send you a proper message.Try again later!';
                }
            }

            $this->update(['level' => 4]);


            if ($this->prev_response == '1') {
                switch ($user_input) {
                    case '1':
                        return ChatSessionResponseHandler::level3_1_1Response($this->language);
                    case '2':
                        return ChatSessionResponseHandler::level3_1_2Response($this->language);
                    case '3':
                        return ChatSessionResponseHandler::level3_1_3Response($this->language);
                }
            } elseif ($this->prev_response == '2') {
                switch ($user_input) {
                    case '1':
                        return ChatSessionResponseHandler::level3_2_1Response($this->language);
                    case '2':
                        return ChatSessionResponseHandler::level3_2_2Response($this->language);
                    case '3':
                        return ChatSessionResponseHandler::level3_2_3Response($this->language);
                }
            }

        }


        if ($this->level === 4) {
            if ($user_input == '#') {
                $this->update(['level' => 1, 'prev_response' => null]);
                return ChatSessionResponseHandler::defaultResponse();
            }

            if ($this->language == 1) {
                return "Please enter *#* to restart.";
            }

            return "Tsindikani *#* kuti muyambilenso.";

        }
    }


}

