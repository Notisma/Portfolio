<?php

namespace NP\Model\DataObject;

use NP\Lib\Translation;

class Skill extends AbstractDataObject
{
    public string $name;
    public ?string $name_fr;
    public string $skillType;
    public int $masteryLevelOutOfTen;

    /**
     * @param string $name
     * @param string|null $name_fr
     * @param string $skillType
     * @param int $masteryLevelOutOfTen
     */
    public function __construct(string $name, ?string $name_fr, string $skillType, int $masteryLevelOutOfTen)
    {
        $this->name = $name;
        $this->name_fr = $name_fr;
        if (Translation::getCurrentLanguage() == "fr" && $name_fr != null) $this->name = $name_fr;
        $this->skillType = $skillType;
        $this->masteryLevelOutOfTen = $masteryLevelOutOfTen;
    }


    public function toArray(): array
    {
        return array(
            'name' => $this->name,
            'name_fr' => $this->name_fr,
            'skillType' => $this->skillType,
            'masteryLevelOutOfTen' => $this->masteryLevelOutOfTen,
        );
    }

    public function getPrimKeyValue(): string
    {
        return $this->name;
    }
}