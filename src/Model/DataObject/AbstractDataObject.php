<?php

namespace NP\Model\DataObject;

use NP\Configuration\DatabaseConnection;

abstract class AbstractDataObject
{
    public abstract function toArray(): array;
    public abstract function getPrimKeyValue(): mixed;
}
