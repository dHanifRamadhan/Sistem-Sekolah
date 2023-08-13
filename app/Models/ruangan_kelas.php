<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan_kelas extends Model
{
    use HasFactory;

    protected $table = 'ruangan_kelas';
    protected $fillable = [
        'nama'
    ];
    protected $primarykey = 'id';
}
