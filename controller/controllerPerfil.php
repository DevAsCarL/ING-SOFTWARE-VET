<?php
class controllerPerfil{

	public function mostrarDatosPerfil(){
		$dni = $_SESSION["user"];

		include_once("../model/eUsuario.php");
		$mostrar = new Usuario;
		$retornado = $mostrar -> mostrarDatosPerfil($dni);

		include_once("../view/modulos/moduloUsuario/formUsuarioPerfil.php");
		
		$enviar = new formUsuarioPerfil;
		$enviar -> formUsuarioPerfilShow($retornado);

	}
}
?>