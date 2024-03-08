<?php

namespace NP\Controllers;

use NP\Lib\Translation;
use NP\Model\Repository\SkillRepository;

class ControllerCV extends AbstractController
{

    public static function displayIndex(): void
    {
        $skills = [
            Translation::translate('Langages', 'Languages') => (new SkillRepository())->getOrderedSkillsFromCategory('LANGUAGE'),
            Translation::translate('Outils', 'Tools') => (new SkillRepository())->getOrderedSkillsFromCategory('TOOL'),
            Translation::translate('Autres', 'Others') => (new SkillRepository())->getOrderedSkillsFromCategory('OTHER')
        ];
        self::displayView(self::getPageTitle(), "cv/viewIndex", ['skills' => $skills]);
    }
    
    public static function getPageTitle(): string
    {
        return Translation::translate('CV et compétences', 'CV & Skills');
    }
}