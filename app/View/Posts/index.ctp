<div id="sidebar" class="col-sm-3">

    <div class="actions">

        <ul class="list-group">
            <?php echo $this->Html->link(__('Nova notícia'), array('action' => 'add'), array('class' => '')); ?></li>
        </ul>
    </div>
</div>

<div class="Posts index">

    <h2><?php echo __('Notícias'); ?></h2>

    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('Primary key'); ?></th>
                <th><?php echo $this->Paginator->sort('Titulo da notícia'); ?></th>
                <th><?php echo $this->Paginator->sort('Autor'); ?></th>
                <th class="actions"><?php echo __('Ações'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($posts as $post): ?>
                <tr>

                    <td><?php echo h($post['Post']['_id']); ?>&nbsp;</td>
                    <td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
                    <td><?php echo h($post['Post']['hoge']); ?>&nbsp;</td>

                    <td class="actions">
                        <?php  echo $this->Html->link(__('Detalhar'), array('action' => 'view', $post['Post']['_id']), array('class' => 'btn btn-default btn-xs'));  ?>
                        <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $post['Post']['_id']), array('class' => 'btn btn-default btn-xs')); ?>
                        <?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $post['Post']['_id']), array('class' => 'btn btn-default btn-xs'), __('Tem certeza que deseja apagar este item? %s?', $post['Post']['_id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <p><small>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Pagina {:page} de {:pages}')
            ));
            ?>			</small></p>

    <ul class="pagination">
        <?php
        echo $this->Paginator->prev('< ' . __('< Anterior'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
        echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
        echo $this->Paginator->next(__('Próximo >') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
        ?>
    </ul>

</div>