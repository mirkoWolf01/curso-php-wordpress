<?php include("partials/head.php"); ?>

<?php 
    /** @var string $nombre */ 
    /** @var int $id_modificado */ 
    ?>


<div class="errores-resumen-v">
    <p>
        ✅ Producto <strong><?php echo htmlspecialchars($nombre); ?></strong>
        con el ID <strong><?php echo $id_modificado; ?></strong> ha sido modificado con exito.
    </p>
</div>

<p></p>
<a class="boton-link" href="<?php echo base_url('index.php/productos'); ?>">Volver al Inicio</a>


