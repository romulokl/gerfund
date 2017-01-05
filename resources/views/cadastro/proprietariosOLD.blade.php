@extends('layouts.oficial')

@section('conteudo')
<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastro de proprietários</div>
		    <div class="panel-body container-fluid">
		    	<form>
		    		<div class="form-group">
		    			<label for="nome">Nome</label>
		    			<input type="text" name="nome" class="form-control">
		    		</div>
		    		<div class="form-group">
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
		    		</div>
		    		<label for="propriedade">Propriedade</label>
		    		<div class="row">		    		
		    			<div class="form-group col-xs-6">			    			
			    			<select id="propriedade" class="form-control">
			    				<option>Fazenda 1</option>
			    				<option>Fazenda 2</option>
			    			</select>
		    			</div>		    			
		    				<button class="btn" id="botao" >Adicionar propriedade</button>		    			
		    		</div>
		    		<div class="form-group">
			    		<table class="table table-bordered table-striped" id="endereco">
			    				<tr> 
			    					<th>Propriedade</th>
			    					<th>Município</th>
			    					<th>Ação</th>
			    				</tr>
			    				<tr>
			    					<td>Fazenda Paineiras</td>
			    					<td>Alagoinhas</td>
			    					<td width="20px"><a href="#" title="Remover"><span  class="glyphicon glyphicon-remove" id="remove"></span></a></td>
			    				</tr>
			    			</table>
		    		</div>
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
		    		<div class="form-group">
		    			<button type="button" class="btn" data-toggle="modal" data-target="#conjugue" id="botao">Adicionar conjugue</button>	
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
					<!--Modal de cadastro de conjugue-->
					<div class="modal fade" id="conjugue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Cadastro de conjugue</h4>
					      </div>
					      <div class="modal-body">
					      <div class="container teste">
					      <form>
					      	<div class="form-group">
				    			<label for="nome">Nome</label>
				    			<input type="text" name="nome" class="form-control">
				    		</div>
				    		<!-- <div id="endereco_conjugue" style="display: none">
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
				    			
				    		</div> -->
				    		<div class="row">
			    			<div class="form-group col-xs-6">
			    				<label for="rg_conjugue">RG</label>
			    				<input type="text" name="rg_conjugue" class="form-control">
			    			</div>
			    			<div class="form-group col-xs-6">
			    				<label for="cpf_conjugue">CPF</label>
			    				<input type="text" name="cpf_conjugue" class="form-control">
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
			    			<div class="form-inline">
				    			<div class="form-group">					    					    			
					    			<button type="button" class="btn botao">Adicionar endereço</button>
					    			<button type="button" class="btn botao">O mesmo do proprietário</button>
				    			</div>				    			
			    			</div>
			    			
				    		</form>
					    
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