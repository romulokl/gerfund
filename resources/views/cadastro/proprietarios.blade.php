@extends('layouts.oficial')

@section('conteudo')
	@if(old('nome'))
		<div class="alert alert-success">
				Proprietário {{old('nome')}} salvo com sucesso!
		</div>
	@endif
<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastro de proprietários</div>
		    <div class="panel-body container-fluid">
		    	<form method="post" role="form" action="/cadastro/cadastraProprietario">
		    	<input type="hidden" name="_token" value="{{csrf_token()}}">
		    		<div class="row">
			    		<div class="form-group col-xs-8">
			    			<label for="nome">Nome</label>
			    			<input type="text" name="nome" class="form-control">
			    		</div>
			    		<div class="form-group col-xs-4">
			    			<label for="genero">Gênero</label>
			    			<select type="text" name="genero" class="form-control">
			    				<option value="masculino">Masculino</option>
			    				<option value="feminino">Feminino</option>
			    			</select>
			    		</div>
			    	</div>
		    		<!--<div class="form-group">
		    			<label for="endereco">Endereço</label>
		    			<table class="table table-bordered table-striped" id="endereco">
		    				<tr>		    					
		    					<th>CEP</th>
		    					<th>Município</th>
		    					<th>Bairro</th>
		    					<th>Ação</th>
		    				</tr>
		    				<tr>
		    					<td>00000-000</td>
		    					<td>Alagoinhas</td>
		    					<td>Das Garças</td>
		    					<td width="20px"><a href="#" title="Remover"><span  class="glyphicon glyphicon-remove" id="remove"></span></a></td>
		    				</tr>
		    			</table>
		    			<button type="button" class="btn" data-toggle="modal" data-target="#myModal" id="botao">Adicionar endereço</button>
		    		</div>
		    		<div class="form-group">
		    			<label for="endereco">Contato</label>
		    			<table class="table table-bordered table-striped" id="endereco">
		    				<tr>		    					
		    					<th>Tipo</th>
		    					<th>Contato</th>
		    					<th>Ação</th>
		    				</tr>
		    				<tr>
		    					<td>E-mail</td>
		    					<td>pessoa@google.com</td>
		    					<td width="20px"><a href="#" title="Remover"><span  class="glyphicon glyphicon-remove" id="remove"></span></a></td>
		    				</tr>
		    			</table>
		    			<button type="button" class="btn" data-toggle="modal" data-target="#contato" id="botao">Adicionar contato</button>
		    		</div>-->
		    		
		    		
		    		<div class="row">
		    			<div class="form-group col-xs-6">
		    				<label for="rg">RG</label>
		    				<input type="text" name="rg" class="form-control">
		    			</div>
		    			<div class="form-group col-xs-6">
		    				<label for="cpf">CPF</label>
		    				<input type="text" name="cpf" class="form-control">
		    			</div>
		    		</div>
		    		<div class="row">
		    			<div class="form-group col-xs-6">
		    				<label for="dt_nasc">Data de nascimento</label>
		    				<input type="date" name="dt_nasc" class="form-control">
		    			</div>
		    			<div class="form-group col-xs-6">
		    				<label for="naturalidade">Naturalidade</label>
		    				<input type="text" name="naturalidade" class="form-control">
		    			</div>
		    		</div>
		    		<div class="row">			    		
			    		<div class="form-group col-xs-4">
			    			<!-- <button type="button" class="btn" data-toggle="modal" data-target="#conjugue" id="botao">Adicionar conjugue</button> -->	
			    			<label>Não possui conjugue</label>
			    			<input type="radio" name="possuiconjugue" value="false" onclick="naoPossuiConjugue();" >
			    		</div>
			    		<div class="form-group col-xs-4">
			    			<!-- <button type="button" class="btn" data-toggle="modal" data-target="#conjugue" id="botao">Adicionar conjugue</button> -->	
			    			<label>Possui conjugue</label>
			    			<input type="radio" name="possuiconjugue" value="true" checked="true" onclick="possuiConjugue();">
			    		</div>
		    		</div>
		    		<!--Codigo de cadastro do conjugue -->
		    		 <div id="cadastroConjugue">
					        <h4 class="modal-title" id="myModalLabel">Cadastro de conjugue</h4>
					      </div>
					      
					      
					      
					      	<div class="form-group">
				    			<label for="nomeconjugue">Nome</label>
				    			<input type="text" name="nomeconjugue" class="form-control" id="conjugue" value="{{ old('nome') }}">
				    		</div>
				    		<div class="row">
				    			<div class="form-group col-xs-6">
				    				<label for="rgconjugue">RG</label>
				    				<input type="text" name="rgconjugue" class="form-control" id="rgconjugue" value="{{ old('rgconjugue') }}">
				    			</div>
				    			<div class="form-group col-xs-6">
				    				<label for="cpfconjugue">CPF</label>
				    				<input type="text" name="cpfconjugue" class="form-control" id="cpfconjugue" value="{{ old('cpfconjugue') }}">
				    			</div>
			    			</div>
			    			<div class="row">
				    			<div class="form-group col-xs-6">
				    				<label for="dt_nascconjugue">Data de nascimento</label>
				    				<input type="date" name="dt_nascconjugue" class="form-control" id="dt_nascconjugue" value="{{ old('dt_nascconjugue') }}">
				    			</div>
				    			<div class="form-group col-xs-6">
				    				<label for="naturalidadeconjugue">Naturalidade</label>
				    				<input type="text" name="naturalidadeconjugue" class="form-control" id="naturalidadeconjugue" value="{{ old('naturalidadeconjugue') }}">
				    			</div>
		    				</div>
		    				<div class="form-group">
		    					<label for="contatoconjugue">Contato</label>
		    					<input type="text" name="contatoconjugue" class="form-control" id="contatoconjugue" value="{{ old('cpfconjugue') }}">
		    					<small>Insira qualquer tipo de contato do cônjugue, telefone, e-mail, etc.</small>
		    				</div>
				    		 <div class="row">
				    			<div class="form-group col-xs-4" >
						    		<label for="cepconjugue">CEP</label>
						    		<input type="text" name="cepconjugue" class="form-control" onchange="" maxlength="10" placeholder="Ex.: 00000-000" value="{{ old('cepconjugue') }}" id="cepconjugue">
						    	</div>
						    							    		
						    	<div class="form-group col-xs-4">
						    		<label for="logradouroconjugue">Logradouro</label>
						    		<input type="text" name="logradouroconjugue" id="logradouroconjugue" class="form-control" value="{{ old('logradouroconjugue') }}">
						    		</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="numeroconjugue">Numero</label>
						    		<input type="number" name="numeroconjugue" id="numeroconjugue" class="form-control" value="{{ old('numeroconjugue') }}">
						    	</div>
						    </div>					    			    	
					    	<div class="row">
						    	<div class="form-group col-xs-4">
						    		<label for="quadraconjugue">Quadra</label>
						    		<input type="text" name="quadraconjugue" id="quadraconjugue" class="form-control" maxlength="10" value="{{ old('quadraconjugue') }}">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="bairroconjugue">Bairro</label>
						    		<input type="text" name="bairroconjugue" id="bairroconjugue" class="form-control" value="{{ old('bairroconjugue') }}">
						    		</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="distritoconjugue">Distrito</label>
						    		<input type="text" name="distritoconjugue" id="distritoconjugue" class="form-control" value="{{ old('distritoconjugue') }}">
						    	</div>
						    	</div>			    	
						    	<div class="row">
						    	<div class="form-group col-xs-4">
						    		<label for="municipioconjugue">Município</label>
						    		<input type="text" name="municipioconjugue" id="municipioconjugue" class="form-control" maxlength="10" value="{{ old('municipioconjugue') }}">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="estadoconjugue">Estado</label>
						    		<input type="text" name="estadoconjugue" id="estadoconjugue" class="form-control" value="{{ old('estadoconjugue') }}">
						    		</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="paisconjugue">País</label>
						    		<input type="text" name="paisconjugue" id="paisconjugue" class="form-control" value="{{ old('paisconjugue') }}">
						    	</div>
				    			
				    		</div>
				    		<div class="form-group">
				    			<label for="observacao">Observações</label>
				    			<textarea name="observacao" id="observacao" class="form-control" value="{{old('observacao')}}"></textarea>
				    		</div>
				    		
		    		<button class="btn btn-primary">Salvar</button>
		    	</form>
		    </div>
		</div>
</div>
				<!--Modal de cadastro de endereço -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Cadastro de endereço</h4>
					      </div>
					      <div class="modal-body">
					      <div class="container teste">
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
					    	</div>
					    	</div>
					      
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					    
					        <button type="submit" class="btn btn-primary">Salvar</button> 
					      </div>
					    </div>
					  </div>
					</div>
					<!--Modal de cadastro de contato -->
					<div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Cadastro de contato</h4>
					      </div>
					      <div class="modal-body">
					      <div class="container teste">
					      <label for="tipo_contato">Tipo de contato</label>
					      	<div class="row">
						    	<div class="form-group col-xs-6">
						    		
						    		<select type="text" name="tipo_contato" id="tipo_contato" class="form-control" onchange="" maxlength="10" placeholder="Ex.: 00000-000" value="{{ old('cep') }}">
						    			<option>E-mail</option>
						    			<option>Telefone residencial</option>
						    			<option>Telefone comercial</option>
						    			<option>Celular</option>
						    		</select>
						    	</div>
						    	<div class="form-group col-xs-6">
						    		<input type="text" name="contato_" class="form-control">
						    	</div>
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
					
					
					       
					    					

@stop