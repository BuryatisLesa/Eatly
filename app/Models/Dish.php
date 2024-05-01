<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dish extends Model
{
    use HasFactory;
    /**
     * Атрибуты таблицы dishes
     * @var array<string, float>
     */
    protected $fillable =
        [
            'name',
            'description',
            'image',
            'price',
            'rating'
        ];
    /**
     * Наименование таблицы
     * @var string
     */
    protected $table = 'dishes';
    /**
     * Первичный ключ
     * @var int
     */
    protected $primaryKey = 'dish_id';

    /**
     * связь many-to-many c таблицей orders
     */
    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
