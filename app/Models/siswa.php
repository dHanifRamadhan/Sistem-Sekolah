<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hobi;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $fillable = [
        'nama',
        'nama_profile',
        'nisn',
        'email',
        'alamat',
        'nomor_telepon',
        'tanggal_lahir',
        'jenis_kelamin',
        'hobi_id',
        'path',
        'ori_nama_file'
    ];
    protected $primarykey = 'id';

    public function hobi()
    {
        return $this->hasMany(hobi::class);
    }
}
