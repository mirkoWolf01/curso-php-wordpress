<?php include("partials/head.php"); ?>

<?php 
    /** @var string $nombre */ 
    /** @var int $id_insertado */ ?>


<div class="errores-resumen-v">
    <p>
        ✅ Producto <strong><?php echo htmlspecialchars($nombre); ?></strong>
        guardado con el ID <strong><?php echo $id_insertado; ?></strong>.
    </p>
</div>

<p></p>
<a class="boton-link" href="<?php echo base_url('index.php/productos'); ?>">Ver el listado</a>
<a class="boton-link" href="<?php echo base_url('index.php/productos/ingresar_nuevo'); ?>">Cargar otro producto</a>


