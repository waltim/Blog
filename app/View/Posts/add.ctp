<div id="sidebar" class="col-sm-3">

    <div class="actions">

        <ul class="list-group">
            <li class="list-group-item"><?php echo $this->Html->link(__('Lista de notícias'), array('action' => 'index')); ?></li>
        </ul>

    </div>

</div>
<div class="posts form">

    <?php echo $this->Form->create('Post', array('type' => 'file', 'inputDefaults' => array('label' => false), 'role' => 'form')); ?>
    <fieldset>
        <h2><?php echo __('Cadastrar notícia'); ?></h2>

        <div class="form-group">
            <?php echo $this->Form->label('title', 'Titulo da notícia'); ?>
            <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->label('body', 'Texto'); ?>
            <?php echo $this->Form->input('body', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->label('hoge', 'Autor'); ?>
            <?php echo $this->Form->input('hoge', array('class' => 'form-control')); ?>
        </div>

    </fieldset>
    <?php echo $this->Form->submit('Enviar', array('class' => 'btn btn-large btn-primary')); ?>
    <?php echo $this->Form->end(); ?>

</div>

