<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkWA extends Model
{
    use HasFactory;
    protected $table = "link_wa";
    protected $primaryKey = "id_link_WA";
    protected $fillable = ["link_WA"];
}
