<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Cartorio;
use App\Propriedade;
use App\Proprietario;
use App\Empreendimento;
//use Illuminate\Http\Request;
use Request;


class FundiarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('Autorizador');
    }
    public function empreendimento(){
    	return view('cadastro.empreendimento');
    }
    public function cadastraEmpreendimento(){
        Empreendimento::create(Request::all());
        return redirect()->action('FundiarioController@empreendimento')->withInput(Request::only('denominacao'));
    }
     public function propriedade(){
    	return view('cadastro.propriedades')->with('cartorio', Cartorio::all())->with('proprietario', Proprietario::all())->with('empreendimento', Empreendimento::all());
    }
    public function cadastraPropriedade(){

        Propriedade::create(Request::all());
        return redirect()->action('FundiarioController@propriedade')->withInput(Request::only('denominacao'));
    }   
     public function proprietario(){
    	return view('cadastro.proprietarios');
    }
    public function cadastraProprietario(){

        Proprietario::create(Request::all());
        return redirect()->action('FundiarioController@proprietario')->withInput(Request::only('nome'));
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
        return redirect()->action('FundiarioController@cartorio')->withInput(Request::only('nome'));
    }
    public function propriedadeProprietario(){
        
       
        return view('cadastro.propriedadeProprietario')->with('propriedades', Propriedade::all())->with('proprietarios', Proprietario::all());
    }
}
