<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\penyediaSosmed;

class sosmed extends Model
{
    use HasFactory;

    protected $table = 'sosmed';
    protected $primaryKey = 'id_sosmed';
    protected $guarded = ['id_sosmed'];


    public function penyediaSosmed()
    {
        return $this->belongsTo(penyediaSosmed::class, 'id_penyedia_sosmed', 'id_penyedia_sosmed');
    }

    public function scopeJoinPenyediaSosmed($query)
    {
        return $query->whereHas('penyediaSosmed')
        ->join('penyedia_sosmed as ps', 'ps.id_penyedia_sosmed', '=', 'sosmed.id_penyedia_sosmed');
    }

}
