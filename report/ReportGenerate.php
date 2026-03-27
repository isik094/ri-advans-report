<?php

declare(strict_types=1);

namespace report;

use report\enums\ReportTypeEnums;
use report\types\ReportExcelType;

/**
 * Генерация отчета
 *
 * @class ReportGenerate
 */
class ReportGenerate
{
    public ReportInterface $report;

    /**
     * @param array $data
     * @param string $type
     */
    public function __construct(
        public array $data,
        public string $type,
    ) {
        // тут проверки на пустые данные и тип через ::from с ошибкой из enum

        $this->report = match ($this->type) {
            ReportTypeEnums::EXCEL->value => new ReportExcelType(),
            default => throw new \RuntimeException('Произошла ошибка'), // учесть это и писать в лог ошибку можно через try {} catch () поймать ошибку, подумать
        };
    }

    /**
     * Запустить генерацию
     *
     * @return string
     */
    public function generate(): string // вернем путь файла, возможно для выдачи на скачивание или сохранения пути
    {
        return $this->report->run($this->data);
    }
}
