<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    use HasFactory;

    /**
     * Атрибуты таблицы statuses
     * @var array<int, string>
     */
    protected $fillable =
        [
            'order_id',
            'status'
        ];
    /**
     * Наименование таблицы
     * @var string
     */
    protected $table = 'statuses';
    /**
     * Первиный ключ
     * @var int
     */
    protected $primaryKey = 'status_id';

    /**
     * связи one-to-many
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
