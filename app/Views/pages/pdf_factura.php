<?php use CodeIgniter\I18n\Time; ?> 
<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="UTF-8"> 
        <title>Factura <?= $factura['id_factura'] ?></title> 
        <style> 
            body { 
                font-family: 'Arial', sans-serif; 
                font-size: 12px; 
                margin: 40px; 
                color: #333; 
            } 
            .header { 
                text-align: center; 
                margin-bottom: 20px; 
            } 
            .header h2 { 
                margin: 0; color: #444; 
            } 
            .header p { 
                margin: 4px 0; font-size: 11px; 
            } 
            .client-info { 
                margin-top: 10px; 
                font-size: 11px; 
                border: 1px solid #ccc; 
                padding: 10px; 
                border-radius: 6px; 
                background-color: #f8f8f8; 
            } 
            .client-info strong { 
                display: inline-block; 
                width: 100px; 
            } 
            .table-container { 
                margin-top: 30px; 
            } 
            table { 
                width: 100%; 
                border-collapse: collapse; 
            } 
            th { 
                background-color: #212529; 
                color: #fff; padding: 10px; 
                font-size: 12px; 
            } 
            td { 
                border-bottom: 1px solid #ccc; 
                padding: 8px; 
                font-size: 11px;
            } 
            .total-row td { 
                font-weight: bold; 
                background-color: #f4f4f4; 
                border-top: 2px solid #000; 
            } 
            .footer { 
                margin-top: 40px; 
                text-align: center; 
                font-size: 11px; 
                color: #888; 
            } 
        </style> 
    </head> 
    <body> 
        <div class="header"> 
            <h2>Factura N° <?= $factura['id_factura'] ?></h2> 
            <p>Fecha: <?= $factura['fecha'] ?? date('Y-m-d') ?></p>
        </div> 
        <div class="client-info"> 
            <p><strong>Cliente:</strong> 
            <?= esc($usuario['nombre'] . ' ' . $usuario['apellido']) ?>
            </p> 
            <p><strong>DNI:</strong> <?= esc($usuario['dni']) ?></p> 
            <p><strong>Dirección:</strong> <?= esc($usuario['direccion']) ?></p> 
            <p><strong>Email:</strong> <?= esc($usuario['correo'] ?? 'N/A') ?></p> 
        </div> 
        <div class="table-container"> 
            <table> 
                <thead> 
                    <tr> 
                        <th>Producto</th> 
                        <th>Precio Unitario</th> 
                        <th>Cantidad</th> 
                        <th>Subtotal</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php foreach ($detalles as $detalle): ?> 
                        <?php $producto = (new \App\Models\productoModelo())->find($detalle['id_producto']); 
                        $nombreProducto = $producto ? esc($producto['nombre']) : 'Producto eliminado'; 
                        $precioUnitario = $producto ? $producto['precio'] : 0; ?> 
                        <tr> 
                            <td>
                                <?= $nombreProducto ?></td> <td>$<?= number_format($precioUnitario, 2, ',', '.') ?></td> 
                                <td><?= esc($detalle['cantidad']) ?></td> <td>$<?= number_format($detalle['subtotal'], 2, ',', '.') ?></td> 
                            </tr> <?php endforeach; ?> 
                            <tr class="total-row"> <td colspan="3" style="text-align: right;">Total:</td> 
                            <td>$<?= number_format($factura['importe_total'], 2, ',', '.') ?>
                        </td> 
                    </tr> 
                </tbody> 
            </table>
        </div> 
        <div class="footer"> 
            <p>Gracias por su compra - vibeSports</p> 
        </div> 
    </body> 
</html>