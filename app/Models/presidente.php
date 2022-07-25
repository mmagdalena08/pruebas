<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presidente extends Model
{
    use HasFactory;
    protected $table= 'presidente';
    public $timestamps =false;
    public $fillable = ['nombre','apellido','cedula','fecha_posesion'];
}
