<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasi';

    protected $fillable = [
        'judul', 'kategori', 'deskripsi', 'foto',
    ];

    public function form()
    {
        return $this->hasMany(Form::class);
    }
}
