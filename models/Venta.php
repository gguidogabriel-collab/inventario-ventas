<?php

class Venta {
    public $producto;
    public $cantidad;
    public $total;

    public function __construct($producto, $cantidad, $total) {
        $this->producto = $producto;
        $this->cantidad = $cantidad;
        $this->total = $total;
    }
}