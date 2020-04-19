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
    $sql = "SELECT * FROM restaurantes WHERE email = ?";
    $resultado = $conexion->prepare($sql);
    $resultado->bindParam(1, $email);
    $resultado->execute();
    if ($resultado->rowCount() === 1) {
        if (!password_verify($password, obtenerHash($email)->password)) {
            return false;
        }
        return $resultado->fetch(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

function obtenerHash($email) {
    $conexion = obtenerConexion();
    $sql = "SELECT password FROM restaurantes WHERE email = ?";
    $hash = $conexion->prepare($sql);
    $hash->bindParam(1, $email);
    $hash->execute();
    if ($hash->rowCount() === 0) {
        return false;
    } else {
        return $hash->fetch(PDO::FETCH_OBJ);
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

function obtenerProductosConStock($categoria) {
    $conexion = obtenerConexion();
    $sql = "SELECT * FROM productos WHERE categoria = ? AND stock!=0";
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
        $sql = "INSERT INTO pedidos_productos (pedido, producto, unidades) values (?, ?, ?)";
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

function añadirRestauranteBD($nombre, $email, $contraseña, $pais, $ciudad, $direccion, $cp) {
    $conexion = obtenerConexion();
    $sql = "INSERT INTO restaurantes (nombre, email, password, pais, ciudad, direccion, codigo_postal) values (?,?,?,?,?,?,?)";
    $resultado = $conexion->prepare($sql);
    $resultado->bindParam(1, $nombre);
    $resultado->bindParam(2, $email);
    $resultado->bindParam(3, $contraseña);
    $resultado->bindParam(4, $pais);
    $resultado->bindParam(5, $ciudad);
    $resultado->bindParam(6, $direccion);
    $resultado->bindParam(7, $cp);
    $resultado->execute();
}
