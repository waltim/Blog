<div id="sidebar" class="col-sm-3">
    <div class="actions">
        <ul class="list-group">
            <li class="list-group-item"><?php echo $this->Html->link(__('Editar notícia'), array('action' => 'edit', $novidade['Post']['_id']), array('class' => '')); ?> </li>
            <li class="list-group-item"><?php echo $this->Form->postLink(__('Apagar notícia'), array('action' => 'delete', $novidade['Post']['_id']), array('class' => ''), __('Tem certeza que deseja apagar este item? %s', $novidade['Post']['_id'])); ?> </li>
            <li class="list-group-item"><?php echo $this->Html->link(__('Nova notícia'), array('action' => 'add'), array('class' => '')); ?> </li>
            <li class="list-group-item"><?php echo $this->Html->link(__('Lista de notícias'), array('action' => 'index')); ?></li>
        </ul>
    </div>
</div>
<div class="novidades view">

    <h2><?php  echo __('Notícia'); ?></h2>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <tbody>

            <tr>
                <td><strong><?php echo __('Titulo'); ?></strong></td>
                <td>
                    <?php echo $novidade['Post']['title']; ?>
                    &nbsp;
                </td>
            </tr>

            <tr>
                <td><strong><?php echo __('Texto'); ?></strong></td>
                <td>
                    <?php echo $novidade['Post']['body']; ?>
                    &nbsp;
                </td>
            </tr>

            <tr>
                <td><strong><?php echo __('Autor'); ?></strong></td>
                <td>
                    <?php echo $novidade['Post']['hoge']; ?>
                    &nbsp;
                </td>
            </tr>

            <tr>
                <td><strong><?php echo __('Criado Dia'); ?></strong></td>
                <td>
                    <?php echo h(date("d/m/Y",strtotime($novidade['Post']['created']))); ?>
                    &nbsp;
                </td>
            </tr>

            <tr>
                <td><strong><?php echo __('Ultima Modificação'); ?></strong></td>
                <td>
                    <?php echo h(date("d/m/Y",strtotime($novidade['Post']['modified']))); ?>
                    &nbsp;
                </td>
            </tr>
        </table>
    </div>
</div>


