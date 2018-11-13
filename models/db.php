<?php
// require_once("user.php");

class DB{
	protected $conn;

	public function __construct() {
		$dsn = 'mysql:host=localhost;dbname=dh-ecommerce;
		charset=utf8mb4;port=8889';
		$user ="root";
		$pass = "root";

		try {
		  $this->conn = new PDO($dsn, $user, $pass);
		} catch (Exception $e) {
		  echo "Error de conexion: " . $e->getMessage();
		}
	}

	public function guardarUsuario(User $usuario) {
		$query = $this->conn->prepare("
			INSERT INTO users (username, name, email, password, avatar, country)
			VALUES (:username, :name, :email, :password, :avatar, :country)");

		$query->bindValue(":username", $usuario->getUsername());
    $query->bindValue(":name", $usuario->getName());
		$query->bindValue(":email", $usuario->getEmail());
		$query->bindValue(":password", $usuario->getPassword());
		$query->bindValue(":avatar", $usuario->getAvatar());
		$query->bindValue(":country", $usuario->getCountry());

		$query->execute();

		$id = $this->conn->lastInsertId();
		$usuario->setId($id);

		return $usuario;
	}

	public function traerTodos() {
		$query = $this->conn->prepare("Select * from users");
		$query->execute();

		$usuariosFormatoArray = $query->fetchAll();

		$usuariosFormatoClase = [];

		foreach ($usuariosFormatoArray as $usuario) {
			$usuariosFormatoClase[] = new Usuario($usuario["id"], $usuario["username"], $usuario["name"], $usuario["email"], $usuario["password"],$usuario["avatar"],$usuario["country"]);
		}

		return $usuariosFormatoClase;
	}

	public function traerPorMail($email) {
		$query = $this->conn->prepare("Select * from users where email = :email");
		$query->bindValue(":email", $email);

		$query->execute();

		$usuarioFormatoArray = $query->fetch();

		if ($usuarioFormatoArray) {
			$usuario = new User($usuario["id"], $usuario["username"], $usuario["name"], $usuario["email"], $usuario["password"],$usuario["avatar"],$usuario["country"]);
			return $usuario;
		} else {
			return NULL;
		}
	}

	public function traerPorUsuario($username) {
		$query = $this->conn->prepare("Select * from users where username = :username");
		$query->bindValue(":username", $username);

		$query->execute();

		$usuarioFormatoArray = $query->fetch();

				if ($usuarioFormatoArray) {
					$usuario = new User($usuarioFormatoArray["username"], $usuarioFormatoArray["name"], $usuarioFormatoArray["email"], $usuarioFormatoArray["password"],$usuarioFormatoArray["avatar"],$usuarioFormatoArray["country"]);
			return $usuario;
		} else {
			return NULL;
		}
	}
}

?>
