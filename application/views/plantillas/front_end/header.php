<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $Titulo; ?></title>
        <link rel="stylesheet" href="<?= BASE_URL(); ?>assets/css/estilos.css" type="text/css">
    </head>
    <body>
        <header> 
            <section class="contenedor">
                <h1>Curso de CODEIGNITER</h1>
                <p>Plantilla de ejemplo para el curso de codeIgniter</p>                    
            </section>
        </header>
        <nav>
            <section class="contenedor">
                <ul>
                    <li><?= anchor('home','INICIO')?></li>
                    <li><a href="#">CALENDARIO</a></li>
                    <li><?= anchor('productos','PRODUCTOS')?></li>
                    <li><?= anchor('encriptacion','ENCRIPTACION')?></li>
                    <li><?= anchor('emails','EMAILS')?></li>
                </ul>
            </section>
        </nav>
        <section class="contenedor">