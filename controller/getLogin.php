<?php
    session_start();
    function validarcampolog($login){
        if(strlen($login)<8){
            return(0);
        }else{
            return(1);
        }
    }

    if(isset($_POST['btnBuscar'])){
        $log = trim($_POST['usuario']);
        $_SESSION["user"]=$log;
        $resultado = validarcampolog($log);
        

        if($resultado == 0){
            include_once("../shared/formMensajeSistema.php");
            $mensajeo = new formMensajeSistema;
            $mensajeo ->formMensajeSistema();
            $mensajeo ->formMensajeSistemaShow("El dato no es válido","<a href='../view/principal.php?action=formVerificarUsuario'>Atrás</a>");
        }else{
           
            include_once("controllerRecordarClave.php");
            $valida = new controllerRecordarClave;
            $valida -> ValidarLog();
        }
    }else{
        include_once("../shared/formMensajeSistema.php");
        $mensaje = new formMensajeSistema;
        $mensaje ->formMensajeSistema();
        $mensaje ->formMensajeSistemaShow("Acceso no permitido","<a href='../index.php'>Ir al inicio</a>");
    }
?>