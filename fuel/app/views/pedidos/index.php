<h1>Pedidos Registrados</h1>

			<div class="col-12">
				<div class="d-flex">
					<div class="p-2">
					
					</div>
					<div class="ml-auto p-2">
						<button class="btn btn-outline-info "> <i class="fas fa-file-download"></i> Descargar Pdf</button>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="tabla-r">
					<table class="table table-lg">
						<thead class="background-table">
							<tr>
								<th>Nombre</th>
								<th>Apellido paterno</th>
								<th>Apellido materno</th>
								<th>Producto</th>
								<th>Marca</th>
								<th>Categoria</th>
								<th>Descripción</th>
								<th>Fecha de pedido</th>
								<th>Cantidad</th>
								<th>Paqueteria</th>
                                <th>Pais</th>
                                <th>Estado</th>
                                <th>Ciudad</th>
                                <th>Calle</th>
                                <th>Número Interior</th>
                                <th>Número exterior</th>
                                <th>Referencias</th>
                                <th>Teléfono</th>
                                <th>Opciones</th>

							</tr>
						</thead>

 <?php foreach($pedidos as $pedido): ?>
						<tr class="table" >
							<td> <?= $pedido->nombre; ?> </td>
							<td> <?= $pedido->apellido_paterno; ?> </td>
							<td> <?= $pedido->apellido_materno; ?> </td>
							<td> <?= $pedido->producto; ?> </td>
							<td> <?= $pedido->marca; ?> </td>
							<td> <?= $pedido->categoria; ?> </td>
							<td> <?= $pedido->descripcion; ?> </td>
							<td> <?= $pedido->fecha_pedido; ?> </td>
							<td> <?= $pedido->cantidad; ?> </td>
                            <td> <?= $pedido->paqueteria; ?> </td>
                            <td> <?= $pedido->pais; ?> </td>
                            <td> <?= $pedido->estado; ?> </td>
                            <td> <?= $pedido->ciudad; ?>  </td>
                            <td> <?= $pedido->calle; ?> </td>
                            <td> <?= $pedido->numero_interior; ?> </td>
                            <td> <?= $pedido->numero_exterior; ?> </td>
                            <td> <?= $pedido->referencias; ?> </td>
                            <td> <?= $pedido->telefono; ?> </td>
                            <td class="d-flex ">
                            <button class="btn btn-info mr-3"> <i class="fas fa-times-circle"></i> </button>
                            <button class="btn btn-info mr-3"> <i class="fas fa-trash"></i> </button>
                            </td>
						</tr>
<?php endforeach; ?>

					</table>
				</div>
			</div>