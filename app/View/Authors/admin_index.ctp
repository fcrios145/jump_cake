<h1>Autores</h1>
<p><?php echo $this->Html->link('Agregar Autor', array('action' => 'add')); ?></p>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nick</th>
        <th>Acciones</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Mail</th>
    </tr>
    </thead>


    <tbody>
    <?php foreach ($authors as $autor): ?>
        <tr>
            <!--      Id      -->
            <td><?php echo $autor['Author']['id']; ?></td>
            <!--     Nick       -->
            <td>
                <?php
                echo $this->Html->link(
                    $autor['Author']['nick'],
                    array('action' => 'view', $autor['Author']['id'])
                );
                ?>
            </td>
            <!--            Acciones-->
            <td>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $autor['Author']['id']),
                    array('confirm' => 'Estas seguro?')
                );
                ?>
                <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $autor['Author']['id'])
                );
                ?>
            </td>
            <!--            Creado-->
            <td>
                <?php echo $autor['Author']['created']; ?>
            </td>
            <!--            Modificado-->
            <td>
                <?php echo $autor['Author']['modified']?>
            </td>
            <!--            Mail-->
            <td>
                <?php echo $autor['Author']['mail']?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>