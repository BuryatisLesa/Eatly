<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order_Dish extends Model
{
    use HasFactory;

    /**
     * Атрибуты таблицы orders_dishes
     * @var array<int>
     */
    protected $fillable =
        [
            'order_id',
            'dish_id'
        ];
    /**
     * Наименование таблицы
     * @var string
     */
    protected $table = 'orders_dishes';

    /**
     * Связь one-to-many с таблицей dishes
     */
    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class);
    }
    /**
     * Связь one-to-many c таблицей users
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
