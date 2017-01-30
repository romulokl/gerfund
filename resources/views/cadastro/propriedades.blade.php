@extends('layouts.oficial')

@section('conteudo')
	@if(old('denominacao'))
		<div class="alert alert-success">
				Propriedade {{old('denominacao')}} salva com sucesso!
		</div>
	@endif
<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastro de propriedades</div>
		    <div class="panel-body container-fluid">
		    <form method="post" role="form" action="/cadastro/cadastraPropriedade">
		    <input type="hidden" name="_token" value="{{csrf_token()}}">
		    	<div class="row">
			    	<div class="form-group col-xs-8">
			    		<label for="denominacao">Denominação</label>
			    		<input type="text" name="denominacao" id="denominacao" class="form-control" placeholder="Ex.: Fazenda Paineiras" value="{{ old('denominacao') }}">
			    		<small>Nome da propriedade</small>
			    	</div>
			    	<div class="form-group col-xs-4">
			    		<label for="cod_empreendimento">Empreendimento</label>			    		
			    			<select class="form-control" name="cod_empreendimento" id="cod_empreendimento" value="{{old('cod_empreendimento')}}">
			    			@foreach($empreendimento as $e)
			    				<option value="{{$e->cod_empreendimento}}">{{$e->denominacao}}</option>
			    			@endforeach
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
		    	<div class="row">
			    	<div class="form-group col-xs-8">
			    		<label for="proprietario">Proprietário</label>
			    		<select name="proprietario" id="proprietario" class="form-control" value="{{ old('proprietario') }}">	
			    		@foreach($proprietario as $p)		    		
			    			<option value="{{$p->cod_proprietario}}">{{$p->nome}}</option>
			    		@endforeach
			    		</select>
			    	</div>
			    	<div class="col-xs-4">
			    		<label for="area">Área (ha)</label>
			    		<input type="text" name="area" id="area" class="form-control" value="{{ old('area') }}">
			    	</div>
		    	</div>
		    	<label>Propriedade é registrada?</label>
		    	<div class="row">		    		
		    		<div class="form-group col-xs-4">
		    			<label>Sim:</label>
		    			<input type="radio" name="idt_registrado" value="true">		    		
		    		</div>
		    		<div class="form-group col-xs-4">
		    			<label>Não:</label>
		    			<input type="radio" name="idt_registrado" value="false">		    		
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="form-group col-xs-4">
			    		<label for="numero_itr">Número do ITR (NIRF)</label>
			    		<input type="text" name="numero_itr" id="itr" class="form-control" value="{{ old('numero_itr') }}">
			    	</div>
			    	<div class="form-group col-xs-4">
			    		<label for="numero_ccir">Número do  CCIR</label>
			    		<input type="text" name="numero_ccir" id="proprietario" class="form-control" value="{{ old('proprietario') }}">
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
			    		<label for="num_autenticidade">Número de Autenticidade (CCIR)</label>
			    		<input type="text" name="num_autenticidade" id="num_autenticidade" class="form-control" value="{{ old('num_autenticidade') }}">
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
			    		<label for="averbacao_rl">Número da averbação da Reserva Legal</label>
			    		<input type="text" name="averbacao_rl" id="averbacao_rl" class="form-control" value="{{old('averbacao_rl')}}">		    			
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="form-group col-xs-4">
			    		<label for="cod_cartorio">Cartório</label>
			    		<select class="form-control" name="cod_cartorio">
			    		@foreach($cartorio as $c)
			    			<option value="{{$c->cod_cartorio}}">{{$c->nome}}</option>			    		
			    		@endforeach
			    		</select>
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
		    </form>		    
		    </div>
		</div>		
</div>

@endsection