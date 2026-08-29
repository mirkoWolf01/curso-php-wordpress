<?php if (validation_errors()): ?>
    <div class="errores-resumen">
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>

<?php include("partials/head.php"); ?>

<form  action="<?php echo base_url('index.php/productos/ingresar_nuevo'); ?>" method="post">
    
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>">
        <?php  /* <div class="error"><?php echo form_error('nombre'); ?></div> */?>
    </div>

    <div class="campo">
        <label for="precio">Precio</label>
        <input type="text" id="precio" name="precio" value="<?php echo set_value('precio'); ?>">
        <?php  /* <div class="error"><?php echo form_error('precio'); ?></div> */?>
        
    </div>

    <div class="campo">
        <label for="stock">Stock</label>
        <input type="text" id="stock" name="stock" value="<?php echo set_value('stock'); ?>">
        <?php  /* <div class="error"><?php echo form_error('stock'); ?></div> */?>
        
    </div>

    <button type="submit">Save Product</button>
</form>


<a class="boton-link" href="<?php echo base_url('index.php/productos'); ?>"> &larr; Volver al listado </a>