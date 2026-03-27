<?php

declare(strict_types=1);

namespace report\enums;

/**
 * Перечисления типов отчета
 *
 * @class ReportTypeEnums
 */
enum ReportTypeEnums: string
{
    // TODO для других форматов на будущее pdf/csv и т.д
    case EXCEL = 'xlsx';
}
