<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Cartorio;
use App\Propriedade;
use App\Proprietario;
use App\Empreendimento;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
//use Request;

class ConsultaController extends Controller
{
	//trazendo a view de consulta as propriedades
	public function consultaPropriedade()
	{
		return view('consulta.consultaPropriedade');
	}	
	//função que busca as propriedades do banco de dados levando em consideração os criterios do usuario
	public function consultandoPropriedade(Request $request){

		if($request->ajax()){
			$output="";
			$resultados = DB::table('tb_propriedades')->where('denominacao', 'LIKE', '%'.$request->criterio.'%')->orWhere('estado','LIKE', '%'.$request->criterio.'%')->get();
													 
													  /*->orWhere('estado','LIKE', '%'.$request->criterio.'%')*/
			if($resultados){
				foreach ($resultados as $key => $resultado) {
					$output.='<tr>'.
								'<td>'.$resultado->cod_propriedade.'</td>'.
								'<td>'.$resultado->denominacao.'</td>'.								
								'<td>'.$resultado->estado.'</td>'.
								'<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detalhes">Detalhes</button></td>'.
							'</tr>';
				}
				return Response($output);
			}else{
				$output.='<tr>'.
								'<td>'."Nenhum resultado encontrado".'</td>'.								
							'</tr>';				
			}return Response($output);

		}
		
	}	
	//função que trás a view de busca por proprietarios
	public function consultaProprietario(){
		return view('consulta.consultaProprietario');
	}
	//função que busca os proprietarios do banco de dados levando em consideração os criterios do usuario
	public function consultandoProprietario(Request $request){

		if($request->ajax()){
			$output="";
			$resultados = DB::table('tb_proprietarios')->where('nome', 'LIKE', '%'.$request->criterio.'%')->orWhere('genero','LIKE', '%'.$request->criterio.'%')->get();
													 
													  /*->orWhere('estado','LIKE', '%'.$request->criterio.'%')*/
			if($resultados){
				foreach ($resultados as $key => $resultado) {
					$output.='<tr>'.
								'<td>'.$resultado->cod_proprietario.'</td>'.
								'<td>'.$resultado->nome.'</td>'.								
								'<td>'.$resultado->genero.'</td>'.
							'</tr>';
				}
				return Response($output);
			}else{
				$output.='<tr>'.
								'<td>'."Nenhum resultado encontrado".'</td>'.								
							'</tr>';				
			}return Response($output);

		}
		
	}

}