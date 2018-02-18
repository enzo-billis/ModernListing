<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class TestController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $title='Ma liste de course';
        $produits=Produit::all();
        return view('test', compact('title', 'produits'));
    }

    public function add(Request $request){
        if ($request->input('number') <=0 || is_null($request->input('number'))){
            Produit::create(['nom' => $request->input('nom'), 'quantite' => 1]);
        }
        else {
            Produit::create(['nom' => $request->input('nom'), 'quantite' => $request->input('number')]);
        }

        $title='Ma liste de course';
        $produits=Produit::all();
       return view('test', compact('title', 'produits'));
    }

    public function remove(Request $request){
        Produit::where('id',$request->input('id'))->delete();
        return redirect('/');
    }
}
