<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    use HasFactory;
   
    protected $table = 'jadwal_matakuliah';

    protected $fillable = ['npm', 'id_prodi', 'id_matakuliah'];
    
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'npm', 'npm');
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'id_matakuliah', 'id_matakuliah');
    }
}
