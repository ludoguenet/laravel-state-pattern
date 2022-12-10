<?php

declare(strict_types=1);

namespace App\Enums;

enum OrderStatusEnum: string
{
    case INCOMPLETE = 'incomplete';
    case SHIPPED = 'shipped';
    case CANCELLED = 'cancelled';

    public function hex(): string
    {
        return match($this)
        {
            self::INCOMPLETE => '#F6F6F6',
            self::SHIPPED => '#36A70F',
            self::CANCELLED => '#E14A29',
        };
    }
}
