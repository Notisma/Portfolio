<?php

namespace NP\Lib;

use RuntimeException;

class Translation
{
    /** fr / en */
    public static function getCurrentLanguage(): string
    {
        if (!Session::getInstance()->contains('language'))
            Session::getInstance()->register('language', 'fr');

        return Session::getInstance()->read('language');
    }

    public static function setLanguage(string $lang): void
    {
        Session::getInstance()->register('language', $lang);
    }

    /**
     * @param array $lgsMsg : Message dans toutes les langues (0 : Français, 1 : Anglais)
     * @return string : Message dans la bonne langue
     */
    public static function translate(string...$lgsMsg): string
    {
        return match (self::getCurrentLanguage()) {
            'fr' => $lgsMsg[0],
            'en' => $lgsMsg[1],
            default => throw new RuntimeException("Langue non trouvée"),
        };
    }
}
