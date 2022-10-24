<?php

namespace Genkgo\Camt;

use Genkgo\Camt\DTO\RecordWithBalances;
use SimpleXMLElement;

interface RecorderInterface
{
    public function addBalances(RecordWithBalances $record, SimpleXMLElement $xmlRecord): void;

    public function addEntries(DTO\Record $record, SimpleXMLElement $xmlRecord): void;
}
