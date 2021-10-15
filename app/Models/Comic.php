<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// aggiunta per soft delite (cestino)
use Illuminate\Database\Eloquent\SoftDeletes;


class Comic extends Model
{
    //
    use SoftDeletes;


    //! campi per la funzione fill
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'slug'];
}





// per aggiungere la colonna nel db per il soft delite eseguire una migration per crearla nel db
// php artisan make:migration add_deleted_at_to_comics_table --table=comics 