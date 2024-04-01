<?php

namespace Dizi\DateHelperCommon\DTO\Example;

class ExampleData
{
    public function __construct(
        public readonly string $name,
        public readonly string $description,
    ) {}

    /**
     * @param array{name: string, description: string} $data
     * @return ExampleData
     */
    public static function fromArray(array $data): self
    {
        return new static(
            $data['name'],
            $data['description'],
        );
    }
}
