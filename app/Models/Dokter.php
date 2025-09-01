<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $fillable = [
        'nama', 'poli_id',
    ];

    public function Poli()
    {
        return $this->belongsTo(Poli::class, 'poli_id');
	}

    public function RawatInap()
    {
        return $this->hasMany(RawatInap::class, 'dokter_id', 'id');
    }

    public function RawatJalan()
    {
        return $this->hasMany(RawatJalan::class, 'dokter_id', 'id');
    }
}
