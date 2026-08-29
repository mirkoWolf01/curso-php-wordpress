<?php include("partials/head.php"); ?>
<?php /** @var Object $producto */ ?>

<table>
    <tr><th>ID</th><td><?php echo $producto->codigo_producto; ?></td></tr>
    <tr><th>Nombre</th><td><?php echo htmlspecialchars($producto->nombre); ?></td></tr>
    <tr><th>Precio</th><td>$<?php echo number_format($producto->precio, 2); ?></td></tr>
    <tr><th>Stock</th><td><?php echo $producto->stock; ?></td></tr>
</table>


<a class="boton-link" href="<?php echo base_url('index.php/productos'); ?>">&larr; Volver al listado</a>
<a class="boton-link" href="<?php echo base_url('index.php/productos/modificar_producto/' . $producto->codigo_producto); ?>">Modificar Producto</a>


