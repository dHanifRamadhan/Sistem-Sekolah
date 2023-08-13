<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\registerSiswa;

class hobi extends Model
{
    use HasFactory;

    protected $table = 'hobi';
    protected $fillable = [
        'nama'
    ];
    protected $primarykey = 'id';

    public function registerSiswa()
    {
        return $this->hasMany(registerSiswa::class);
    }
}
