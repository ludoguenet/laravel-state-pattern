<?php

declare(strict_types=1);

namespace App\States\Order;

class IncompleteOrderState extends OrderState
{
    public function isRefundable(): bool
    {
        return $this->order->price > 0;
    }
}
