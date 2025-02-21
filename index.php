<h1>
<?php
    // PHP es un lenguaje de tipado dinámico, débil y gradual
    // Comando para ejecutar servidor de PHP.
    // En ruta del archivo, ejecutar php -S localhost:8000
    // Variable.
    $name = "Jose Luis";
    // Variable boolean, y recomendación de uso de cammelCase.
    $isDev = true;
    // Impresión básica
    echo "Hola mundo";
    // Variable numérica.
    $age = 39;
    $newAge = 39 + '1';
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
?>
<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
</h1>
<h1>
    Hola, soy <?=$user;?>
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