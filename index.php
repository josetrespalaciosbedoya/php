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
?>
</h1>
<h1>
    <!-- Impresión abreviada. -->
    <?= "Mi primer app"; ?>
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