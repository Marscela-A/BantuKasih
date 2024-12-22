<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'user_id', 'donasi_id', 'jumlah', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function donasi()
    {
        return $this->belongsTo(Donasi::class);
    }
}
