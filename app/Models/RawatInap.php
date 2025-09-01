<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model
{
    use HasFactory;
    protected $table = 'rawat_inap';
    protected $fillable = [
        'dokter_id'
    ];

    public function Dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
	}


}
