<?php

namespace NP\Model\DataObject;

use NP\Configuration\WebsiteConfiguration;
use NP\Lib\Translation;
use NP\Model\DataObject\AbstractDataObject;

class Realisation extends AbstractDataObject
{
    public string $codename;
    public string $title;
    public ?string $title_fr;

    /**
     * @param string $codename
     * @param string $title
     * @param ?string $title_fr
     */
    public function __construct(string $codename, string $title, ?string $title_fr)
    {
        $this->codename = $codename;
        $this->title = $title;
        $this->title_fr = $title_fr;
        if (Translation::getCurrentLanguage() == "fr" && $title_fr != null) $this->title = $title_fr;
    }

    public function toArray(): array
    {
        return array(
            'codename' => $this->codename,
            'title' => $this->title,
            'title_fr' => $this->title_fr,
        );
    }

    public function getPrimKeyValue(): string
    {
        return $this->title;
    }

    public function __toString(): string
    {
        return "
        <div class='realisation_div'>
            <a href='?controller=Realisations&action=displayProjectDetails&project=$this->codename'>
                <img alt='project icon' src='" . WebsiteConfiguration::getSiteRoot() . "/resources/images/realisations/$this->codename/icon.png'>
                $this->title
            </a>
        </div>
        ";
    }
}