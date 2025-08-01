<?php
require_once '../conexion.php';

class Testmodel {
  private $db;

  public function __construct() {
    global $conexion;  
    $this->db = $conexion;
  }

  public function guardarResultado($total, $nivel) {
    $sql = "INSERT INTO test_resul (total_resul, nivel_an) VALUES (?, ?)";
    $stmt = $this->db->prepare($sql);
    if ($stmt === false) {
      die("Error en prepare: " . $this->db->error);
    }
    $stmt->bind_param("is", $total, $nivel);  
    $exec = $stmt->execute();
    if ($exec === false) {
      die("Error en execute: " . $stmt->error);
    }
    $stmt->close();
  }
}
?>
