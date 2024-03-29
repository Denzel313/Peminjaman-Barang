<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyedia extends Model
{
    use HasFactory;
    protected $table = 'penyedia';
    protected $primaryKey = 'id_penyedia';
    protected $fillable = [
        'nama_penyedia',
        'alamat_penyedia',
        'telpon_penyedia',
    ];
}
