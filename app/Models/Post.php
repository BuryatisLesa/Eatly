<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    /**
     * Атрибуты таблицы post
     * @var array<int,string>
     */
    protected $fillable =
        [
            'user_id',
            'title',
            'content',
            'image'
        ];
    /**
     * Наименование таблицы
     * @var string
     */
    protected $table = 'posts';
    /**
     * Первичный ключ
     * @var int
     */
    protected $primaryKey = 'post_id';

    /**
     * Связи one-to-many c users
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
