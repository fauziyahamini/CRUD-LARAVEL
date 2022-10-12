<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table='mobil';
    // protected $primarykey='id';
    // cara pertama : fillable, apa yg boleh diisi
    // protected $fillable=['nama_admin','alamat','no_telp']; 
    // cara kedua : guarded apa yg tidak boleh diisi
    protected $guarded=['id'];
}
