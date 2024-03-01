<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkPendaftaran extends Model
{
    use HasFactory;
    protected $table = "link_pendaftaran";
    protected $primaryKey = "id_link_pendaftaran";
    protected $fillable = ['nama_link', 'link', 'keterangan'];
}
