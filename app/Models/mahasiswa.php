<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = ['npm', 'nama'];
    
    public function jadwalMatakuliah()
    {
        return $this->hasMany(JadwalMatakuliah::class, 'npm', 'npm');
    }
}
