<h1>Comentarios</h1>
<p><?php echo $this->Html->link('Agregar Usuario', array('action' => 'add')); ?></p>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Acciones</th>
        <th>Creado</th>
        <th>Email</th>
    </tr>
    </thead>


    <tbody>
    <?php foreach ($contacts as $contacto): ?>
        <tr>
            <!--      Id      -->
            <td><?php echo $contacto['Contact']['id']; ?></td>
            <!--     Nombre       -->
            <td>
                <?php
                echo $this->Html->link(
                    $contacto['Contact']['name'],
                    array('action' => 'view', $contacto['Contact']['id'])
                );
                ?>
            </td>
            <!--            Acciones-->
            <td>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $contacto['Contact']['id']),
                    array('confirm' => 'Estas seguro?')
                );
                ?>
            </td>
            <!--            Creado-->
            <td>
                <?php echo $contacto['Contact']['created']; ?>
            </td>

            <!--            Email-->
            <td>
                <?php echo $contacto['Contact']['email'];?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>