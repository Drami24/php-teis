<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pedidos');
define('DB_CHARSET', 'utf8');

function obtenerConexion() {
    try {
        $conexion = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME . "", DB_USER, DB_PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET " . DB_CHARSET);
        return $conexion;
    } catch (Exception $e) {
        echo $e->GetMessage();
    }
}

function checkLogin($email, $password) {
    $conexion = obtenerConexion();
    $sql = "select * from restaurantes where email = ? and password = ?";
    $resultado = $conexion->prepare($sql);
    $resultado->bindParam(1, $email);
    $resultado->bindParam(2, $password);
    $resultado->execute();
    if ($resultado->rowCount() != 0) {
        return true;
    } else {
        return false;
    }
}

function obtenerCategorias() {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM CATEGORIAS";
    return $conexion->query($sql)->fetchAll(PDO::FETCH_OBJ);
}

function obtenerCategoria($codigo) {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM CATEGORIAS WHERE CODIGO = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$codigo]); 
    return $sentencia->fetch();
}

function obtenerProductosCategoria($categoria) {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM PRODUCTOS WHERE CATEGORIA = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$categoria]);
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}