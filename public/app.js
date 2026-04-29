let productos = JSON.parse(localStorage.getItem("productos")) || [];
let indiceEditando = null;

const form = document.getElementById("formProducto");
const lista = document.getElementById("listaProductos");
const nombreInput = document.getElementById("nombre");
const precioInput = document.getElementById("precio");
const stockInput = document.getElementById("stock");

function guardarProductos() {
    localStorage.setItem("productos", JSON.stringify(productos));
}

function renderProductos() {
    lista.innerHTML = "";

    productos.forEach((p, index) => {
        const li = document.createElement("li");
        li.innerHTML = `
            ${p.nombre} - $${p.precio} - Stock: ${p.stock}
            <button onclick="editarProducto(${index})">Editar</button>
            <button onclick="eliminarProducto(${index})">Eliminar</button>
        `;
        lista.appendChild(li);
    });
}

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const nombre = nombreInput.value.trim();
    const precio = parseFloat(precioInput.value);
    const stock = parseInt(stockInput.value);

    if (nombre === "" || precio <= 0 || stock < 0 || isNaN(precio) || isNaN(stock)) {
        alert("Ingrese datos válidos: nombre obligatorio, precio mayor a 0 y stock no negativo.");
        return;
    }

    const producto = { nombre, precio, stock };

    if (indiceEditando === null) {
        productos.push(producto);
    } else {
        productos[indiceEditando] = producto;
        indiceEditando = null;
        form.querySelector("button").textContent = "Agregar Producto";
    }

    guardarProductos();
    form.reset();
    renderProductos();
});

function editarProducto(index) {
    const producto = productos[index];

    nombreInput.value = producto.nombre;
    precioInput.value = producto.precio;
    stockInput.value = producto.stock;

    indiceEditando = index;
    form.querySelector("button").textContent = "Guardar Cambios";
}

function eliminarProducto(index) {
    if (!confirm("¿Seguro que quieres eliminar este producto?")) {
        return;
    }

    productos.splice(index, 1);
    guardarProductos();
    renderProductos();
}

renderProductos();