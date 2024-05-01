<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    /**
     * Атрибуты таблицы roles
     * @var array<int>
     */
    protected $fillable =
        [
            'role'
        ];
    /**
     * Наименование таблицы
     * @var string
     */
    protected $table = 'roles';
    /**
     * Первичный ключ
     * @var int
     */
    protected $primaryKey = 'role_id';

    /**
     * связь many-to-many с users
     */
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
