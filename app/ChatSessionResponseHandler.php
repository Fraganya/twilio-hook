<?php

namespace App;

class ChatSessionResponseHandler
{

    public static function defaultResponse()
    {
        $response = <<<EOT
        Welcome to *Interactive Bot* \nSelect your language:
        \n\n1. English\n2. Chichewa
        EOT;

        return $response;
    }

    public static function level1Response($language)
    {
        $lang1 = <<<EOT
        Select a Service Bot*
        \n\n1. Computers\n2. Development\n*. Back
        EOT;


        $lang2 = <<<EOT
        Sankhani ntchito*
        \n\n1. Za ma kompyuta\n2. Zo Koda\n* Bwelerani
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }

    public static function level2_1Response($language)
    {
        $lang1 = <<<EOT
        Select a Computer Service *
        \n\n1. Networks\n2. Repairs\n3. Accessories\n*. Back
        EOT;


        $lang2 = <<<EOT
        Sankhani ntchito ya kompyuta*
        \n\n1. Za ma netiweki\n2. Zokonza konza\n3. Zida za kompyuta\n* Bwelerani
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }

    public static function level2_2Response($language)
    {
        $lang1 = <<<EOT
        Select a Development Service *
        \n\n1. Web\n2. Desktop\n3. Mobile\n*. Back
        EOT;


        $lang2 = <<<EOT
        Sankhani ntchito ya zo koda*
        \n\n1. Webusayiti\n2. Kompyuta\n3. mafoni\n* Bwelerani
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }


    public static function level3_1_1Response($language)
    {
        $lang1 = <<<EOT
        We can configure your network needs for as low as ```MWK 200,000```\n\n
        # Restart\n
        \n\nThank you!
        EOT;


        $lang2 = <<<EOT
        Timaika netiwiki pa malo ano pa mtengo otchipa zedi kufikila pa ```MWK 200,000```\n\n
        # Yambilaninso\n\nZikomo Kwambiri
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }


    public static function level3_1_2Response($language)
    {
        $lang1 = <<<EOT
        We perform all sorts of repairs for as low as ```MWK 10,000```\n\n
        # Restart\n
        \n\nThank you!
        EOT;


        $lang2 = <<<EOT
        Timakonza  zida zosiyana siya pa mtengo wozizila monga ```MWK 10,000```\n\n
        # Yambilaninso\n\nZikomo Kwambiri
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }

    public static function level3_1_3Response($language)
    {
        $lang1 = <<<EOT
        We have the following Computer accessories for you:
        \n\n. Mouse Pads -  *K 3,000*
        \n. Cooling Pads - *K 12,500*
        \n. Stickers - *K 3,000*
        \n. Dongle - *K 30,000*
        \n. Mouse - *K 4,500*
        \n. Keyboard - *K 7,000*\n\n
        # Restart\n
        \n\nThank you!
        EOT;


        $lang2 = <<<EOT
        Tili ndi zida za kompyuta zoyisana siya monga:
        \n\n. Mouse Pads -  *K 3,000*
        \n. Cooling Pads - *K 12,500*
        \n. Stickers - *K 3,000*
        \n. Dongle - *K 30,000*
        \n. Mouse - *K 4,500*
        \n. Keyboard - *K 7,000*\n\n
        # Yambilaninso\n\nZikomo Kwambiri
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }

    public static function level3_2_1Response($language)
    {
        $lang1 = <<<EOT
        We develop custom websites and web applications for as low as ```MWK 200,000```\n\n
        # Restart\n
        \n\nThank you!
        EOT;


        $lang2 = <<<EOT
        Timakoda ma webusayiti pa mtengo wozizila monga ```MWK 200,000```\n\n
        # Yambilaninso\n\nZikomo Kwambiri
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }

    public static function level3_2_2Response($language)
    {
        $lang1 = <<<EOT
        We are experts in efficient desktop applications. Our charges range from  ```MWK 200,000``` -  ```MWK 6,000,000```.\n\n*Price may be more depending on requirements.
        \n\n
        # Restart\n
        \n\nThank you!
        EOT;


        $lang2 = <<<EOT
        Timakoda ma ma sisitimu a mphamvu a pa kompyuta,mitengo yathu imayambira ```MWK 200,000```\n\n
        # Yambilaninso\n\nZikomo Kwambiri
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }

    public static function level3_2_3Response($language)
    {
        $lang1 = <<<EOT
        We are experts in mobile development. Our charges range from  ```MWK 200,000``` -  ```MWK 6,000,000```.
        \n\n*Price may be more depending on requirements.*\n\n
        # Restart\n
        \n\nThank you!
        EOT;


        $lang2 = <<<EOT
        Ndife ma dolo popanga ma sisitumu apa lamya, mitengo yathu imayambila ```MWK 200,000```\n\n
        # Yambilaninso\n\nZikomo Kwambiri
        EOT;

        // return the response based on language
        return $language == 1 ? $lang1 : $lang2;
    }
}
