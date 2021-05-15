<!DOCTYPE html>
<html>
<?php
define('TITLE', 'My Place');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo TITLE ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="icon" href='assets/img/favicon.ico'>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <header class="masthead" style="background-image:url('assets/img/Portada_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="post-heading">
                        <h1>Axolotl Team - <?php echo TITLE ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p>Introducción pendiente...</p>
                    <h5> Login </h5>
                    <div class="Login">
                        <form method="POST" action="main.php">
                            <table>
                                <tr>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Username</label>
                                            <input class="form-control" type="username" id="usrUsername" placeholder="Username">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                <tr>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Password</label>
                                            <input class="form-control" type="password" id="usrPass" placeholder="Password">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <div id="success"></div>
                                    <td>
                                        <div class="form-group">
                                            <button class="btn btn-primary" id="sendMessageButton" type="submit">Sign in</button>
                                        </div>
                                    </td>
                                    <div id="cancel"></div>
                                    <td>
                                        <div class="form-group">
                                            <a href="register.php">
                                                <button class="btn btn-secondary" type="button" value="Register">Sign up</button>
                                            </a>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>