<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
        <?php echo $title; ?>
    </title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Righteous|Rancho" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/bootstrap/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>assets/bootstrap/js/html5shiv.min.js"></script>
      <script src="<?php echo base_url();?>assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigasi -->

    <div id="navigasi">

        <div id="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h5 class="pull-left sembunyi"><strong><i class="fa fa-phone"></i> (+62)852-7777-7777 |  </strong></h5>
                        <p class="pull-left link"><a><i class="fa fa-facebook"></i></a></p>
                        <p class="pull-left link"><a><i class="fa fa-twitter"></i></a>
                        </p>
                        <a id="login-popup" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal"><strong>LOGIN</strong></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <form>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Login Now</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12 col-xs-12">
                                    <p class="pull-right">Or <a href="register">Register Now!</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Login</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-remove"></i> Reset</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>


        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                    <a class="navbar-brand" href="home">INDONESIA MOTIVATOR</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <form class="navbar-form navbar-right">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
        <button class="btn btn-info" type="button">Go!</button>
      </span>
                        </div>
                    </form>


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home">Home</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="category">Category</a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- #navigasi -->

    <!-- Content here -->
    <?php echo $contents; ?>
    <!-- /content -->

    <!-- the footer -->

    <div id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <h4>About Us</h4>
                    <p>Lorem ipsum dolor sit amet, atqui iriure discere vis ea, te cum falli omittantur, sed cu quidam malorum. Debet aeterno pertinax sed te, qui propriae corrumpit an. Usu no vidit deterruisset delicatissimi, ferri explicari conclusionemque ea ius..</p>
                </div>
                
                <div class="col-md-3 col-xs-12">
                    <h4>Connect with us</h4>
                    <div class="form-group">
                        <a class="btn btn-primary" href="http://www.facebook.com/"><i class="fa fa-facebook"></i> Facebook</a>

                        <a class="btn btn-info" href="http://www.twitter.com/"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    
                    <div class="form-group">
                        <a class="btn btn-danger" href="http://www.youtube.com/"><i class="fa fa-youtube"></i> Youtube</a>
                        
                        <a class="btn btn-warning" href="http://www.instagram.com/"><i class="fa fa-instagram"></i> Instagram</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-xs-12">
                    <h4>Tags</h4>
                    <label class="label label-danger">Economy</label>
                    <label class="label label-primary">Culture</label>
                    <label class="label label-default">Motivation</label>
                    <label class="label label-warning">Success</label>
                    <label class="label label-info">Happiness</label>
                    <label class="label label-success">Logic</label>
                    <label class="label label-danger">Economy</label>
                    <label class="label label-primary">Culture</label>
                    <label class="label label-default">Motivation</label>
                    <label class="label label-warning">Success</label>
                    <label class="label label-info">Happiness</label>
                    <label class="label label-success">Logic</label>
                    <label class="label label-danger">Economy</label>
                    <label class="label label-primary">Culture</label>
                    <label class="label label-default">Motivation</label>
                    <label class="label label-warning">Success</label>
                    <label class="label label-info">Happiness</label>
                    <label class="label label-success">Logic</label>

                </div>
                
            </div>
        </div>
        
        <div class="clearfix"></div>
    </div>
    
    <div class="copyright">
        <small>Copyright &copy; 2017 Indonesia Motivator, All Right Reserved | </small>
        <small>Designed by <a>KHz Technology</a></small>
        <div class="clearfix"></div>
    </div>

    <div id="scroll" onclick="scrolltotop()">
        <i id="tombolScrollTop"class="fa fa-angle-up"></i>
    </div>

    <!-- end of footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>


    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrolltotop() > 100) {
                    $('#tombolScrollTop').fadeIn();
                } else {
                    $('#tombolScrollTop').fadeOut();
                }
            });
        });

        function scrolltotop() {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        }
    </script>


</body>



</html>