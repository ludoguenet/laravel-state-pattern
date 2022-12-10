<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Order;
use App\States\Order\CancelledOrderState;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function index(): void
    {
        Order::all()
            ->each(static function (Order $order) {
                $order->state = CancelledOrderState::class;
                $order->price = rand(1, 100);
                $order->save();

                dump($order->state->isRefundable(), $order->price);
            });
    }
}
