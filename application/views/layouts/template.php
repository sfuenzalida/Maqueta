<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="es">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title><?php echo $this->layout->getTitle(); ?></title>
    
		<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">

		<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />
    <link href="<?php echo base_url()?>public/css/style.css" rel='stylesheet' type='text/css' media='all' />
    <script type="text/javascript" src="<?php echo base_url()?>public/js/funciones.js"></script>
        <!--*************auxiliares*****************-->

<?php echo $this->layout->css; ?> 

<?php echo $this->layout->js; ?> 

<!--**********fin auxiliares*****************-->
</head>

<body>

<div class="wrap">
    <header>
    	<div class="logo">
    		<a href="http://www.utem.cl">
    			<img src="<?php echo base_url()?>public/images/bg8.jpg"/>
    			<span class="title"><span>Universidad</span>Tecnológica</span> <span class="title"> <span>Metropolitana</span>
    		</a>
    		<p>Unidad de Informática</p>
    	</div>   
		<nav class="vertical menu">
            <ul>
                <li><a href="<?php echo base_url()?>index">Inicio</a></li>
                <li><a href="<?php echo base_url()?>docentes">Académicos</a></li>
                <li><a href="<?php echo base_url()?>estudiantes">Estudiantes</a></li>
                <li><a href="<?php echo base_url()?>titulados">Titulados</a></li>
                <li><a href="<?php echo base_url()?>contact">Laboral</a></li>
                <li><a href="<?php echo base_url()?>servicio">Servicio</a></li>
                <li><a href="<?php echo base_url()?>index.php/contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div>
</div>

<?php echo $content_for_layout; ?>
<footer>
    	<p>- ©opyright 2014 Universidad Tecnológica Metropolitana</p>
</footer>

</body>
</html>
