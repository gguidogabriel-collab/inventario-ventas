<?php

require_once __DIR__ . '/../models/Producto.php';

class ProductoController {

    public function crear($nombre, $precio, $stock) {
        return new Producto($nombre, $precio, $stock);
    }

    public function validar($nombre, $precio, $stock) {
        if (empty($nombre)) {
            return "El nombre no puede estar vacío";
        }

        if ($precio <= 0) {
            return "El precio debe ser mayor a 0";
        }

        if ($stock < 0) {
            return "El stock no puede ser negativo";
        }

        return true;
    }
}