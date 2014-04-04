<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('custom-nav-bar');
    echo $this->Html->script('jquery');


    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <title>Title</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
</head>
<body>

    <div class="navbar-wrapper">
        <div class="container">

            <?php echo $this->Html->image('deadLogo.png', array('alt' => 'thedead', 'id' => 'logo'));     ?>

            <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><?php echo $this->Html->link(
                                    'Inicio',
                                    array(
                                        'controller' => 'news',
                                        'action' => 'index',
                                        'full_base' => true
                                    )
                                ); ?></li>
                            <li><?php echo $this->Html->link(
                                    'Noticias',
                                    array(
                                        'controller' => 'news',
                                        'action' => 'all',
                                        'full_base' => true
                                    )
                                ); ?></li>
                            <li><?php echo $this->Html->link(
                                    'Wiki',
                                    array(
                                        'controller' => 'items',
                                        'action' => 'all',
                                        'full_base' => true
                                    )
                                ); ?></li>
                            <li>
                                <?php echo $this->Html->link(
                                    'Acerca De',
                                    array(
                                        'controller' => 'pages',
                                        'action' => 'about',
                                        'full_base' => true
                                    )
                                ); ?>
                            </li>
                            <li>
                                <?php
                                if ($this->Session->read('Auth.User')){
                                    echo $this->Html->link(
                                        'Salir',
                                        array(
                                            'controller' => 'users',
                                            'action' => 'logout',
                                            'full_base' => true
                                        ));
                                } else {
                                    echo $this->Html->link(
                                        'Acceder',
                                        array(
                                            'controller' => 'users',
                                            'action' => 'login',
                                            'full_base' => true
                                        )
                                    );
                                }
                                 ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php echo $this->fetch('content'); ?>
            <?php echo $this->Session->flash(); ?>
        </div>
        <footer>
            <div class="row">
                <div class="col-md-4">
                    <a id="doubleJump"  href="#"></a>
                </div>
                <div class="col-md-4" style="margin-top: 10px">
                    <small>2014 Double Jump Studios. Todos los derechos reservados. Double Jump Studios, The Dead son marcas comerciales, marcas de servicios o marcas registradas de Double Jump Studios.</small>
                </div>
                <div class="col-md-4"">
                    <div class="demo">
                        <ul>
                            <li><a href="https://www.facebook.com/pages/Double-Jump-Studios/635128493223387?ref=hl" title=""><span class="icon"><i aria-hidden="true" class="icon-facebook">
                                        </i></span><span>Like</span> </a></li>
                            <li><a href="#" title=""><span class="icon"><i aria-hidden="true" class="icon-youtube">
                                        </i></span><span>Subscribe</span></a> </li>
                            <li><a href="#" title=""><span class="icon"><i aria-hidden="true" class="icon-twitter">
                                        </i></span><span>Follow</span></a> </li>
                        </ul>
                    </div>
<!--                    <a id="twitter" href="#"></a>-->
<!--                    <a id="facebook" href="#"></a>-->
                </div>
            </div>
        </footer>
    </div>



<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myCarousel').carousel({interval: 3000});
        });
    </script>
</body>
</html>
