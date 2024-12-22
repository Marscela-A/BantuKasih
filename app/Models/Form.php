<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'no_telp', 'alamat', 'nominal', 'ktp', 'metode_pembayaran', 'foto',
    ]; 
} 
