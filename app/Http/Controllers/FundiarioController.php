<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Cartorio;
use fundiario\Propriedade;
use Illuminate\Http\Request;


class FundiarioController extends Controller
{
    public function empreendimento(){
    	return view('cadastro.empreendimento');
    }
     public function propriedade(){
    	return view('cadastro.propriedades');//->with('cartorio', Cartorio::all());
    }
    public function cadastraPropriedade(){

        Propriedade::create(Request::all());
        return redirect()->action('FundiarioController@proprietario')->withInput(Request::only('nome'));
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
    public function cadastraCartorio(){

        Cartorio::create(Request::all());
        return redirect()->action('cadastro.propriedades');
    }
    
}
