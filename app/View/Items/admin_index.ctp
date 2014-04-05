<h1>Items</h1>
<p><?php echo $this->Html->link('Agregar Item', array('action' => 'add')); ?></p>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>img</th>
        <th>type</th>
    </tr>
    </thead>


    <tbody>
    <?php foreach ($items as $item): ?>
        <tr>
            <!--      Id      -->
            <td><?php echo $item['Items']['id']; ?></td>
            <!--     Titulo       -->
            <td>
                <?php
                echo $this->Html->link(
                    $item['Items']['name'],
                    array('action' => 'view', $item['Items']['id'])
                );
                ?>
            </td>
            <!--            Acciones-->
            <td>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $item['Items']['id']),
                    array('confirm' => 'Estas seguro?')
                );
                ?>
                <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $item['Items']['id'])
                );
                ?>
            </td>
            <!--            Creado-->
            <td>
                <?php echo $item['Items']['description']; ?>
            </td>
            <!--            Modificado-->
            <td>
                <?php echo $item['Items']['img']?>
            </td>
            <!--            Autor-->
            <td>
                <?php echo $item['Items']['type_id']?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>