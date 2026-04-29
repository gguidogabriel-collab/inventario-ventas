<?php

require_once __DIR__ . '/../controllers/VentaController.php';

class VentaService {

    private $ventaController;

    public function __construct() {
        $this->ventaController = new VentaController();
    }

    public function procesarVenta($producto, $cantidad) {
        return $this->ventaController->registrar($producto, $cantidad);
    }
}