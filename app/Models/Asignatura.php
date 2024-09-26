<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','curso_id'];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

}
