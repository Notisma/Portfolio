<?php

namespace NP\Model\DataObject;

class Skill extends AbstractDataObject
{
    public string $name;
    public string $skillType;
    public int $masteryLevelOutOfTen;

    /**
     * @param string $name
     * @param string $skillType
     * @param int $masteryLevelOutOfTen
     */
    public function __construct(string $name, string $skillType, int $masteryLevelOutOfTen)
    {
        $this->name = $name;
        $this->skillType = $skillType;
        $this->masteryLevelOutOfTen = $masteryLevelOutOfTen;
    }


    public function toArray(): array
    {
        return array(
            'name' => $this->name,
            'skillType' => $this->skillType,
            'masteryLevelOutOfTen' => $this->masteryLevelOutOfTen,
        );
    }

    public function getPrimKeyValue(): string
    {
        return $this->name;
    }
}