<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    /**
     * Атрибуты таблицы orders
     * @var array<int, float>
     */
    protected $fillable =
        [
            'user_id',
            'total_price',
        ];
    /**
     * Наименование таблицы
     * @var string
     */
    protected $table = 'orders';
    /**
     * Первичный ключ
     * @var int
     */
    protected $primaryKey = 'order_id';
    /**
     * Связи Many-to-many c dishes
     */
    public function dish(): BelongsToMany
    {
        return $this->belongsToMany(Dish::class);
    }
}
