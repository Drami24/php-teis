<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'damianld');
define('DB_PASSWORD', 'renaido');
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
    $sql = "SELECT * FROM categorias";
    return $conexion->query($sql)->fetchAll(PDO::FETCH_OBJ);
}

function obtenerCategoria($codigo) {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM categorias WHERE codigo = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$codigo]); 
    return $sentencia->fetch();
}

function obtenerProductosCategoria($categoria) {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM productos WHERE categoria = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$categoria]);
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function obtenerProductos($codigosProductos) {
    $conexion = obtenerConexion();
    $codigos = implode(',', $codigosProductos);
    $sql = "SELECT * FROM productos WHERE codigo IN (1)";
    $productos =  $conexion->query($sql)->fetchAll(PDO::FETCH_OBJ);
    return $productos;
}