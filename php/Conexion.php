<?php

// $servername = "localhost";
// $username = "root";
// $password = "admin"; //$password = "1234";
// $dbname = "bd_bdm";


// $conn = new mysqli($servername, $username, $password, $dbname);


// if ($conn->connect_error) {
//   die("Error en la conexión a la base de datos: " . $conn->connect_error);
// }

// echo "Conexión exitosa a la base de datos.";

// $conn->close();

class Database
{
  private $servername = "localhost";
  private $dbname = "bd_bdm";
  private $username = "root";
  private $password = "admin";
  private $charset = "utf8";

  public function conectar()
  {
    try {
      $conn = new PDO(
        "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset,
        $this->username,
        $this->password,
        [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_EMULATE_PREPARES => false
        ]
      );

      return $conn;
    } catch (PDOException $e) {
      echo 'Error conexión: ' . $e->getMessage();
      exit;
    }
  }
}


