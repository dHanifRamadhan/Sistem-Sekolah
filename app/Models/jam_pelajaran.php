<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jam_pelajaran extends Model
{
    use HasFactory;

    protected $table = 'jam_pelajarans';
    protected $fillable = [
        'jam',
        'keterangan',
    ];
    protected $primarykey = 'id';
}
