<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

class UsuarioController extends Controller
{
    public function cadastro(){
      
      return view('cadastro');
    }

    public function cadastrar(Request $request){
      $values = $request->all();
      
      $usuario = new Usuario();
      $usuario->fill($values);

      $endereco = new Endereco($values);
      try{
        $usuario->save();
        $endereco->usuario_id= $usuario->id;
        $endereco->save();
      } catch(\throwable $th){

      }
      
      dd($usuario);
      return redirect()->route('cadastro');
    }
}
