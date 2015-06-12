<style type="text/css">
    .font-petzoo p{

        font-size: 30px;
        color: blue;

    }
    .font-petzoo p span{

        font-size: 35px;
    }
</style>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>

	
    <fieldset class="janela_login">
        <legend class="font-petzoo"> 
        	<!--<?= $this->Html->image('logo.png',array('class'=>'logo'))?> -->
        </legend>
        <?php 
        	echo $this->Form->input('username',array('label'=>'Usuario','placeholder'=>'Usuario'));
        	echo $this->Form->input('password',array('label'=>'Senha','placeholder'=>'Senha')); 
    	?> 
    </fieldset>

<?php echo $this->Form->end(__('Entrar'));?>