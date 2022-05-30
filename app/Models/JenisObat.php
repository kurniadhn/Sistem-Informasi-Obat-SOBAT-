<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisObat extends Model
{
    use HasFactory;

    protected $table = 'jenis_obat';
    protected $primaryKey = 'id_jenis';

    protected $fillable = [
        'type',
    ];
}
