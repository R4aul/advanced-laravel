<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Invocie extends Model
{

    protected $fillable = [
        'payment_id',
        'uuid',
        'issued_at',
    ];

    protected $casts = [
        'issued_at' => 'datetime',
    ];

    /**
     * Relación 1 a 1 con Payment
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    /**
     * Generar UUID automáticamente
     */
    protected static function booted()
    {
        static::creating(function ($invoice) {
            $invoice->uuid ??= (string) Str::uuid();
            $invoice->issued_at ??= now();
        });
    }
}
