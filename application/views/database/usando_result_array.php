<ul>
    <?php
    foreach($datos as $dato)
    {
        ?>
        <li>
            Nombre : <?php echo $dato["nombre"]?>
            <br />
            Correo : <?php echo $dato["correo"]?>
            <br />
            Teléfono : <?php echo $dato["tel"]?>
            <br />
            Fecha : <?php echo $dato["fecha"]?>
        </li>
        <?php
    }
    ?>
</ul>