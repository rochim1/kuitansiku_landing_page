<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\katestrukep as ModelKateStrukep;

class strukep extends Model
{
    use HasFactory;

    protected $table = 'strukep';
    protected $primaryKey = 'id_strukep';
    protected $guarded = ['id_strukep'];    

    public function katestrukep()
    {
        return $this->belongsTo(katestrukep::class, 'id_katestrukep', 'id_katestrukep');
    }

    public function scopeJoinKategoriStruKep($query)
    {
        return $query->whereHas('struKep')
        ->join('katestrukep as kategori', 'strukep.id_katestrukep', '=', 'kategori.id_katestrukep');
    }
}
