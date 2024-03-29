<?php

namespace NP\Configuration;

use RuntimeException;

class WebsiteConfiguration
{
    public const sessionUpTime = 7200;

    static public function getSiteRoot(): string
    {
        if ($_SERVER["HTTP_HOST"] == "webinfo.iutmontp.univ-montp2.fr")
            return '/~izoretr/portfolio';
        else if ($_SERVER['SERVER_PORT'] == 1111)
            return '/Portfolio';
        else
            throw new RuntimeException("Site root configuration non-trouvée !");
    }

    static public function getImages(): string
    {
        return self::getSiteRoot() . "/resources/images/";
    }

    public static function getSourceCode(): string
    {
        return 'https://github.com/Notisma/Portfolio" target="_blank" rel="noopener noreferrer';
    }
}
