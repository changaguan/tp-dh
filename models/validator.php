<?php

require_once("db.php");

class Validator {
	function validarLogin($informacion, DB $db) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}

/**
		if ($informacion["email"] == "") {
			$errores["email"] = "Email no puede estar vacío.";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "Email inválido.";
		} else if ($db->traerPorMail($informacion["email"]) == NULL) {
			$errores["mail"] = "Email inválido.";
		}

		$usuario = $db->traerPorMail($informacion["email"]);
**/

if ($informacion["username"] == "") {
	$errores["username"] = "Usuario no puede estar vacío.";
}
else if (filter_var($informacion["username"], FILTER_VALIDATE_EMAIL) == false) {
	$errores["username"] = "Usuario inválido.";
} else if ($db->traerPorUsuario($informacion["username"]) == NULL) {
	$errores["username"] = "Usuario inválido.";
}
$usuario = $db->traerPorUsuario($informacion["username"]);
		if ($informacion["password"] == "") {
			$errores["password"] = "Contraseña no puede estar vacío.";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario->getPassword()) == false) {
				$errores["password"] = "Contraseña inválido.";
			}
		}
		return $errores;
	}

	function validarInformacion($informacion, DB $db) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if (strlen($informacion["username"]) < 4 || strlen($informacion["username"]) > 8) {
			$errores["username"] = "Usuario debe ser entre 4 y 8 caracteres.";
		}	else if ($db->traerPorUsuario($informacion["username"]) != NULL) {
			$errores["username"] = "Usuario existente.";

		if (strlen($informacion["name"]) < 4 || strlen($informacion["name"]) > 15) {
			$errores["name"] = "Nombre debe tener entre 4 y 15 caracteres.";
		}

		if ($informacion["email"] == "") {
			$errores["email"] = "Email inválido.";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "Email inválido.";
		} else if ($db->traerPorMail($informacion["email"]) != NULL) {
			$errores["mail"] = "Email existente.";
		}

		if ($informacion["password"] < 4) {
			$errores["password"] = "Contraseña debe ser mayor de 4 caracteres.";
		}

		if ($informacion["cpassword"] == "") {
			$errores["cpassword"] = "Contraseña inválido.";
		}

		if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"]) {
			$errores["password"] = "Contraseñas inválidas.";
		}


		return $errores;
	}
}
}

?>
