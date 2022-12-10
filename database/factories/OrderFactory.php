<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\OrderStatusEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'price' => $this
                ->faker
                ->randomFloat(
                    nbMaxDecimals: 2,
                    min: 10,
                    max: 500,
                ),
            'status' => $this
                ->faker
                ->randomElement(OrderStatusEnum::cases()),
            'user_id' => User::factory(),
        ];
    }
}
