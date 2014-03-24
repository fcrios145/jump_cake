<h1>Noticias</h1>
<p><?php echo $this->Html->link('Agregar Noticia', array('action' => 'add')); ?></p>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Acciones</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Author</th>
    </tr>
    </thead>


    <tbody>
    <?php foreach ($news as $noticia): ?>
        <tr>
            <!--      Id      -->
            <td><?php echo $noticia['News']['id']; ?></td>
            <!--     Titulo       -->
            <td>
                <?php
                echo $this->Html->link(
                    $noticia['News']['titulo'],
                    array('action' => 'view', $noticia['News']['id'])
                );
                ?>
            </td>
            <!--            Acciones-->
            <td>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $noticia['News']['id']),
                    array('confirm' => 'Estas seguro?')
                );
                ?>
                <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $noticia['News']['id'])
                );
                ?>
            </td>
            <!--            Creado-->
            <td>
                <?php echo $noticia['News']['created']; ?>
            </td>
            <!--            Modificado-->
            <td>
                <?php echo $noticia['News']['modified']?>
            </td>
            <!--            Autor-->
            <td>
                <?php echo $noticia['Author']['nick']?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>