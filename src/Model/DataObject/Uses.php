<?php

namespace NP\Model\DataObject;

class Uses extends AbstractDataObject
{
    public Realisation $realisation_name;
    public Skill $skill_name;

    /**
     * @param Realisation $realisation_name
     * @param Skill $skill_name
     */
    public function __construct(Realisation $realisation_name, Skill $skill_name)
    {
        $this->realisation_name = $realisation_name;
        $this->skill_name = $skill_name;
    }

    public function toArray(): array
    {
        return array(
            'realisation_name' => $this->realisation_name,
            'skill_name' => $this->skill_name,
        );
    }

    public function getPrimKeyValue(): null
    {
        return null;
    }
}
