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

function comprobarUsuario($email, $password) {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM restaurantes WHERE email = ? AND PASSWORD = ?";
    $resultado = $conexion->prepare($sql);
    $resultado->bindParam(1, $email);
    $resultado->bindParam(2, $password);
    $resultado->execute();
    if ($resultado->rowCount() === 1) {
        return $resultado->fetch(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

function obtenerCategorias() {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM categorias";
    $categorias = $conexion->query($sql);
    if($categorias->rowCount() === 0) {
        return FALSE;
    } else {
        return $categorias->fetchAll(PDO::FETCH_OBJ);
    }
}

function obtenerCategoria($codigo) {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM categorias WHERE codigo = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$codigo]); 
    return $sentencia->fetch(PDO::FETCH_OBJ);
}

function obtenerProductosCategoria($categoria) {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM productos WHERE categoria = ?";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$categoria]);
    if($sentencia->rowCount() === 0) {
        return FALSE;
    }
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
}

function obtenerProductos($codigosProductos) {
    if (empty($codigosProductos)){
        return FALSE;
    }
    $conexion = obtenerConexion();
    $codigos = implode(',', $codigosProductos);
    $sql = "SELECT * FROM productos WHERE codigo IN ($codigos)";
    $productos =  $conexion->query($sql);
    return $productos;
}

function obtenerProductos2($codigosProductos) {
    $conexion = obtenerConexion();
    $codigos = implode(',', $codigosProductos);
    $sql = "SELECT * FROM productos WHERE codigo IN (?)";
    $resultado = $conexion->prepare($sql);
    $resultado->bindParam(1, $codigos);
    $resultado->execute();
    return $resultado->fetchAll();
}

function obtenerProductos3($codigosProductos) {
    $conexion = obtenerConexion();
    $codigos = implode(',', $codigosProductos);
    $sql = "SELECT * FROM productos WHERE codigo IN (2,3,5)";
    $resultado = $conexion->prepare($sql);
    $resultado->bindParam(1, $codigos);
    $resultado->execute();
    return $resultado->fetchAll();
}

function insertarPedido($carrito, $codigoRestaurante) {
    $conexion = obtenerConexion();
    $conexion->beginTransaction();
    $hora = date("Y-m-d H:i:s", time());
    $enviado = 0;
    $sql = "INSERT INTO pedidos (fecha, enviado, restaurante) values (?, ?, ?)";
    $resultado = $conexion->prepare($sql);
    $resultado->bindParam(1, $hora);
    $resultado->bindParam(2, $enviado);
    $resultado->bindParam(3, $codigoRestaurante);
    $resultado->execute();
    $pedido = $conexion->lastInsertId();
    foreach($carrito as $codigo=>$unidades) {
        $sql = "INSERT INTO pedidos_productos (pedido, producto, unidades) values(?, ?, ?)";
        $resultado = $conexion->prepare($sql);
        $resultado->bindParam(1, $pedido);
        $resultado->bindParam(2, $codigo);
        $resultado->bindParam(3, $unidades);
        $resultado->execute();
        $sql = "UPDATE productos SET stock = stock - $unidades WHERE codigo = ?";
        $resultado = $conexion->prepare($sql);
        $resultado->bindParam(1, $codigo);
        $resultado->execute();
    }
    $conexion->commit();
    return $pedido;
}
