<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  // Especificamos las columnas que podemos escribir
  protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date', 'genre_id'];

  // Especificamos las columnas que están protegidas
  protected $guarded = ['id'];

  // Para traer el valor de la fecha como tal
  protected $dates = ['release_date'];
}
