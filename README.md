# Sistema Web: Inventario + Ventas Simple

## Descripción
Sistema web desarrollado en PHP para gestionar productos y registrar ventas de manera simple.  
El módulo principal utiliza localStorage para almacenar productos y ventas en el navegador.

## Funcionalidades
- Crear productos
- Listar productos
- Editar productos
- Eliminar productos
- Registrar ventas
- Descontar stock automáticamente
- Calcular total de ventas
- Validaciones de nombre, precio y stock

## Requisitos
- XAMPP
- Apache activo
- Navegador web
- Visual Studio Code
- Git y GitHub

## Instalación
1. Copiar la carpeta `inventario-ventas` dentro de:
   `C:\xampp\htdocs\`

2. Iniciar Apache desde XAMPP.

3. Abrir en el navegador:
   `http://localhost/inventario-ventas/public/index.php`

## Estructura del proyecto
- `config/`: configuración general
- `models/`: modelos Producto y Venta
- `controllers/`: controladores del sistema
- `services/`: lógica de servicio
- `public/`: archivos visibles del sistema
- `database/`: script SQL opcional

## Uso
1. Ingresar a Gestión de Productos.
2. Crear un producto con nombre, precio y stock.
3. Editar o eliminar productos si es necesario.
4. Ingresar a Registro de Ventas.
5. Seleccionar producto, ingresar cantidad y registrar venta.

## Capturas
Agregar capturas del sistema funcionando:
- Pantalla principal
- Gestión de productos
- Registro de ventas
- Historial de ventas

## Usuario de prueba
No aplica, ya que el sistema no utiliza login.

## Autor
Guido García

Proyecto realizado para la materia de Ingeniería de Software II.

Sistema simple para gestión de inventario y ventas.

Permite registrar ventas y visualizar el historial de transacciones.

Incluye validaciones como precio mayor a 0 y stock no negativo.