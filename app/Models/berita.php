<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $guarded = ['id_berita'];

    public function kateber()
    {
        return $this->belongsTo(kateber::class, 'id_kateber', 'id_kateber');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'dibuat', 'id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('judul_berita', 'like', '%' . $search . '%')
                ->orWhere('deskripsi_berita', 'like', '%' . $search . '%');
        });
        
        $query->when($filters['kategori'] ?? false, function ($query, $kategori) {
            return $query->whereHas('kateber', function ($query) use ($kategori) {
                $query->where('nama_kateber', 'like', '%' . $kategori . '%');
            });
        });

        $query->when($filters['arsip'] ?? false, function ($query, $arsip) {
            $month = date('m', $arsip);
            return $query->whereMonth('created_at', $month);
        });
    }
}
