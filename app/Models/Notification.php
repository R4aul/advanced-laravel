<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'message',
        'read_at',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    /**
     * Relación polimórfica
     */
    public function notifiable()
    {
        return $this->morphTo();
    }

    /**
     * Marcar como leída
     */
    public function markAsRead(): void
    {
        $this->update([
            'read_at' => now(),
        ]);
    }

    /**
     * Scope: solo no leídas
     */
    public function scopeUnread($query)
    {
        return $query->whereNull('read_at');
    }
}
