<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodiModel extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $primaryKey = 'id_prodi';
    
    protected $fillable = ['nama_prodi'];
    
    public function jadwalMatakuliah()
    {
        return $this->hasMany(JadwalMatakuliah::class, 'id_prodi');
    }
}
