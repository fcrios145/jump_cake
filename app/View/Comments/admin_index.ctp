<h1>Comentarios</h1>
<p><?php echo $this->Html->link('Agregar Comentario', array('action' => 'add')); ?></p>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Acciones</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Noticia</th>
    </tr>
    </thead>


    <tbody>
    <?php foreach ($comments as $comment): ?>
        <tr>
            <!--      Id      -->
            <td><?php echo $comment['Comment']['id']; ?></td>
            <!--     Nombre       -->
            <td>
                <?php
                echo $this->Html->link(
                    $comment['User']['username'],
                    array('action' => 'view', $comment['Comment']['id'])
                );
                ?>
            </td>
            <!--            Acciones-->
            <td>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $comment['Comment']['id']),
                    array('confirm' => 'Estas seguro?')
                );
                ?>
                <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $comment['Comment']['id'])
                );
                ?>
            </td>
            <!--            Creado-->
            <td>
                <?php echo $comment['Comment']['created']; ?>
            </td>
            <!--            Modificado-->
            <td>
                <?php echo $comment['Comment']['modified']?>
            </td>
            <!--            Noticia-->
            <td>
                <?php echo $comment['News']['titulo'];?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>