<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\OrderStatusEnum;
use App\States\Order\OrderState;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'price',
        'user_id',
    ];

    protected $casts = [
        'price' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
        );
    }

    protected function state(): Attribute
    {
        /**
         * @var OrderState $value
         */
        return Attribute::make(
            get: fn ($value) => new $value($this),
        );
    }
}
