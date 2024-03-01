<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layangPandang extends Model
{
    use HasFactory;
    protected $table = 'layang_pandang';
    protected $primaryKey = 'id_layang_pandang';
    protected $fillable = ['layang_pandang'];
}
