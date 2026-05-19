<?php

namespace App\Enums\Vacancy;

enum VacancyLocationEnum: string
{
    case REMOTE = 'remote';
    case HYBRID = 'hybrid';
    case ON_SITE = 'on-site';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function toRule(): string
    {
        return implode(',', self::values());
    }
}
