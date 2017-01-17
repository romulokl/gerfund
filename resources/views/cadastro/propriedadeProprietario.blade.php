@extends('layouts.oficial') 

@section('conteudo')
<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Propriedade Proprietário</div>
		    <div class="panel-body container-fluid">
		    
			   <div class="container-fluid">
				    <table class="table table-bordered tabela1" id="tabela" >
				    	<thead>
				    		<tr>
				    			<th>ID</th>
				    			<th>Nome</th>
				    			<th>"</th>
				    		</tr>
				    	</thead>		    	    	
				    	@foreach($proprietarios as $proprietario)
				    		<tbody>
				    			<tr >
				    				<td > {{ $proprietario->cod_proprietario }} </td>
				    				<td> {{ $proprietario->nome }} </td>
				    				<td><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></td>			    				
				    			</tr>
				    		</tbody>
				    	@endforeach				    		    
				    	</table>
				</div>
				    	<table class="table table-bordered tabela2" id="tabela2" >
				    	<thead>
				    		<tr>
				    			<th>ID</th>
				    			<th>Nome</th>
				    			<th>"</th>
				    		</tr>
				    	</thead>
				    	@foreach($propriedades as $propriedade)
				    	<tbody>
				    			<tr>
				    				<td> {{ $propriedade->cod_propriedade }} </td>
				    				<td> {{ $propriedade->denominacao }} </td>
				    				<td><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></td>	    				
				    			</tr>
				    	</tbody>
				    	@endforeach			    				
				    </table>
		    </div>		    
		</div>
</div>
@endsection