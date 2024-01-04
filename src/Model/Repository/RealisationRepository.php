<?php

namespace NP\Model\Repository;

use NP\Model\DataObject\AbstractDataObject;
use NP\Model\DataObject\Realisation;

class RealisationRepository extends AbstractRepository
{
    protected function getTableName(): string
    {
        return 'Realisation';
    }

    protected function getPrimaryKeyName(): string
    {
        return 'codename';
    }

    protected function getColumnNames(): array
    {
        return array(
            'codename',
            'title',
            'title_fr',
        );
    }

    public function constructFromArray(array $dataObjectArray): AbstractDataObject
    {
        return new Realisation(
            $dataObjectArray['codename'],
            $dataObjectArray['title'],
            $dataObjectArray['title_fr'],
        );
    }
}