<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket_obat';
    protected $primaryKey = 'id_paket';

    protected $fillable = [
        'paket',
        'price',
    ];
}
