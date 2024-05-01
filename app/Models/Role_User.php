<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role_User extends Model
{
    use HasFactory;

    /**
     * Атрибуты таблицы roles_users
     * @var array<int>
     */
    protected $fillable =
        [
            'user_id',
            'role_id'
        ];
    /**
     * Наименование таблицы
     * @var string
     */
    protected $table = 'roles_users';

    /**
     * связь one-to-many с users
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    /**
     * связь one-to-many с roles
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
