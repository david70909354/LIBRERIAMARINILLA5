

<html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilos3.css">
  <title>Formulario Registro</title>
</head>
<body>
    <section class="form-register">
		<h1>Carrito de Compras - Librería Marinilla</h1>
  
		<div id="productos">
		  <h2>Productos</h2>
		  <ul>
			<li>DON QUIJOTE  - $40.000 <button onclick="agregarProducto('DONQUJOTE', 40000)">Agregar al carrito</button></li>
			<li>El EXTRANGERO - $30.000 <button onclick="agregarProducto('EL EXTRANJERO 2', 30000)">Agregar al carrito</button></li>
			<li>El PRICIPITO- $20.000 <button onclick="agregarProducto('Libro 3', 20000)">Agregar al carrito</button></li>
		  </ul>
		</div>
	  
		<div id="carrito">
		  <h2>Carrito</h2>
		  <ul id="lista-carrito"></ul>
		  <p>Total: $<span id="total"></span></p>
		  <button onclick="vaciarCarrito()">Vaciar carrito</button>
		  <button onclick="vaciarCarrito()">Comprar</button>
		</div>
		<script>
			
			let carrito = [];
			let total = 0;
			
			function agregarProducto(nombre, precio) {
			  carrito.push({ nombre, precio });
			  total += precio;
			  mostrarCarrito();
			}
			
			function mostrarCarrito() {
			  const listaCarrito = document.getElementById('lista-carrito');
			  const totalElement = document.getElementById('total');
			  
			  listaCarrito.innerHTML = '';
			  
			  carrito.forEach(producto => {
				const li = document.createElement('li');
				li.textContent = `${producto.nombre} - $${producto.precio}`;
				listaCarrito.appendChild(li);
			  });
			  
			  totalElement.textContent = total;
			}
			
			function vaciarCarrito() {
			  carrito = [];
			  total = 0;
			  mostrarCarrito();
			}
			
		</script>
    </section>


</body>

</head>
</html>