<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deposito_syariah extends Model
{
    use HasFactory;

    protected $table = 'deposito_syariah';
    protected $primaryKey = 'id_depsyar';
    protected $guarded = ['id_nisbah'];

    public function katedeposito()
    {
        return $this->belongsTo(katedeposito::class, 'id_katedeposito', 'id_katedeposito');
    }

    public function scopeJoinKateDeposito($query)
    {
        return $query->whereHas('katedeposito')
        ->join('katedeposito', 'deposito_syariah.id_katedeposito', '=', 'katedeposito.id_katedeposito');
    }
}
