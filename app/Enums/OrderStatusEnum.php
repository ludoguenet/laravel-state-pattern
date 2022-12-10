<?php

declare(strict_types=1);

namespace App\Enums;

enum OrderStatusEnum: string
{
    case Incomplete = 'incomplete';
    case Shipped = 'shipped';
    case Cancelled = 'cancelled';
}
