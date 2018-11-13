<?php

class User {
	protected $id;
	protected $username;
	protected $name;
	protected $email;
	protected $password;
	protected $avatar;
	protected $country;

	public function __construct($username, $name, $email, $password, $country,$id = null) {
		if ($id == null) {
			$this->password = password_hash($password, PASSWORD_DEFAULT);
		}
		else {
			$this->password = $password;
		}
		$this->id = $id;
		$this->username = $username;
		$this->name=$name;
		$this->email = $email;
		$this->country = $country;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername($username) {
		$this->username = $username;
	}

  public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getAvatar() {
		return $this->avatar;
	}

	public function setAvatar($imgName) {
		$this->avatar = $imgName;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

	public function getCountry() {
		return $this->country;
	}

	public function setCountry($country) {
		$this->country = $country;
	}

	public function guardarAvatar($files, $mail) {

		if ($_FILES["userAvatar"]["error"] == UPLOAD_ERR_OK)
		{
			$archivo=$_FILES["userAvatar"]["tmp_name"];
			//$img=uniqid();
			$ext = pathinfo($_FILES["userAvatar"]["name"], PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
				return "Formato invalido.";
			}
			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/../avatars/";
			$miArchivo = $miArchivo . $mail . "." . $ext;
			move_uploaded_file($archivo, $miArchivo);
			$finalName = $mail . "." . $ext;
			return $finalName;
		}
		//falta $avatar = trim($hasta); para guardar en base de datos.
	}

}
 ?>
