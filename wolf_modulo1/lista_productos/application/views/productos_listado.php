<?php include("partials/head.php"); ?>

<a class="boton-link" href="<?php echo base_url('index.php/productos/ingresar_nuevo'); ?>">+ Nuevo Producto</a>

<table border="1">
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>

    <?php
    /** @var array $productos */
     foreach ($productos as $producto): ?>
        <tr>
            <?php $id = $producto->codigo_producto; ?>
            <td><a class="link-detalle-producto" href="<?php echo base_url('index.php/productos/ver_detalles/' . $id); ?> "> <?php echo $id; ?></a></td>
            <td> <?php echo htmlspecialchars($producto->nombre); ?> </td>
            <td> <?php echo $producto->precio; ?> </td>
            <td> <?php echo $producto->stock; ?> </td>

            
        </tr>
    <?php endforeach; ?>

</table>