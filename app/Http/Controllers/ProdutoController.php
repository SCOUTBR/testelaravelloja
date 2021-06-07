<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function produtos (Request $request){
      $data =[];

      $data['lista_prod'] = Produto::all();

      return view('home', $data);
    }

    public function categoria (Request $request, $idcategoria = 0){
      $data =[];

      $consultaProdutos = Produto::limit(4);

      if($idcategoria != 0){
        $consultaProdutos->where('cat_id', $idcategoria);
      }

      $data['lista_cat'] = Categoria::all();
      $data['lista_prod'] = $consultaProdutos->get();

      $data['id_categoria'] = $idcategoria;
      
      return view('categoria', $data);
    }

    public function add_carrinho(Request $request, $idprod = 0){
      $prod = Produto::find($idprod);

      if(isset($prod)){
        $carrinho = session('cart', []);
        
        array_push($carrinho, $prod);  
        
        session(['cart' => $carrinho]);
      }

      return redirect()->route('home');
    }

    public function rm_carrinho(Request $request, $iditem){
      $carrinho = session('cart', []);
    
      if(isset($carrinho[$iditem])){
        unset($carrinho[$iditem]);
        }

        session(['cart' => $carrinho]);

        return redirect()->route('carrinho');

      }


      public function carrinho(Request $request){
        $carrinho = session('cart', []);
        
        $data = ['cart' => $carrinho];
  
        return view('carrinho', $data);
      }
      
    }
