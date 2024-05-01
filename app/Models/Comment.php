<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    /**
     * Атрибуты таблицы comments
     * @var array<int, string, float>
     */
    protected $fillable =
        [
            'user_id',
            'dish_id',
            'content',
            'rating',
        ];
    /**
     * Наименование таблицы
     * @var string
     */
    protected $table = "comments";

    /**
     * Первичный ключ таблицы
     * @var int
     */
    protected $primaryKey = "comment_id";

    /**
     * Связи one-to-many c users
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Связи one-to-many c dish
     */
    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class);
    }
}

