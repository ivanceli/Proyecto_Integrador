<?php
$gran_total = 0;
$cart_check = $this->cart->contents();

// Calcula el gran total si el carrito tiene elementos
if (!empty($cart_check)):
    foreach ($cart_check as $item):
        $gran_total += $item['subtotal'];
    endforeach;
endif;
?>

<div id="bill_info" class="container">
    <?php if (!empty($cart_check)): ?>
        <?php 
        // Crea formulario para guardar los datos de la venta
        echo form_open("confirma_compra", ['class' => 'form-signin', 'role' => 'form']); 
        ?>
        <div class="text-center">
            <h2 id="h2">Información de Compra</h2>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td><strong>Total Compra:</strong></td>
                    <td>$<?php echo number_format($gran_total, 2); ?></td>
                </tr>
                <tr>
                    <td><strong>Nombre:</strong></td>
                    <td><?php echo htmlspecialchars($nombre); ?></td>
                </tr>
                <tr>
                    <td><strong>Apellido:</strong></td>
                    <td><?php echo htmlspecialchars($apellido); ?></td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo htmlspecialchars($email); ?></td>
                </tr>
            </tbody>
        </table>
        <?php 
        // Campo oculto para enviar el total de la compra
        echo form_hidden('total_venta', $gran_total); 
        ?>
        <div class="text-center">
            <?php 
            // Botón para confirmar la compra
            echo form_submit('confirmar', 'Confirmar', "class='btn btn-lg btn-primary'"); 
            ?>
        </div>
        <?php echo form_close(); ?>
    <?php else: ?>
        <div class="alert alert-warning text-center">
            <strong>El carrito está vacío.</strong> No puedes realizar una compra sin agregar productos.
        </div>
    <?php endif; ?>
</div>
