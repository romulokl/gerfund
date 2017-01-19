@extends('layouts.oficial')

@section('conteudo')	
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Resultado da consulta de propriedades</div>
		    <div class="panel-body container-fluid">
				
				<div class="form-group">
						<label>Critério da pesquisa</label>
						
						<input type="text" name="criterio" id="criterio" class="form-control">
					</div>
				
					
				
				<!-- Tabela para exibição dos resultados da consulta -->
				
					<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome do proprietário</th>
							<th>Genero</th>
						</tr>
					</thead>
					<tbody>						
								
					</tbody>					
					</table>
			</div>		
		</div>
	</div>
	<script type="text/javascript">
		$('#criterio').on('keyup', function(){
			$valor = $(this).val();
			$.ajax({
				type :'get',
				url : '{{URL::to('/consulta/consultandoProprietario')}}',
				data : {'criterio':$valor},
				success :  function(data){
					//console.log(data);
					$('tbody').html(data);
				}
			});
		})
	</script>
@endsection