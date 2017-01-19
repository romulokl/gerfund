@extends('layouts.oficial')

@section('conteudo')	
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Consulta de propriedades</div>
		    <div class="panel-body container-fluid">
				<form action="/consulta/consultandoPropriedade" method="post">

				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<h4>Selecione o campo que deseja pesquisar</h4>
				<div class="row">
				
					<div class="form-group col-xs-2">						
						<label>Denominação</label>
						<input type="radio" name="pesquisa" value="denominacao">						
					</div>
					<div class="form-group col-xs-2">						
						<label>Tipo</label>
						<input type="radio" name="pesquisa" value="tipo">						
					</div>
					<div class="form-group col-xs-2">						
						<label>Estado</label>
						<input type="radio" name="pesquisa" value="estado">						
					</div>
					<div class="form-group col-xs-4">
						<label>Critério da pesquisa</label>
						<input type="text" name="criterio" id="criterio" class="form-control">
					</div>
					<label></label>
					<div class="form-group">
						<button class="btn btn-primary">Pesquisar</button>
					</div>
				</div>
				</form>	
				<!-- Tabela para exibição dos resultados da consulta -->
				@if(empty($resultados))

				@else
					<table>
					@foreach($resultados as $resultado)
						<tr>					
							<td value="">{{$resultado->denomoninacao}}</td>
							<td value="">{{$resultado->tipo_intervencao}}</td>	
							<td value="">{{$resultado->estado}}</td>				
						</tr>
					@endforeach						
					</table>
				@endif		
			</div>		
		</div>
	</div>
@endsection