<?php $options = array(
    'class' => 'btn btn-lg btn-primary btn-block'
); ?>

<div class="container">
    <!--    Formulario-->
    <div style="margin-top: 150px;"  class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4" style="background-color: rgba(0, 0, 0, 0.75); margin-bottom: 20px;">
                <?php echo $this->Session->flash('auth'); ?>
                <?php
                echo $this->Form->create('User', array(
                        'style' => 'color: #fff',
                        'class' => 'form-signin',
                        'inputDefaults' => array(
                            'class' => 'form-control',
                            'div' => 'form-group'
                        )),
                    array(
                        'action' => 'login'
                    )
                );
                ?>
            <h2 class="form-signin-heading">Please sign in</h2>
            <?php echo $this->Form->input('username', array(
                'placeholder' => 'Username',
                'label' => false
            ));
            echo $this->Form->input('password', array(
                'placeholder' => 'Password',
                'label' => false
            )); ?>

                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                <?php echo $this->Form->end($options); ?>
        </div>
    </div>

    <div class="jumbotron" style="background-color: rgba(0, 0, 0, 0.75); margin-bottom: 20px; color: #000">
        <div class="container">
            <h1 style="color: #ffffff">New to The Dead Ate My Friends</h1>
<!--            <p>Contents...</p>-->
            <p>
            <p><?php echo $this->Html->link(__('Registrarse', true),
                    array('controller' => 'users', 'action' => 'add'),
                    array('class' => array('btn', 'btn-large', 'btn-primary', 'btn-default')
                    )); ?></p>
            </p>
        </div>
    </div>
</div>