<h3 class="text-center">Detalles de la Venta</h3>

<div class="container">
    <div class="ticket">
        <div class="ticket-header text-center">
            <h4>Factura</h4>
            <p>Fecha: <?php echo $ventas_detalle[0]->fecha; ?></p>
            <p>ID Venta: <?php echo $ventas_detalle[0]->id; ?></p>
        </div>

        <h5>Detalles de la Venta</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($ventas_detalle): ?>
                    <?php foreach ($ventas_detalle as $detalle): ?>
                        <tr>
                            <td><?php echo $detalle->descripcion; ?></td>
                            <td><?php echo $detalle->cantidad; ?></td>
                            <td>$<?php echo number_format($detalle->precio, 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">No se encontraron detalles para esta venta.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="ticket-footer text-center">
            <h5>Total: $<?php echo number_format($ventas_detalle[0]->total_venta, 2); ?></h5>
        </div>
    </div>
</div>

<!-- Botón para descargar el CSV -->
<a href="<?php echo base_url('producto_controller/descargar_csv/' . $ventas_detalle[0]->venta_id); ?>" class="btn btn-primary">Descargar CSV</a>

<style>
    body {
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
    }
    .ticket {
        width: 400px; /* Ancho del ticket */
        margin: 20px auto; /* Centrado */
        padding: 15px; /* Espaciado interno */
        border: 1px solid #ddd; /* Borde ligero */
        border-radius: 5px; /* Bordes redondeados */
        background: white; /* Fondo blanco para el ticket */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra para el efecto de elevación */
    }
    .ticket-header, .ticket-footer {
        margin-bottom: 15px; /* Espaciado inferior */
    }
    .ticket-footer {
        margin-top: 15px; /* Espaciado superior */
        font-weight: bold; /* Negrita */
    }
    .table {
        margin-top: 15px; /* Espacio superior */
    }
    .table th, .table td {
        text-align: left; /* Alinear texto a la izquierda */
    }
    .table th {
        background-color: #007bff; /* Fondo azul para el encabezado de la tabla */
        color: white; /* Color de texto blanco */
    }
</style>


