<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $fillable = [
        'nama',
        'nama_profile',
        'nip',
        'email',
        'nomor_telepon',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'path',
        'ori_nama_file'
    ];
    protected $primarykey = 'id';
}
