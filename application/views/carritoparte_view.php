<div class="container-fluid" id="carrito">
    <div class="cart">
        <div class="heading text-center">
            <h2 id="h2">Productos en tu Carrito</h2>
        </div>

        <div class="text text-center">
            <?php 
            $cart_check = $this->cart->contents();
            if (empty($cart_check)): ?>
                <p>Para agregar productos al carrito, haz clic en "Comprar".</p>
            <?php endif; ?>
        </div>

        <table class="table table-striped table-bordered text-center">
            <?php if ($cart = $this->cart->contents()): ?>
                <thead>
                    <tr id="main_heading">
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Cancelar Producto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    echo form_open('carrito_actualiza');
                    $gran_total = 0;
                    $i = 1;

                    foreach ($cart as $item): 
                        echo form_hidden("cart[{$item['id']}][id]", $item['id']);
                        echo form_hidden("cart[{$item['id']}][rowid]", $item['rowid']);
                        echo form_hidden("cart[{$item['id']}][name]", $item['name']);
                        echo form_hidden("cart[{$item['id']}][price]", $item['price']);
                        echo form_hidden("cart[{$item['id']}][qty]", $item['qty']);
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td>$<?php echo number_format($item['price'], 2); ?></td>
                            <td>
                                <?php 
                                echo form_input(
                                    "cart[{$item['id']}][qty]",
                                    $item['qty'], 
                                    'maxlength="3" size="1" style="text-align: right" min="1" 
                                    oninput="this.value = this.value.replace(/[^0-9]/g, \'\')"'
                                ); 
                                ?>
                            </td>
                            <td>$<?php echo number_format($item['subtotal'], 2); ?></td>
                            <td>
                                <?php 
                                $path = '<img src="' . base_url('assets/img/cart_cross.jpg') . '" width="25px" height="20px" alt="Eliminar">';
                                echo anchor("carrito_elimina/{$item['rowid']}", $path, ['class' => 'btn btn-danger btn-sm']);
                                ?>
                            </td>
                        </tr>
                    <?php 
                        $gran_total += $item['subtotal'];
                    endforeach; 
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-right font-weight-bold">Total:</td>
                        <td><b>$<?php echo number_format($gran_total, 2); ?></b></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-right">
                            <button type="button" class="btn btn-warning btn-lg" onclick="borra_carrito()">Borrar Carrito</button>
                            <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
                            <button type="button" class="btn btn-success btn-lg" onclick="window.location='comprar'">Confirmar Orden</button>
                        </td>
                    </tr>
                </tfoot>
                <?php echo form_close(); ?>
            <?php endif; ?>
        </table>
    </div>
</div>
<br>
