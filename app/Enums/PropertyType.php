<?php

namespace App\Enums;

enums PropertyType: string
{
    case HOUSE_AND_LOT = 'House and Lot';
    case CONDOMINIUM = 'Condominium';
    case TOWNHOUSE = 'Townhouse';
    case LOT_ONLY = 'Lot Only';
    case COMMERCIAL = 'Commercial';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return array_map(fn($case) => [
            'label' => $case->value,
            'value' => $case->value
            ], 
            self::cases());
    }
}