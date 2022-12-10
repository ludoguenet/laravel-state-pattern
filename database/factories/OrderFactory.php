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
                ->randomNumber(
                    nbDigits: 5,
                ),
            'user_id' => User::factory(),
        ];
    }
}
