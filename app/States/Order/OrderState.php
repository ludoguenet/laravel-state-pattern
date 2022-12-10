<?php

declare(strict_types=1);

namespace App\States\Order;

use App\Models\Order;

abstract class OrderState
{
    public function __construct(
        protected Order $order,
    ) {}

    abstract public function isRefundable(): bool;
}
