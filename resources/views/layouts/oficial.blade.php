<!DOCTYPE html>
<html>
<head>
	<title></title>		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">  
  	<link rel="stylesheet" href="/resources/demos/style.css">

	<script src="jquery.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="jquery.maskedinput.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
  	

	
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
</head>
<body>
	<div>

		<div class="corpo">
		<nav class="navbar navbar-inverse barra">
		<div class="container-fluid">
				<div class="navbar-left">
					<a href="/"><img src="/imagens/a-02.png" width="50px" height="50px"></a>
					<!--<img src="https://sigacontrol.blob.core.windows.net/siga/SIGA/ICON_SIGA_150x150px.png" width="50px" height="50px">-->
				</div>
			@if(auth()->guest())
				<div class="navbar-center">
					<a href="/" class="navbar-brand" style="color: white;">&nbsp Gerenciamento Fundiário </a>
				</div>
			</div>
			@else
			<div class="navbar-center">					
					<a href="{{action('ConsultaController@consultaPropriedade')}}" class="navbar-brand" style="color: white;">&nbsp Gerenciamento Fundiário </a>
				</div>
			<ul class="nav navbar-nav navbar-left">
				
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Cadastro<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{action('FundiarioController@empreendimento')}}">Empreendimento</a></li>
							<li><a href="{{action('FundiarioController@propriedade')}}">Propriedade</a></li>
							<li><a href="{{action('FundiarioController@proprietario')}}">Proprietário</a></li>
							<li><a href="{{action('FundiarioController@cartorio')}}">Cartório</a></li>
						</ul>
					</li>
				
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Consulta<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{action('ConsultaController@consultaEmpreendimento')}}">Empreendimento</a></li>
						<li><a href="{{action('ConsultaController@consultaPropriedade')}}">Propriedade</a></li>
						<li><a href="{{action('ConsultaController@consultaProprietario')}}">Proprietário</a></li>
					</ul>
				</li>
				
			</ul>

			<div class="dropdown navbar-right" style="padding-top: 10px; padding-right: 10px;">
	              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: white;">{{ auth()->user()->name }} <span class="caret"></span>
	              </a>
	              <ul class="dropdown-menu" role="menu">
	                                    <li>
	                                        <a href="{{ url('/login') }}"
	                                            onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit(); ">
	                                            Logout
	                                           
	                                        </a>

	                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	                                             {!! csrf_field() !!}
	                                        </form>
	                                    </li>
	                </ul>  
	        </div>  
	            
	          @endif
		</nav>
		
		<div class="container ">
			
		
		@yield('conteudo')

		<div class="container">
			
		</div>
		</div>
		@yield('footer')
		<footer class="footer barra">
	      <a href="http:\\www.controlambiental.com.br" target="_BLANK" style="color: white;">© Control Ambiental - Sustentabilidade e Meio Ambiente</a>
	 	</footer>
	 	</div>
	</div>
		<script src="/js/app.js"></script>
		<script src="/js/script.js"></script>
</body>
</html>