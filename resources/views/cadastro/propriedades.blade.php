@extends('layouts.oficial')

@section('conteudo')
<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastro de propriedades</div>
		    <div class="panel-body container-fluid">
		    <form method="post" role="form" action="/cadastro/propriedade">
		    	<div class="form-group">
		    		<label for="denominacao">Denominação</label>
		    		<input type="text" name="denominacao" id="denominacao" class="form-control" placeholder="Ex.: Fazenda Paineiras" value="{{ old('denominacao') }}">
		    		<small>Nome da propriedade</small>
		    	</div>
		    	<div class="row">
			    	<div class="form-group col-xs-4">
			    		<label for="cep">CEP</label>
			    		<input type="text" name="cep" id="cep" class="form-control" onchange="" maxlength="10" placeholder="Ex.: 00000-000" value="{{ old('cep') }}">
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
			    		<input type="text" name="quadra" id="quadra" class="form-control" maxlength="10" value="{{ old('quadra') }}">
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
			    		<input type="text" name="municipio" id="municipio" class="form-control" maxlength="10" value="{{ old('municipio') }}">
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
		    	<div class="row">
			    	<div class="form-group col-xs-8">
			    		<label for="proprietario">Proprietário</label>
			    		<input type="text" name="proprietario" id="proprietario" class="form-control" value="{{ old('proprietario') }}">
			    	</div>
			    	<div class="col-xs-4">
			    		<label for="area">Área (ha)</label>
			    		<input type="text" name="area" id="area" class="form-control" value="{{ old('area') }}">
			    	</div>
		    	</div>
		    	<div class="row">
		    		<div class="form-group col-xs-4">
			    		<label for="itr">Número do ITR (NIRF)</label>
			    		<input type="text" name="itr" id="itr" class="form-control" value="{{ old('itr') }}">
			    	</div>
			    	<div class="form-group col-xs-4">
			    		<label for="proprietario">Número do  CCIR</label>
			    		<input type="text" name="proprietario" id="proprietario" class="form-control" value="{{ old('proprietario') }}">
			    	</div>
			    	<div class="form-group col-xs-4">
			    		<label for="dt_geracao">Data de geração (CCIR)</label>
			    		<input type="date" name="dt_geracao" id="dt_geracao" class="form-control" value="{{ old('dt_geracao') }}">
			    	</div>
		    	</div>
		    	<div class="row">
		    		<div class="form-group col-xs-4">
			    		<label for="cod_imovel">Código do imóvel rural (CCIR)</label>
			    		<input type="text" name="cod_imovel" id="cod_imovel" class="form-control" value="{{ old('cod_imovel') }}">
			    	</div>
			    	<div class="form-group col-xs-4">
			    		<label for="modulos_fiscais">Número de Módulos Rurais (CCIR)</label>
			    		<input type="text" name="modulos_fiscais" id="modulos_fiscais" class="form-control" value="{{ old('modulos_fiscais') }}">
			    	</div>
			    	<div class="form-group col-xs-4">
			    		<label for="num_autencidade">Número de Autenticidade (CCIR)</label>
			    		<input type="text" name="num_autencidade" id="num_autencidade" class="form-control" value="{{ old('num_autencidade') }}">
			    	</div>
		    	</div>
		    	<div class="row">
		    		<div class="form-group col-xs-6">
			    		<label for="registro_car">Registro do CAR</label>
			    		<input type="text" name="registro_car" id="registro_car" class="form-control" value="{{ old('registro_car') }}">
			    	</div>
			    	<div class="form-group col-xs-6">
			    		<label for="dt_cadastro">Data de cadastro (CAR) </label>
			    		<input type="date" name="dt_cadastro" id="dt_cadastro" class="form-control" value="{{ old('dt_cadastro') }}">
			    	</div>			    	
		    	</div>
		    	<div class="row">
		    		<div class="form-group col-xs-6">
			    		<label for="area_rl">Área de Reserva Legal</label>
			    		<input type="text" name="area_rl" id="area_rl" class="form-control" value="{{old('area_rl')}}">		    			
		    		</div>
		    		<div class="form-group col-xs-6">
			    		<label for="averbacao">Número da averbação da Reserva Legal</label>
			    		<input type="text" name="averbacao" id="averbacao" class="form-control" value="{{old('averbacao')}}">		    			
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="form-group col-xs-4">
			    		<label for="cod_cartorio">Cartório</label>
			    		<select type="text" name="cod_cartorio" id="cod_cartorio" class="form-control" value="{{old('cod_cartorio')}}">	
			    			<option></option>
			    			<option>Cartório 1</option>
			    			<option>Cartório 2</option>
			    		</select><br>
			    		<button type="button" class="btn" data-toggle="modal" data-target="#myModal" id="botao">Outro</button>	    			
		    		</div>
		    		<div class="form-group col-xs-4">
			    		<label for="matricula">Matrícula</label>
			    		<input type="text" name="matricula" id="matricula" class="form-control" value="{{old('matricula')}}">		    			
		    		</div>
		    		<div class="form-group col-xs-2">
			    		<label for="livro">Livro</label>
			    		<input type="text" name="livro" id="livro" class="form-control" value="{{old('livro')}}">		    			
		    		</div>
		    		<div class="form-group col-xs-2">
			    		<label for="folha">Folha</label>
			    		<input type="text" name="folha" id="folha" class="form-control" value="{{old('folha')}}">		    			
		    		</div>
		    	</div>
		    	<br>
		    	<button class="btn btn-primary">Salvar</button>		    			    
		    	<!--Modal de cadastro de cartório -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Cadastro de Cartório</h4>
					      </div>
					      <div class="modal-body">
					      <div class="container teste">
					      		<div class="form-group">
					      			<label for="nome_cartorio">Nome do Cartório</label>
					      			<input type="" name="nome_cartorio" class="form-control">
					      		</div>
					      		<div class="form-group">
					      			<label for="nome_tabeliao">Nome do tabelião</label>
					      			<input type="" name="nome_tabeliao" class="form-control">
					      		</div>
					      		<div class="row"></div>
						      		<div class="form-group col-xs-4">
						      			<label for="telefone">Telefone</label>
						      			<input type="" name="telefone" class="form-control">
						      		</div>
						      		<div class="form-group col-xs-6">
						      			<label for="email">E-mail</label>
						      			<input type="" name="email" class="form-control">
						      		</div>
						      	</div>
						   </div>
					      
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					    <!-- This is the submit button of the form -->
					        <button type="submit" class="btn btn-primary">Salvar</button> 
					      </div>
					    </div>
					  </div>
					</div>			

		    </form>		    
		    </div>
		</div>		
</div>

@endsection