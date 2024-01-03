<?php

namespace NP\Model\DataObject;

use NP\Model\DataObject\AbstractDataObject;

class Realisation extends AbstractDataObject
{
    public string $codename;
    public string $title;

    /**
     * @param string $codename
     * @param string $title
     */
    public function __construct(string $codename, string $title)
    {
        $this->codename = $codename;
        $this->title = $title;
    }

    public function toArray(): array
    {
        return array(
            'codename' => $this->codename,
            'title' => $this->title
        );
    }

    public function getPrimKeyValue(): string
    {
        return $this->title;
    }
}