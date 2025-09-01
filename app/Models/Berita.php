<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = [
        'judul', 'keterangan', 'img', 'tgl_publish', 'author'
    ];

    public function Pegawai() 
    {
        return $this->belongsTo(Pegawai::class, 'author', 'id');
    }
}
