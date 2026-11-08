<?php
session_start();

if (!isset($_SESSION['fin']) || $_SESSION['fin'] != 'ganado') {
    header('Location: index.php');
    exit();
}

$palabra = $_SESSION['palabra'];
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Has ganado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="contenedor">
        <section class="panel final ganado">
            <h1>¡Enhorabuena! Has ganado :)</h1>
            <p>La palabra era: <strong><?php echo $palabra; ?></strong></p>
            <form action="index.php" method="post">
                <button type="submit">Jugar de nuevo</button>
            </form>
        </section>
    </main>
</body>
</html>
