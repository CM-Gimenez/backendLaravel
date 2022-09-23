<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
$servidor = "us-cdbr-east-06.cleardb.net"; $usuario = "b53c42bbfcf4e8"; $contrasenia = "58492953"; $nombreBaseDatos = "heroku_ce5b8307f9c1534";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);