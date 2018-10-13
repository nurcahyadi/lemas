<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inputwisata extends Model
{
  protected $fillable = [
      'nama', 'foto', 'deskripsi', 'alamat','status'
  ];
}
