<h1>Comentarios</h1>
<p><?php echo $this->Html->link('Agregar Usuario', array('action' => 'add')); ?></p>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Acciones</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Email</th>
        <th>Rol</th>
    </tr>
    </thead>


    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <!--      Id      -->
            <td><?php echo $user['User']['id']; ?></td>
            <!--     Nombre       -->
            <td>
                <?php
                echo $this->Html->link(
                    $user['User']['username'],
                    array('action' => 'view', $user['User']['id'])
                );
                ?>
            </td>
            <!--            Acciones-->
            <td>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Estas seguro?')
                );
                ?>
                <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $user['User']['id'])
                );
                ?>
            </td>
            <!--            Creado-->
            <td>
                <?php echo $user['User']['created']; ?>
            </td>
            <!--            Modificado-->
            <td>
                <?php echo $user['User']['modified']?>
            </td>
            <!--            Email-->
            <td>
                <?php echo $user['User']['email'];?>
            </td>
            <!--            Rol-->
            <td>
                <?php echo $user['User']['role'];?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>