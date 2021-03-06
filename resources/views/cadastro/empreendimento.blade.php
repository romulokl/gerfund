@extends('layouts.oficial')

@section('conteudo')
	@if(old('denominacao'))
		<div class="alert alert-success">
			Empreendimento {{old('denominacao')}} salvo com sucesso!
		</div>
	@endif

	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastro de empreendimento</div>
		    <div class="panel-body container-fluid">
				<form method="post" role="form" action="/cadastro/cadastraEmpreendimento">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="form-group col-md-8">
						<label class="pull-left">Denominação</label>			
						<input class="form-control" type="text" name="denominacao" id="denominacao">
					</div>
							<div class="form-group col-xs-4">
								<label class="">Tipo de intervenção</label>
								<select class="form-control" type="text" name="tipo_intervencao">
									<option></option>
									<option>Faixa de servidão</option>
									<option>Desapropriação</option>
								</select>
								</div>
						</div>
							<div class="row">
							<div class="form-group col-xs-4">
						    		<label for="cep">CEP</label>
						    		<input type="text" name="cep" id="cep" class="form-control" onchange="" placeholder="Ex.: 00000-000" value="{{ old('cep') }}">
						    </div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="logradouro">Logradouro</label>
						    		<input type="text" name="logradouro" id="logradouro" class="form-control" value="{{ old('logradouro') }}">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="numero">Numero</label>
						    		<input type="number" name="numero" id="numero" class="form-control" value="{{ old('numero') }}">
						    	</div>
					    	</div>    	
					    	<div class="row">
						    	<div class="form-group col-xs-4">
						    		<label for="quadra">Quadra</label>
						    		<input type="text" name="quadra" id="quadra" class="form-control" value="{{ old('quadra') }}">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="bairro">Bairro</label>
						    		<input type="text" name="bairro" id="bairro" class="form-control" value="{{ old('bairro') }}">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="distrito">Distrito</label>
						    		<input type="text" name="distrito" id="distrito" class="form-control" value="{{ old('distrito') }}">
						    	</div>
						    </div>			    	
						    	<div class="row">
						    	<div class="form-group col-xs-4">
						    		<label for="municipio">Município</label>
						    		<input type="text" name="municipio" id="municipio" class="form-control" value="{{ old('municipio') }}">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="estado">Estado</label>
						    		<input type="text" name="estado" id="estado" class="form-control" value="{{ old('estado') }}">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="pais">País</label>
						    		<input type="text" name="pais" id="pais" class="form-control" value="{{ old('pais') }}">
						    	</div>
						    	</div>

					<div class="form group">
						<label for="descricao">Descrição</label>
						<textarea class="form-control" name="descricao" id="descricao" value="{{old('descricao')}}"></textarea>
					</div><br>
					<button type="submit" class=" btn btn-primary" id="savebtn">Salvar</button>
				</form>
			</div>		
		</div>
	</div>

@endsection

