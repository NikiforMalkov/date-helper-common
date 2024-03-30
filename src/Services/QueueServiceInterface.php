<?php

namespace Dizi\DateHelperCommon\Services;

use Dizi\DateHelperCommon\Events\Event;

interface QueueServiceInterface
{

    /**
     * Добавление нового события в очередь
     */
    public function publish(Event $event): void;

    public function consumeEvent();

    /**
     * Получение событий, которые ещё не были обработаны
     */
    public function consumeEvents(): array;

    /**
     * Парсим события
     * @return array{type: string, data: array, id: string}
     */
    public function parseEvents(array $events): array;
}