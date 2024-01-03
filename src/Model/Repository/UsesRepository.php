<?php

namespace NP\Model\Repository;

use NP\Model\DataObject\AbstractDataObject;
use NP\Model\DataObject\Uses;

class UsesRepository extends AbstractRepository
{

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