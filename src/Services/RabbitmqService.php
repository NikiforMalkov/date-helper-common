<?php

namespace Dizi\DateHelperCommon\Services;

use Carbon\Carbon;
use Dizi\DateHelperCommon\Events\Event;
use Illuminate\Support\Facades\Redis;

//TODO: доделать пример с rabbitmq и другими вариациями
abstract class RabbitmqService implements QueueServiceInterface
{

}