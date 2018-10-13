<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class umkm extends Model
{
  protected $fillable = [
      'nama_umkm', 'foto_umkm', 'deskripsi_umkm', 'alamat_umkm'
  ];
}
