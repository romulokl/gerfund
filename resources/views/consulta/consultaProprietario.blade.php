@extends('layouts.oficial')
 {!! csrf_field() !!}
@section('conteudo')	
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Consulta de proprietários</div>
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
							<th>Ação</th>
						</tr>
					</thead>
					<tbody>						
								
					</tbody>					
					</table>

					<!--Modal de visualização de detalhes do item -->
					<div class="modal fade" id="detalhes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Detalhes do proprietário</h4>
					      </div>
					      <div class="modal-body">
						     <div class="container teste">						      	
						      	<h4>Aqui irão todos os detalhes do proprietário</h4>
						    </div>
					    </div>
					      
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>					  			        
					      </div>
					    </div>
					  </div>
					</div>
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