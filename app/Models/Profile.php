<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    //
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'user_id',
        'phone_number',
        'address',
        'sex',
        'photo',
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
