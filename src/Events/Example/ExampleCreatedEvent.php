<?php

namespace Dizi\DateHelperCommon\Events\Order;

use Dizi\DateHelperCommon\DTO\Example\ExampleData;
use Dizi\DateHelperCommon\Enums\Events;
use Dizi\DateHelperCommon\Events\Event;

class ExampleCreatedEvent extends Event
{
    public string $type = Events::EXAMPLE_CREATED;

    public function __construct(public ExampleData $data)
    {
    }
}
