<?php


namespace App;


class TemplateHandler
{
    public static function basic(): string
    {
        $template = <<<EOT
        Hello *%s*\n\nWelcome to our interactive whatsapp bot. I offer you a number of services , just type the service you want information on.
        \n\n* Computers\n* Development
        EOT;

        return $template;
    }

    public static function computersResponse(): string
    {
        return <<<EOT
           *%s* We have the following Computer Services for you:\n\n*. Networks\n*. Repairs\n*. Accessories

        EOT;

    }

    public static function devResponse(): string
    {
        return <<<EOT
            *%s* We have the following Development Services:\n\n*. Web\n*. Desktop\n*. Mobile\n*. Embedded

        EOT;
    }

    public static function networks()
    {
        return <<<EOT
            *%s* We can configure your network needs for as low as ```MWK 200,000```
        EOT;
    }

    public static function repairs()
    {
        return <<<EOT
            *%s* We perform all sorts of repairs for as low as ```MWK 10,000```
        EOT;
    }

    public static function accessories()
    {
        return <<<EOT
        *%s* We have the following Computer accessories for you:
        \n\n. Mouse Pads -  *K 3,000*
        \n. Cooling Pads - *K 12,500*
        \n. Stickers - *K 3,000*
        \n. Dongle - *K 30,000*
        \n. Mouse - *K 4,500*
        \n. Keyboard - *K 7,000*
        EOT;
    }

    public static function web()
    {
        return <<<EOT
            *%s* We develop custom websites and web applications for as low as ```MWK 200,000```.\n\n*Price may be more depending on requirements.*
        EOT;
    }

    public static function mobile()
    {
        return <<<EOT
            *%s* We are experts in mobile development. Our charges range from  ```MWK 200,000``` -  ```MWK 6,000,000```.\n\n*Price may be more depending on requirements.*
        EOT;
    }


    public static function desktop()
    {
        return <<<EOT
            *%s* We are experts in efficient desktop applications. Our charges range from  ```MWK 200,000``` -  ```MWK 6,000,000```.\n\n*Price may be more depending on requirements.*
        EOT;
    }

    public static function embedded()
    {
        return <<<EOT
            *%s* We are experts in embedded systems. Our charges range from  ```MWK 200,000``` -  ```MWK 6,000,000```.\n\n*Price may be more depending on requirements.*
        EOT;
    }
}
