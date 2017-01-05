<?php $__env->startSection('conteudo'); ?>
<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastro de empreendimento</div>
		    <div class="panel-body container-fluid">
				<form method="post" class="teste" role="form">
				
					<div class="form-group">
						<label class="pull-left">Denominação</label>			
						<input class="form-control" type="text" name="denominacao" size="74px" id="denominacao">
					</div>
					
						<div class="form-inline">
							<div class="form-group">
								<label class="">Tipo de intervenção</label>
								<select class="form-control" type="text" name="tipo_intervencao">
									<option></option>
									<option>Faixa de servidão</option>
									<option>Desapropriação</option>
								</select>
								</div>
							<div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="">UF</label>
								<select class="form-control" type="text" name="tipo_intervencao" >
										<option></option>
										<option>ES</option>
										<option>RJ</option>
								</select>
							</div>	
					</div>
					<div class="form group">
						<label>Descrição</label>
						<textarea class="form-control"></textarea>
					</div><br>
					<button type="submit" class=" btn btn-primary" id="savebtn">Salvar</button>
				</form>
			</div>		
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.oficial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>