<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\namaLegalitas;

class legalitas extends Model
{
    use HasFactory;

    protected $table = 'legalitas';
    protected $primaryKey = 'id_legalitas';
    protected $guarded = ['id_legalitas'];

    public function namaLegalitas()
    {
        return $this->belongsTo(namaLegalitas::class, 'id_nama_legalitas', 'id_nama_legalitas');
    }

    public function scopeJoinNamaLegalitas($query)
    {
        return $query->whereHas('namaLegalitas')
        ->join('nama_legalitas', 'nama_legalitas.id_nama_legalitas', '=', 'legalitas.id_nama_legalitas');
    }
}
