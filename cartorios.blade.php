@extends('layouts.oficial')

@section('conteudo')
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastro de Cartórios</div>
		    <div class="panel-body container-fluid">
				<form method="post" class="" role="form">
				<div class="row">
					<div class="form-group col-md-12">
						<label for="nome">Nome do cartório</label>			
						<input class="form-control" type="text" name="nome" id="nome">
					</div>
							
						</div>
							<div class="row">
							<div class="form-group col-md-12">
						    		<label for="tabeliao">Nome do Tabelião</label>
						    		<input type="text" name="tabeliao" id="tabeliao" class="form-control" value="{{ old('tabeliao') }}">
						    </div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="telefone">Telefone</label>
						    		<input type="text" name="telefone" id="telefone" class="form-control" value="{{ old('telefone') }}">
						    	</div>
						    		
						    	<div class="form-group col-xs-8">
						    		<label for="email">E-Mail</label>
						    		<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
						    	</div>
					    	</div>    	
					    				    	
						    	

					<div class="form group">
						<label>Observações</label>
						<textarea class="form-control"></textarea>
					</div><br>
					<button type="submit" class=" btn btn-primary" id="savebtn">Salvar</button>
				</form>
			</div>		
		</div>
	</div>



@endsection