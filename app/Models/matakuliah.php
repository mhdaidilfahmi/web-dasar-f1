<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliahModel extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $primaryKey = 'id_matakuliah';
    
    protected $fillable = ['nama_matakuliah'];
    
    public function jadwalMatakuliah()
    {
        return $this->hasMany(JadwalMatakuliah::class, 'id_matakuliah');
    }
}
