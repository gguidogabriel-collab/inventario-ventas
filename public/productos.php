<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contenedor">
    <h1>Gestión de Productos</h1>

    <form id="formProducto">
        <input type="text" id="nombre" placeholder="Nombre del producto" required>
        <input type="number" id="precio" placeholder="Precio" required>
        <input type="number" id="stock" placeholder="Stock" required>

        <button type="submit">Agregar Producto</button>
    </form>

    <h2>Lista de Productos</h2>
    <ul id="listaProductos"></ul>

    <br>
    <a href="index.php">← Volver</a>
</div>

<script src="app.js"></script>

</body>
</html>