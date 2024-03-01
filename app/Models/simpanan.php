<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    use HasFactory;

    protected $table = 'simpanan';
    protected $primaryKey = 'id_simpanan';
    protected $fillable = ['deskripsi_simpanan', 'id_katesim'];

    public function katesim()
    {
        return $this->belongsTo(katesim::class, 'id_katesim', 'id_katesim');
    }

    public function scopeJoinKateSim($query)
    {
        return $query->whereHas('katesim')
        ->join('katesim', 'katesim.id_katesim', '=', 'simpanan.id_katesim');
    }
}
