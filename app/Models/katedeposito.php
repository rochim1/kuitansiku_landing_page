<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katedeposito extends Model
{
    use HasFactory;

    protected $table = 'katedeposito';
    protected $primaryKey = 'id_katedeposito';
    protected $guarded = ['id_katedeposito'];

    public function deposito()
    {
        return $this->hasMany(deposito_syariah::class, 'id_katedeposito', 'id_katedeposito');
    }
}
