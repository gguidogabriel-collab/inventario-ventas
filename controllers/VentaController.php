<?php

require_once __DIR__ . '/../models/Venta.php';

class VentaController {

    public function registrar($producto, $cantidad) {
        $total = $producto->precio * $cantidad;
        return new Venta($producto->nombre, $cantidad, $total);
    }

    public function validar($cantidad, $stock) {
        if ($cantidad <= 0) {
            return "Cantidad inválida";
        }

        if ($cantidad > $stock) {
            return "No hay suficiente stock";
        }

        return true;
    }
}