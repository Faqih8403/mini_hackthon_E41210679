<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_brg";
    protected $fillable = ['id_brg','nama_brg', 'harga_beli', 'harga_jual'];
}
