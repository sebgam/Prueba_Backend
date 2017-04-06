<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Http\Controllers\Controller;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();

        $users = \DB::table('empleados')->paginate(2);

        return view('listarEmpleados',['empleados'=>$empleados,'paginacion'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado($request->all());
        $empleado->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_empleado)
    {
       $empleados = Empleado::find('id_empleado'=>$id_empleado);
        return view('editarEmpleado')->with('empleados', $empleados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_empleado)
    {
         $empleados = Empleado::find($id_empleado);
        $empleados->id_empleado = $request->id_empleado;
        $empleados->id_empresa = $request->id_empresa;
        $empleados->nombre = $request->nombre;
        $empleados->apellido = $request->apellido;
        $empleados->direccion = $request->direccion;
        $empleados->correo = $request->correo;
        $empleados->save();

       return redirect('/listarempleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_empleados)
    {
      
   \DB::table('empleados')->where('id_empleado',$id_empleados)->delete();

      return back();
    }
}
