<h1>
<?php
    // PHP es un lenguaje de tipado dinámico, débil y gradual
    // Comando para ejecutar servidor de PHP.
    // En ruta del archivo, ejecutar php -S localhost:8000
    // Variable.
    $name = "Jose Luis";
    // Variable boolean, y recomendación de uso de cammelCase.
    $isDev = true;
    $isOld = false;
    // Impresión básica
    echo "Hola mundo";
    // Variable numérica.
    $age = 25;
    $newAge = 25 + '1';
    $lenguajes = ['JS', 'PHP', 'Python'];

    $course = 'PHP';
    $user = 'Jose';
    $presentation = $user .' '. $course;
    $output = "Hola, soy $user, y estudio $course";
    
    echo $output;

    echo gettype($age);
    
    var_dump($age);
    
    echo $lenguajes[2];

    // Constantes
    // Globales
    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-png-transparent.png');
    const NOMBRE = 'Jose Luis';

    $isOld = $age > 40;

    $output = "Hola $name, con una edad de $age.😀";
    $outputAge = $isOld
    ? 'Eres viejo, lo siento'
    :  'Eres joven, felicidades'
?>
<h1>
    <?= $output ?>
</h1>
<?php if ($isDev) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($isOld) : ?>
    <h2>No eres viejo, pero eres dev.</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
</h1>
<h1>
    Hola, soy <?=$user;?> <?= NOMBRE ?>
</h1>
<p>
    Presentation: <?=$presentation;?>
</p>
<?= var_dump($age);?>
<h1>
    <!-- Impresión abreviada. -->
    <?= $newAge; ?>
</h1>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>