<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function index(): void
    {
        Order::all()
            ->each(static function (Order $order) {
                dump($order->status);
            });
    }
}
