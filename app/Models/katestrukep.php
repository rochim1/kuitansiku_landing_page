<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katestrukep extends Model
{
    use HasFactory;

    protected $table = 'katestrukep';
    protected $primaryKey = 'id_katestrukep';
    protected $guarded = ['id_katestrukep'];

    public function strukep()
    {
        return $this->hasMany(strukep::class, 'id_katestrukep', 'id_katestrukep');
    }

    public function scopeJoinStruKep($query)
    {
        return $query->whereHas('katestrukep')
        ->join('strukep', 'strukep.id_katestrukep', '=', 'katestrukep.id_katestrukep');
    }
}
