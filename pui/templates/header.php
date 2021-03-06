<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="description" content="Beyond the words"/>
    <meta name="author" content="">

    <title>Scriba</title>
    <link rel="shortcut icon" href="../res/images/logo.png">

    <!-- Bootstrap core CSS --><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"-->

    <link type="text/css" rel="stylesheet" href="../styles/font-awesome.css"/>
    <link href="../styles/bootstrap.css" rel="stylesheet">
    <link href="../styles/bootstrap-theme.css" rel="stylesheet">
    <link href="../styles/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?=$cssStyle?>"/>

    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../scripts/bootstrap.js"></script>
    <script src="../scripts/script.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->

    <!-- HTML5 shim and Respond.scripts for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".nav-bottom">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="home.php">
                <img alt="Brand" src="../res/images/logo.png">
            </a>
            <div class="navbar-brand" id="brand-title" href="#">scriba</div>
        </div>

        <ul class="nav navbar-nav menu-right navbar-right pull-right">
            <li><a href="#"><span class="glyphicon glyphicon-search menu-top"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-bell menu-top"></span></a></li>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".menu-user">
                <span class="glyphicon glyphicon-user menu-top"></span>
            </button>

            <li id="menu-user-dropdown" class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user menu-top"></span></a>
                <ul class="dropdown-menu collapse">
                    <li><a href="#signin" data-toggle="modal"><span class="fa fa-user-o"> &nbsp;Sign In</a></li>
                    <li><a href="#register" data-toggle="modal"><span class="fa fa-sign-in"> &nbsp;Register</a></li>
                    <!--li><a href="#signin" data-toggle="modal"><span class="fa fa-user-o"> &nbsp;My Profile</a></li>
                    <li><a href="../pages/add_article.php" data-toggle="modal"><span class="fa fa-pencil"> &nbsp;Create Article</a></li>
                    <li><a href="#signin" data-toggle="modal"><span class="fa fa-sign-out"> &nbsp;Log out</a></li-->

                </ul>
            </li>
        </ul>
    </div>

    <!-- Collapsable menu user for resolutions < 768px -->
    <div class="container menu-user-container">
        <div class="collapse navbar-collapse menu-user">
            <ul class="nav navbar-nav">
                <li><a href="#signin" data-toggle="modal"><span class="fa fa-user-o"> &nbsp;Sign In</a></li>
                <li><a href="#register" data-toggle="modal"><span class="fa fa-sign-in"> &nbsp;Register</a></li>
            </ul>
        </div>
    </div>

    <div id="nav-bottom-container" class="container nav-bottom-container">
        <div class="collapse navbar-collapse nav-bottom">
            <ul class="nav navbar-nav">
                <li><a href="../pages/home.php">Home</a></li>
                <li><a href="#">Top Articles</a></li>
                <li><a href="#">World</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">Culture</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Recommended</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Modal dialogs -->

<!-- Sign In -->

<div id="signin"  class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-social-icons">
                    <button class="btn btn-default facebook"><i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </button>
                    <button class="btn btn-default google"><img src="../res/images/google-logo.png">Sign In with Google</button>
                    <button class="btn btn-default sigarra"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Sign In with Sigarra U.Porto</button>
                </div>
                <div class="login-or">
                    <hr class="hr-or">
                    <span class="span-or">or</span>
                </div>
                <form>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="E-mail address">
                        <span class="fa fa-envelope-o form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="fa fa-lock form-control-feedback"></span>
                    </div>
                </form>

                <div class="remember-password">
                    <input type="checkbox" checked="checked"> Remember me
                    <a href="#" class="pull-right">Forgot password?</a>
                </div>
                <button type="button" class="btn btn-primary btn-submit-dialog" disabled>Sign In</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default">Register</button>
            </div>
        </div>
    </div>
</div>


<!-- Register -->

<div id="register"  class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-social-icons">
                    <button class="btn btn-default facebook"><i class="fa fa-facebook modal-icons"></i> Continue with Facebook </button>
                    <button class="btn btn-default google"><img src="../res/images/google-logo.png">Continue with Google</button>
                    <button class="btn btn-default sigarra"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Continue with Sigarra U.Porto</button>
                </div>
                <div class="login-or">
                    <hr class="hr-or">
                    <span class="span-or">or</span>
                </div>
                <form>
                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="First name">
                            <span class="fa fa-user-o form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Last name">
                            <span class="fa fa-user-o form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="E-mail address">
                            <span class="fa fa-envelope-o form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password">
                            <span class="fa fa-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Confirm Password">
                            <span class="fa fa-lock form-control-feedback"></span>
                        </div>
                    </div>
                </form>

                <button type="button" class="btn btn-primary btn-submit-dialog">Register</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Report Article -->

<div id="report-article"  class="modal fade" tabindex="-1" role="dialog">

    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Reason for report:</h4>
                <form>
                    <input type="checkbox" name="vehicle" value=""> Contains abusive language.<br>
                    <input type="checkbox" name="vehicle" value=""> Contains not apropriate content for Scriba<br>
                    <input type="checkbox" name="vehicle" value=""> It's spam. <br> <br>
                </form>
                <button type="button" class="btn btn-primary btn-submit-dialog" disabled>Submit</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



