<?php

declare(strict_types=1);

namespace App\States\Order;

class CancelledOrderState extends OrderState
{
    public function isRefundable(): bool
    {
        return $this->order->price > 20;
    }
}
