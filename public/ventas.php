<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contenedor">
    <h1>Registro de Ventas</h1>

    <form id="formVenta">
        <select id="producto"></select>
        <input type="number" id="cantidad" placeholder="Cantidad" required>
        <button type="submit">Registrar Venta</button>
    </form>

    <h2>Historial de Ventas</h2>
    <ul id="listaVentas"></ul>

    <br>
    <a href="index.php">← Volver</a>
</div>

<script>
let productos = JSON.parse(localStorage.getItem("productos")) || [];
let ventas = JSON.parse(localStorage.getItem("ventas")) || [];

const selectProducto = document.getElementById("producto");
const listaVentas = document.getElementById("listaVentas");

function cargarProductos() {
    selectProducto.innerHTML = "";

    productos.forEach((p, index) => {
        const option = document.createElement("option");
        option.value = index;
        option.textContent = `${p.nombre} (Stock: ${p.stock})`;
        selectProducto.appendChild(option);
    });
}

function renderVentas() {
    listaVentas.innerHTML = "";

    ventas.forEach(v => {
        const li = document.createElement("li");
        li.textContent = `${v.nombre} - Cantidad: ${v.cantidad} - Total: $${v.total ?? (v.cantidad * 1)}`;
        listaVentas.appendChild(li);
    });
}

document.getElementById("formVenta").addEventListener("submit", (e) => {
    e.preventDefault();

    const index = selectProducto.value;
    const cantidad = parseInt(document.getElementById("cantidad").value);

    if (productos[index].stock < cantidad) {
        alert("No hay suficiente stock");
        return;
    }

    productos[index].stock -= cantidad;

    ventas.push({
    nombre: productos[index].nombre,
    cantidad: cantidad,
    total: productos[index].precio * cantidad
});

    localStorage.setItem("productos", JSON.stringify(productos));
    localStorage.setItem("ventas", JSON.stringify(ventas));

    cargarProductos();
    renderVentas();
});

cargarProductos();
renderVentas();
</script>

</body>
</html>