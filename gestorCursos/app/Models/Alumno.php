<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The cursos that belong to the user.
     */
    public function cursos()
    {
        return $this->belongsToMany('App\Models\Curso');
    }

    public function saveCursos(){

    }

}
