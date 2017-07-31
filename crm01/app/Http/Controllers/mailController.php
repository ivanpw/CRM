<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\proyecto;
use App\Encargado;
use App\recurso;
use App\proyecto_recurso;
use DB;


class mailController extends Controller
{
public function send($id){
    $users =recurso::all();

$prom=DB::table('proyectos')
        ->where('proyectos.id','=', $id)
        ->join('encargados','encargados.id','=','proyectos.encargado_id')
        ->select('proyectos.*','encargados.nombre')
        ->first();
        $encargados=Encargado::all();
foreach($users as $user) {
    if ($user->sexo==$prom->sexo) {
    if ($user->uso==$prom->uso){
 
            
    
    Mail::send('mail',array('nom' => $user->nombre,'prom' => $prom->descripcion), function($message) use ($user,$prom)
    {
        $message->to($user->correo, $user->nombre)
                ->from('roucher133@gmail.com', 'SyscomTec')
                ->subject('Hola');   

    });
    }

 }
 

}
flash('!Promocion enviada')->success();
return redirect('consultarProyectos');
}







}

