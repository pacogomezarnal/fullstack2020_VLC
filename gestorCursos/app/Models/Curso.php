<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /**
     * Get the entregables for the blog post.
     */
    public function entregables()
    {
        return $this->hasMany('App\Models\Entregable');
    }
}
