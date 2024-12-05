<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Backup de Base de Datos</title>
    <!-- Incluimos Bootstrap para mejorar el diseño -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h1>Generar Backup de la Base de Datos</h1>
    <p>Haz clic en el botón para descargar un backup de la base de datos.</p>
    
    <!-- Botón para iniciar el backup -->
    <form action="backup.php" method="post">
        <button type="submit" name="backup" class="btn btn-primary">Generar Backup</button>
    </form>
</div>

<?php
if (isset($_POST['backup'])) {
    // Configuración de la base de datos
    $host = "localhost";    // Nombre del host (generalmente 'localhost')
    $user = "root";   // Usuario de la base de datos
    $password = ""; // Contraseña del usuario
    $dbname = "productos";  // Nombre de la base de datos

    // Nombre del archivo de backup (puedes añadir la fecha al nombre)
    $backup_file = $dbname . "_" . date("Y-m-d_H-i-s") . ".sql";

    // Comando mysqldump para generar el backup
    $command = "mysqldump --user=$user --password=$password --host=$host $dbname > $backup_file";

    // Ejecuta el comando
    system($command, $output);

    // Verifica si el backup fue exitoso
    if ($output === 0) {
        // Configura las cabeceras para la descarga del archivo
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $backup_file . '"');
        header('Content-Length: ' . filesize($backup_file));

        // Lee y envía el archivo al navegador para su descarga
        readfile($backup_file);

        // Elimina el archivo de backup del servidor si no deseas almacenarlo localmente
        unlink($backup_file);

        exit();
    } else {
        echo "<div class='alert alert-danger mt-4'>Hubo un error al intentar generar el backup.</div>";
    }
}
?>

<!-- Incluimos los scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
