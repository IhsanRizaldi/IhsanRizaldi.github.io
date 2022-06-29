<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratM extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['cari'] ?? false, function($query, $cari){
            return  $query->where('no_surat','like','%'.$cari.'%')
                   ->orWhere('perihal','like','%'.$cari.'%')
                   ->orWhere('tanggal','like','%'.$cari.'%')
                   ->orWhere('alamat','like','%'.$cari.'%')
                   ->orWhere('dok','like','%'.$cari.'%');
        });
    }

    protected $fillable = [
        'no_surat',
        'perihal',
        'alamat',
        'tanggal',
        'dok'
    ];
}
