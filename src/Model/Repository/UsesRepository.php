<?php

namespace NP\Model\Repository;

use NP\Configuration\DatabaseConnection;
use NP\Model\DataObject\AbstractDataObject;
use NP\Model\DataObject\Uses;

class UsesRepository extends AbstractRepository
{
    public function getSkillsByRealisation(string $projCodename): array
    {
        $sql = "SELECT skill_name
                FROM Uses u
                    JOIN Skill s ON u.skill_name = s.name
                WHERE realisation_name = :realTag
                ORDER BY masteryLevelOutOfTen DESC";
        $pdo = DatabaseConnection::getPdo()->prepare($sql);
        $pdo->execute([
            'realTag' => $projCodename
        ]);
        $arr = array();
        foreach ($pdo as $tuple)
            $arr[] = (new SkillRepository())->getObjectFromPrimaryKey($tuple['skill_name']);
        return $arr;
    }

    protected function getTableName(): string
    {
        return "Uses";
    }

    protected function getPrimaryKeyName(): null
    {
        return null;
    }

    protected function getColumnNames(): array
    {
        return array(
            'realisation_name',
            'skill_name',
        );
    }

    public function constructFromArray(array $dataObjectArray): AbstractDataObject
    {
        return new Uses(
            $dataObjectArray['realisation_name'],
            $dataObjectArray['skill_name']
        );
    }
}