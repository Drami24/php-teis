<?php
if(!comprobarSesion()) return;
$_SESSION = array();
session_destroy();
