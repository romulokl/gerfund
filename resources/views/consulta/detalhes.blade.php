@extends('layouts.oficial')

@section('conteudo')	
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Detalhes da propriedade {{$item->denominacao}}</div>
		    <div class="panel-body container-fluid">
				<ul>
		<li>
			<b>Denominação:</b> {{$item->denominacao}}
		</li>
		<li>
			<b>Estado</b> {{$item->estado}}
		</li>
		<li>
			<b>Quantidade em estoque:</b> {{$item->proprietario}}
		</li>
	</ul>
			</div>		
		</div>
	</div>
@endsection