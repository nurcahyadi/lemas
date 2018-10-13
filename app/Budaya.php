<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
  protected $fillable = [
      'nama_budaya', 'type_budaya','foto_budaya', 'deskripsi_budaya'
  ];
}
