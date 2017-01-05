<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FundiarioController extends Controller
{
    public function empreendimento(){
    	return view('cadastro.empreendimento');
    }
     public function propriedade(){
    	return view('cadastro.propriedades');
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


}
