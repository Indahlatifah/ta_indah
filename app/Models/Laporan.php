<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table ="Laporan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'jenis',
        'bidang',
        'isi',
        'gambar'
    ];
    // protected function jenis(): Attribute
    // {
    //     return new Attribute( get: fn ($value) => ["pengaduan","aspirasi"][$value],
    //     //return new Attribute( get: fn ($value) => ['0', '1', '2', '3', '4', '5'][$value],
    //     );
    // }
}
