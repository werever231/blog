<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Alumno extends Model
{
    protected $table = 'alumno';



    protected $fillable = ['matricula', 'id_usuario','clinica','status'];
    
    public $timestamps = false;
}