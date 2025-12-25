<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamars'; // atau 'kamar'
    protected $fillable = ['nama_kamar', 'tipe', 'harga'];
}
