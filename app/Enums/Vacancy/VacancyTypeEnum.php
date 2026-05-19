<?php

namespace App\Enums\Vacancy;

enum VacancyTypeEnum: string
{
    case FULL_TIME = 'full-time';
    case PART_TIME = 'part-time';
    case CONTRACT = 'contract';
    case TEMPORARY = 'temporary';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function toRule(): string
    {
        return implode(',', self::values());
    }
}
