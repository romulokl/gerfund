<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Propriedade;
use Cartorio;

class FundiarioController extends Controller
{
    public function empreendimento(){
    	return view('cadastro.empreendimento');
    }
     public function propriedade(){
    	return view('cadastro.propriedades')->with('cartorio', Cartorio::all());
    }
     public function proprietario(){
    	return view('cadastro.proprietarios');
    }
    public function teste(){
    	if(DB::connection()->getDatabaseName())
   		{
     		echo "connected successfully to database ".DB::connection()->getDatabaseName();
   		}
    }
    public function cartorio(){
        return view('cadastro.cartorios');
    }
    public function cadastraPropriedade(){

        Propriedade::create(Request::all());
        return redirect()->action('FundiarioController@proprietario')->withInput(Request::only('nome'));
    }   
}
