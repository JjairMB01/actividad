<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email','telefono'];

    public function cursos()
    {
        //relacion de muchos a mucho
        return $this->belongsToMany(Curso::class, 'matriculaciones');
    }

}
