<?php if (validation_errors()): ?>
    <div class="errores-resumen">
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>

<?php include("partials/head.php"); ?>
<?php /** @var Object $producto */ ?>

<form  action="<?php echo base_url('index.php/productos/modificar_producto/' . $producto->codigo_producto); ?>" method="post">
    
    <?php 
        if(!isset($producto)){
            throw new Exception('Unexpected error occured: Product not found.');
        }
    ?>

    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $producto->nombre; ?>">
    </div>

    <div class="campo">
        <label for="precio">Precio</label>
        <input type="text" id="precio" name="precio" value="<?php echo $producto->precio; ?>">
        
    </div>

    <div class="campo">
        <label for="stock">Stock</label>
        <input type="text" id="stock" name="stock" value="<?php echo $producto->stock; ?>">

        
    </div>

    <button type="submit">Save Changes</button>
</form>


<a class="boton-link" href="<?php echo base_url('index.php/productos'); ?>"> &larr; Volver al listado </a>