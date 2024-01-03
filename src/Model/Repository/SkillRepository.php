<?php

namespace NP\Model\Repository;

use NP\Configuration\DatabaseConfiguration;
use NP\Configuration\DatabaseConnection;
use NP\Model\DataObject\AbstractDataObject;
use NP\Model\DataObject\Skill;

class SkillRepository extends AbstractRepository
{
    public function getOrderedSkillsFromCategory(string $cat): array
    {
        $sql = "SELECT *
                FROM Skill
                WHERE skillType = :catTag
                ORDER BY masteryLevelOutOfTen DESC;
        ";
        $result = DatabaseConnection::getPdo()->prepare($sql);
        $result->execute(['catTag' => $cat]);
        $skills = array();
        foreach ($result as $tuple)
            $skills[] = $this->constructFromArray($tuple);
        return $skills;
    }

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
            'name_fr',
            'skillType',
            'masteryLevelOutOfTen',
        );
    }

    public function constructFromArray(array $dataObjectArray): AbstractDataObject
    {
        return new Skill(
            $dataObjectArray['name'],
            $dataObjectArray['name_fr'],
            $dataObjectArray['skillType'],
            $dataObjectArray['masteryLevelOutOfTen']
        );
    }
}
