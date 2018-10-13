<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
  protected $fillable = [
      'nama_sejarah', 'foto_sejarah', 'deskripsi_sejarah'
  ];
}
