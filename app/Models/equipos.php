<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;
    protected $table= 'equipos';
    public $timestamps =false;
    public $fillable = ['nombre_equipo','logo','ciudad','id_presidente'];
}
