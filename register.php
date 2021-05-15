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
                    <h5> New User </h5>
                    <div class="Registro">
                        <form method="POST" action="InsertDataUsrs.php">
                            <table>
                                <tr>
                                    <td> Nombre(s): </td>
                                    <td>
                                        <div class="control-group">
                                            <div class="form-group floating-label-form-group controls"><label>Name</label>
                                                <input class="form-control" type="text" id="usrName" required="" placeholder="Name">
                                                <small class="form-text text-danger help-block"></small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Apellido parterno: </td>
                                    <td>
                                        <div class="control-group">
                                            <div class="form-group floating-label-form-group controls"><label>Last name</label>
                                                <input class="form-control" type="text" id="usrLname" required="" placeholder="Last name">
                                                <small class="form-text text-danger help-block"></small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Correo electrónico: </td>
                                    <td>
                                        <div class="control-group">
                                            <div class="form-group floating-label-form-group controls"><label>Email Address</label>
                                                <input class="form-control" type="email" id="email" required="" placeholder="Correo electrónico">
                                                <small class="form-text text-danger help-block"></small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Fecha de nacimiento: </td>
                                    <td>
                                        <div class="list-inline-item">
                                            <input class="form-control list-inline-item" name="txtDay" type="date">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Sexo: </td>
                                    <td>
                                        <div class="list-inline-item">
                                            <input type="radio" id="M" name="rbtnGender" value="M" require><label for="M">Male</label>
                                            <input type="radio" id="F" name="rbtnGender" value="F" require><label for="F">Female</label>
                                            <input type="radio" id="O" name="rbtnGender" value="O" require><label for="O">Other</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table>
                                <tr>
                                    <td> Nombre del usuario: </td>
                                    <td>
                                        <div class="control-group">
                                            <div class="form-group floating-label-form-group controls"><label>Username</label>
                                                <input class="form-control" type="username" id="usrUsername" required="" placeholder="Username">
                                                <small class="form-text text-danger help-block"></small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Contraseña: </td>
                                    <td>
                                        <div class="control-group">
                                            <div class="form-group floating-label-form-group controls"><label>Password</label>
                                                <input class="form-control" type="password" id="usrPass" required="" placeholder="Password">
                                                <small class="form-text text-danger help-block"></small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Repetir contraseña: </td>
                                    <td>
                                        <div class="control-group">
                                            <div class="form-group floating-label-form-group controls"><label>Repeat password</label>
                                                <input class="form-control" type="password" id="usrPass" required="" placeholder="Password">
                                                <small class="form-text text-danger help-block"></small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <label><input type="checkbox" value="chkboxTerms"> Acepto los términos y condiciones.</label>
                            <br><br>
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <div id="success"></div>
                                    <td>
                                        <div class="form-group"><button class="btn btn-primary" id="sendMessageButton" type="submit">Accept</button></div>
                                    </td>
                                    <a href="index.php">
                                        <div id="cancel"></div>
                                        <td>
                                            <a href="myPlace.php">
                                                <div class="form-group"><button class="btn btn-secondary" id="sendMessageButton" type="button">Cancel</button>
                                            </a>
                                        </td>
                                    </a>
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