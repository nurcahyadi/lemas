<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
  protected $fillable = [
      'nama_wisata', 'foto_wisata', 'deskripsi_wisata', 'alamat_wisata'
  ];
}
