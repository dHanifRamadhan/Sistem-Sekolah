<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\guru;
use App\Models\kelas;
use App\Models\jam_pelajaran;
use App\Models\ruangan_kelas;
use App\Models\mata_pelajaran;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $fillable = [
        'hari'
    ];
    protected $primarykey = 'id';

    public function jam_pelajaran(){
        return $this->hasMany(jam_pelajaran::class);
    }

    public function guru(){
        return $this->hasMany(guru::class);
    }

    public function kelas(){
        return $this->hasMany(kelas::class);
    }

    public function mata_pelajaran(){
        return $this->hasMany(mata_pelajaran::class);
    }

    public function ruangan_kelas(){
        return $this->hasMany(ruangan_kelas::class);
    }
}
