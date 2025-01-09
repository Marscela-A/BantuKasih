<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    //
    use HasFactory;
    protected $table = 'form';

    protected $fillable = [
        'donasi_id','nama', 'email', 'no_telp', 'alamat', 'nominal', 'ktp', 'foto','status','snap_token',
    ]; 
    public function donasi()
    {
        return $this->belongsTo(Donasi::class);
    }
} 
