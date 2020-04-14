<?php
    require_once 'bd.php';
    $pass = 'galipizza';
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    //$hash = '$2y$10$6WWpF3z22j3ULUHFGSRy2eN/WfgtF2ItQ8C1C/b31zXaOQfxNUDSe';
    echo $hash . '<br>';
    $pass2 = 'galipizza';
    if (password_verify($pass2, $hash)) {
        echo 'has acertado';
    } else {
        echo 'no es valida';
    }
 
   

    