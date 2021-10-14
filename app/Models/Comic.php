<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    //! campi per la funzione fill

    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'slug'];
}
