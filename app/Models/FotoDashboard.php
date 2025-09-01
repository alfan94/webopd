<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoDashboard extends Model
{
    use HasFactory;
    protected $table = 'foto_dashboard';
    protected $fillable = [
        'foto', 'urutan', 'judul'
    ];
}
