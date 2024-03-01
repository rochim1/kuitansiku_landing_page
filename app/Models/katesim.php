<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katesim extends Model
{
    use HasFactory;

    protected $table = 'katesim';
    protected $primaryKey = 'id_katesim';
    protected $guarded = ['id_katesim'];

    public function simpanan()
    {
        return $this->hasMany(simpanan::class, 'id_katesim', 'id_katesim');
    }
}
