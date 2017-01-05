<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script src="jquery.js" type="text/javascript"></script>
	<script src="jquery.maskedinput.js" type="text/javascript"></script>
	
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
</head>
<body>
	<div class="container">
		<div class="corpo">
		<nav class="navbar navbar-inverse barra">
		<div class="container-fluid">
				<div class="navbar-left">
					<a href="/"><img src="/imagens/a-02.png" width="50px" height="50px"></a>
					<!--<img src="https://sigacontrol.blob.core.windows.net/siga/SIGA/ICON_SIGA_150x150px.png" width="50px" height="50px">-->
				</div>
			<?php if(auth()->guest()): ?>
				<div class="navbar-center">
					<a href="/" class="navbar-brand">&nbsp Gerenciamento Fundiário </a>
				</div>
			</div>
			<?php else: ?>
			<div class="navbar-right">
				<ul>
					<li><a href=""></a>1</li>
					<li><a href=""></a>2</li>
				</ul>
			</div>
			<li class="dropdown">
	              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(auth()->user()->name); ?> <span class="caret"></span>
	              </a>
	              <ul class="dropdown-menu" role="menu">
	                                    <li>
	                                        <a href="<?php echo e(url('/login')); ?>"
	                                            onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                            Logout
	                                        </a>

	                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
	                                            <?php echo e(csrf_field()); ?>

	                                        </form>
	                                    </li>
	                                </ul>    
	            
	          <?php endif; ?>
		</nav>
		<?php echo $__env->yieldContent('conteudo'); ?>
		<div class="container">
			
		</div>
		<?php echo $__env->yieldContent('footer'); ?>
		<footer class="footer barra">
	      <a href="http:\\www.controlambiental.com.br" target="_BLANK">© Control Ambiental - Sustentabilidade e Meio Ambiente</a>
	 	</footer>
	 	</div>
	</div>
		<script src="/js/app.js"></script>
		<script src="/js/script.js"></script>
</body>
</html>