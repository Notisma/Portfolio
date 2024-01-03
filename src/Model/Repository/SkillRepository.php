<?php

namespace NP\Model\Repository;

use NP\Model\DataObject\AbstractDataObject;
use NP\Model\DataObject\Skill;

class SkillRepository extends AbstractRepository
{
    protected function getTableName(): string
    {
        return 'Skill';
    }

    protected function getPrimaryKeyName(): string
    {
        return 'name';
    }

    protected function getColumnNames(): array
    {
        return array(
            'name',
            'skillType',
            'masteryLevelOutOfTen',
        );
    }

    public function constructFromArray(array $dataObjectArray): AbstractDataObject
    {
        return new Skill(
            $dataObjectArray['name'],
            $dataObjectArray['skillType'],
            $dataObjectArray['masteryLevelOutOfTen']
        );
    }
}
