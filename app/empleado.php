<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = "empleados";
	protected $fillable = ['id_empleado','id_empresa','nombre','apellido','direccion','correo'];
	 protected $filetable = ['id_empleado','id_empresa','nombre','apellido','direccion','correo'];

public function empresa()
    {
        return $this->belongsTo('App\empresa');
    }

}
