<?php
require_once '../Modelo/Testmodel.php';

class Testcontrol  {
  private $modelo;

  public function __construct() {
    $this->modelo = new Testmodel();
  }

  public function procesarTest($respuestas) {
    $total = array_sum($respuestas);

    if ($total < 8) {
      $nivel = "Mínima ansiedad";
    } elseif ($total <= 15) {
      $nivel = "Ansiedad leve";
    } elseif ($total <= 25) {
      $nivel = "Ansiedad moderada";
    } else {
      $nivel = "Ansiedad grave";
    }

    $this->modelo->guardarResultado($total, $nivel);

    return [
      'total' => $total,
      'nivel' => $nivel
    ];
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controlador = new Testcontrol();

    $respuestas = [];
    for ($i = 1; $i <= 21; $i++) {
        $campo = 'q' . $i;
        if (isset($_POST[$campo])) {
            $respuestas[] = intval($_POST[$campo]);
        }
    }

    $resultado = $controlador->procesarTest($respuestas);

    header("Location: ../Test.php?total=" . $resultado['total'] . "&nivel=" . urlencode($resultado['nivel']));
    exit();
}
?>
