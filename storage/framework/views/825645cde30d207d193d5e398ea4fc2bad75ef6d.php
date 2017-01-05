<?php $__env->startSection('conteudo'); ?>

	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Cadastro de empreendimento</div>
		    <div class="panel-body container-fluid">
				<form method="post" class="" role="form">
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
						    		<input type="text" name="cep" id="cep" class="form-control" onchange="" maxlength="10" placeholder="Ex.: 00000-000" value="<?php echo e(old('cep')); ?>">
						    </div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="logradouro">Logradouro</label>
						    		<input type="text" name="logradouro" id="logradouro" class="form-control" value="<?php echo e(old('logradouro')); ?>">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="numero">Numero</label>
						    		<input type="number" name="numero" id="numero" class="form-control" value="<?php echo e(old('numero')); ?>">
						    	</div>
					    	</div>    	
					    	<div class="row">
						    	<div class="form-group col-xs-4">
						    		<label for="quadra">Quadra</label>
						    		<input type="text" name="quadra" id="quadra" class="form-control" maxlength="10" value="<?php echo e(old('quadra')); ?>">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="bairro">Bairro</label>
						    		<input type="text" name="bairro" id="bairro" class="form-control" value="<?php echo e(old('bairro')); ?>">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="distrito">Distrito</label>
						    		<input type="text" name="distrito" id="distrito" class="form-control" value="<?php echo e(old('distrito')); ?>">
						    	</div>
						    </div>			    	
						    	<div class="row">
						    	<div class="form-group col-xs-4">
						    		<label for="municipio">Município</label>
						    		<input type="text" name="municipio" id="municipio" class="form-control" maxlength="10" value="<?php echo e(old('municipio')); ?>">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="estado">Estado</label>
						    		<input type="text" name="estado" id="estado" class="form-control" value="<?php echo e(old('estado')); ?>">
						    	</div>
						    		
						    	<div class="form-group col-xs-4">
						    		<label for="pais">País</label>
						    		<input type="text" name="pais" id="pais" class="form-control" value="<?php echo e(old('pais')); ?>">
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.oficial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>