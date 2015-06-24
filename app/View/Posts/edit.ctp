<div id="sidebar" class="col-sm-3">

    <div class="actions">

        <ul class="list-group">
            <li class="list-group-item"><?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $this->Form->value('Post._id')), null, __('Tem certeza que deseja apagar este item? %s', $this->Form->value('Post._id'))); ?></li>
            <li class="list-group-item"><?php echo $this->Html->link(__('Lista de notícias'), array('action' => 'index')); ?></li>
        </ul>

    </div>

</div>


<div class="tipos form">
    <?php echo $this->Form->create('Post', array('type' => 'file', 'inputDefaults' => array('label' => false), 'role' => 'form')); ?>
    <fieldset>
        <h2><?php echo __('Atualizar notícia'); ?></h2>

        <div class="form-group">
            <?php echo $this->Form->input('_id', array('class' => 'form-control')); ?>
        </div>

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