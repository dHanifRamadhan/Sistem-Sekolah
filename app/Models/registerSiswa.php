<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hobi;

class registerSiswa extends Model
{
    use HasFactory;

    protected $table = 'register_siswa';
    protected $fillable = [
        'nama',
        'nama_profile',
        'nisn',
        'email',
        'password',
        'alamat',
        'nomor_telepon',
        'tanggal_lahir',
        'jenis_kelamin',
        'hobi_id',
        'path',
        'ori_nama_file'
    ];
    protected $primarikey = 'id';

    public function hobi()
    {
        return $this->belongsToMany(hobi::class, registerSiswa::class, 'id');
    }
}
