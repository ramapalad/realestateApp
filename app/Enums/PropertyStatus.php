<?php

namespace App\Enums;

enum PropertyStatus: string
{
    case AVAILABLE = 'available';
    case SOLD = 'sold';
    case PENDING = 'pending';
    case BLOCKED = 'blocked';
    case CANCELLED = 'cancelled';

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
