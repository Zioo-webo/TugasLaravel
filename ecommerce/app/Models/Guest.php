<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Guest extends Authenticatable
{
    // inisialisasi tabel produk
    protected $table = 'account_user';

    // inisialisasi primary key di dalam tabel
    protected $primaryKey = 'id_user';

    // inisialisasi data yang bisa di isi di dalam tabel
    // protected $fillable = ['nama_product','harga','stok'];

    // inisialisasi data yang tidak bisa di isi di dalam table
    protected $guarded = ['id_user'];
}
