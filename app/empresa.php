<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table = "empresa";
	protected $fillable = ['id','nombre','direccion','correo'];
	protected $filetable = ['id','nombre','direccion','correo'];


	public function empleados()
    {
        return $this->hasMany('App\empleado');
    }
}
