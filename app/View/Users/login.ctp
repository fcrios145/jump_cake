<!---->
<!--<div class="users form">-->
<!--    --><?php //echo $this->Session->flash('auth'); ?>
<!--    --><?php
//    echo $this->Form->create('User', array(
//            'class' => '"form-signin"',
//            'inputDefaults' => array(
//                'class' => 'form-control',
//                'div' => 'form-grouṕ'
//            )),
//        array(
//            'action' => 'login'
//        )
//    );
//    ?>
<!--    <fieldset>-->
<!--        <legend>-->
<!--            --><?php //echo __('Please enter your username and password'); ?>
<!--        </legend>-->
<!--        --><?php //echo $this->Form->input('username');
//        echo $this->Form->input('password');
//        ?>
<!--    </fieldset>-->
<!--    --><?php //echo $this->Form->end(__('Login')); ?>
<!--</div>-->

<?php $options = array(
    'class' => 'btn btn-lg btn-primary btn-block'
); ?>

<div class="container">
    <!--    Formulario-->
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4" style="background-color: rgba(0, 0, 0, 0.51); margin-bottom: 20px;">
<!--            <form accept-charset="utf-8" method="post" class="form-signin" role="form" action="/users/login">-->
                <?php echo $this->Session->flash('auth'); ?>
                <?php
                echo $this->Form->create('User', array(
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
            <?php echo $this->Form->input('username');
            echo $this->Form->input('password'); ?>
<!--                <input name="data[User][username]" type="email" class="form-control" placeholder="Email address" required autofocus>-->
<!--                <input name="data[User][password]" type="password" class="form-control" placeholder="Password" required>-->
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                <?php echo $this->Form->end($options); ?>
<!--                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>-->
<!--            </form>-->
        </div>
    </div>

    <div class="jumbotron" style="background-color: rgba(0, 0, 0, 0.51); margin-bottom: 20px; color: #000">
        <div class="container">
            <h1 style="color: #ffffff">New to The Dead Ate My Friends</h1>
<!--            <p>Contents...</p>-->
            <p>
            <p><?php echo $this->Html->link(__('Registrarse', true),
                    array('controller' => 'users', 'action' => 'add'),
                    array('class' => array('btn', 'btn-large', 'btn-primary', 'btn-default')
                    )); ?></p>
<!--                <a class="btn btn-primary btn-lg">Sign in</a>-->
            </p>
        </div>
    </div>
</div>





<!--<div class="container">-->
<!--    <!--    Formulario-->
<!--    <div class="row">-->
<!--        <div class="col-md-4"></div>-->
<!--        <div class="col-md-4" style="background-color: rgba(0, 0, 0, 0.51); margin-bottom: 20px;">-->
<!--            <form accept-charset="utf-8" method="post" class="form-signin" role="form" action="/users/login">-->
<!--                <h2 class="form-signin-heading">Please sign in</h2>-->
<!--                <input name="data[User][username]" type="email" class="form-control" placeholder="Email address" required autofocus>-->
<!--                <input name="data[User][password]" type="password" class="form-control" placeholder="Password" required>-->
<!--                <label class="checkbox">-->
<!--                    <input type="checkbox" value="remember-me"> Remember me-->
<!--                </label>-->
<!--                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="jumbotron" style="background-color: rgba(0, 0, 0, 0.51); margin-bottom: 20px; color: #000">-->
<!--        <div class="container">-->
<!--            <h1>New to The Dead Ate My Friends</h1>-->
<!--            <p>Contents...</p>-->
<!--            <p>-->
<!--                <a class="btn btn-primary btn-lg">Sign in</a>-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
