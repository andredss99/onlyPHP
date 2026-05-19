<?php

namespace App\Enums\Vacancy;

enum VacancyContractTypeEnum: string
{
    case PJ = 'pj';
    case CLT = 'clt';
    case TRAINEE = 'trainee';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function toRule(): string
    {
        return implode(',', self::values());
    }
}
