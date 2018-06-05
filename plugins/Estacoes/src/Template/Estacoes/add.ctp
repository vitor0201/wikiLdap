<div class="panel panel-default estacoes">
	<div class="panel-heading">
			<div class="dropdown pull-right">
				<button class="btn dropdown-toggle btn-sm"  type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
				</button>					
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li> <?php echo $this->Html->link('<span class="glyphicon glyphicon-list pull-right" aria-hidden="true"></span>&nbsp; ' . __('Listagem'), ['action' => 'index'], ['escape' => false]) ?></li>
					
									</ul>
			</div>
	
	
            <h3>
            Estações
            <small>
                        Cadastrar
                        </small>
            </h3>
    </div>
    
   <?php echo $this->Form->create($estacao, [
				'horizontal' => true, 'id' => 'FormEstacoes',
				'cols' => [
					'label' => 2,
					'input' => 4,
					'error' => 6
				]
			]);
		//	debug($estacao);
			?>
    
   
   <div class="panel-body" style="position:relative;">  
        
		<?php 
		//echo $this->Form->text('IP', ['label'=>'Descrição']);
		echo $this->Form->input('IP', ['type' =>'text','label'=> ['text' => 'IP'],  'class'=>'ip_address']);
		echo $this->Form->input('liberaSistema', ['label' => ' liberaSistema']);
		echo $this->Form->input('biometria', ['label' => ' biometria']);
		echo $this->Form->input('liberaAcessoAdministrativo', ['label' => ' liberaAcessoAdministrativo']);
		?>
  </div>
   <div class="panel-footer"> 
               <?= $this->Form->button(__('Salvar'), ['id' => 'FormSaveSubmit', 'class' => 'btn btn-primary']) ?>
                
   </div>
    <?= $this->Form->end() ?>
</div>

<script>
$(document).ready(function(){
	$('#FormEstacoes').validate({   });
});
</script>
