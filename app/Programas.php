<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['nombrePrograma', 'horario'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
