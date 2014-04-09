<!-- app/View/Contacts/add.ctp -->
<?php $options = array(
    'class' => 'btn btn-lg btn-primary btn-block'
); ?>


<div class="col-md-3"></div>
<div class="col-md-6" style="color: #ffffff; background-color: rgba(0, 0, 0, 0.51); margin-bottom: 20px; margin-top: 150px">
    <!--            <form accept-charset="utf-8" method="post" class="form-signin" role="form" action="/users/login">-->
    <?php echo $this->Session->flash('auth'); ?>
    <?php
    echo $this->Form->create('Contact', array(
            'class' => 'form-signin',
            'inputDefaults' => array(
                'class' => 'form-control',
                'div' => 'form-group'
            )),
        array(
            'action' => 'add'
        )
    );
    ?>
    <h2 class="form-signin-heading">Contacto</h2>
    <?php
    echo $this->Form->input('name');
    echo $this->Form->input('email');
    echo $this->Form->input('comment', array('rows' => '8'));
    //    echo $this->Form->input('role', array(
    //        'options' => array( 'king' => 'King', 'queen' => 'Queen', 'rook' => 'Rook', 'bishop' => 'Bishop', 'knight' => 'Knight', 'pawn' => 'Pawn')
    //    ));
    ?>

    <!--                <input name="data[User][username]" type="email" class="form-control" placeholder="Email address" required autofocus>-->
    <!--                <input name="data[User][password]" type="password" class="form-control" placeholder="Password" required>-->
    <?php echo $this->Form->end($options); ?>
    <!--                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>-->
    <!--            </form>-->
</div>

