<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembiayaan extends Model
{
    use HasFactory;

    protected $table = 'pembiayaan';
    protected $primaryKey = 'id_pembiayaan';
    protected $guarded = ['id_pembiayaan'];

    public function katepem()
    {
        return $this->belongsTo(katepem::class, 'id_katepem', 'id_katepem');
    }
}
