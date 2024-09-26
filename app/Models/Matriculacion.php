<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriculacion extends Model
{
    use HasFactory;

    protected $fillable = ['estudiante_id','curso_id','fecha_matriculacion'];


    public function estudiante ()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

}
