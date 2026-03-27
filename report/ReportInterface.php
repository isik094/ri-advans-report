<?php

declare(strict_types=1);

namespace report;

interface ReportInterface
{
    /**
     * Запуск генерации
     *
     * @param array $data
     * @return string
     */
    public function run(array $data): string;

    /**
     * Названия колонок
     *
     * @return array
     */
    public function getColumns(): array;
}