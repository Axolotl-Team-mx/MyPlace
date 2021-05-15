<?php
include 'conexion.php';
require_once 'model.php';

$usrNomUsr = $_POST['txtusrNomUsr'];
$usrRol = 0;
$usrNombre = $_POST['txtusrNombre'];
$usrApellidos = $_POST['txtusrApellidos'];
$usrFechaNacimiento = $_POST['DateusrFechaNacimiento'];
$usrSexo = $_POST['rbtnGender'];
$usrCorreo = $_POST['txtusrCorreo'];
$usrContrasena = $_POST['txtusrContrasena'];


?>