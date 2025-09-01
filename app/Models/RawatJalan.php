<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    use HasFactory;
    protected $table = 'rawat_jalan';
    protected $fillable = [
        'dokter_id'
    ];

    public function Dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
	}
}
