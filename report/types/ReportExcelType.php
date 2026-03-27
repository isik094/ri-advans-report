<?php

declare(strict_types=1);

namespace report\types;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use report\ReportInterface;

/**
 * Реализация генерации отчета формата xlsx
 *
 * @class ExcelType
 */
class ReportExcelType implements ReportInterface
{
    /**
     * Сгенинровать отчет
     *
     * @param array $data
     * @return string
     */
    public function run(array $data): string
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $columns = $this->getColumns();

        foreach ($data as $row) {
            // через генератор yeald работаем чтоб заполнить память, если данных моного и в целом сами данные тоже берем через типа chunk (частями)
        }

        // и так далее заполняем файл данными и сохраняем, возвращая путь к файлу
        // учесть уникальность имени файла и его директорию

        return '/path/to/file.xlsx';
    }

    /**
     * Массив колонок с названием
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [];
    }
}
