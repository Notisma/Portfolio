<?php

namespace NP\Configuration;

use NP\Controllers\AbstractController;
use NP\Lib\Session;
use RuntimeException;

class WebsiteConfiguration
{
    public const sessionUpTime = 7200;

    static public function getSiteRoot(): string
    {
        if ($_SERVER["HTTP_HOST"] == "webinfo.iutmontp.univ-montp2.fr")
            return '/~izoretr/nots_portfolio';
        else if ($_SERVER['SERVER_PORT'] == 2023)
            return '';
        else
            throw new RuntimeException("Site root configuration non-trouvée !");
    }

    public static function getSourceCode(): string
    {
        return 'https://gitlabinfo.iutmontp.univ-montp2.fr/izoretr/notsportfolio" target="_blank" rel="noopener noreferrer';
    }
}
