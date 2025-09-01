<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ugd extends Model
{
    use HasFactory;
    protected $table = 'ugd';
    protected $fillable = [
        'foto', 'detail_pelayanan'
    ];
}
