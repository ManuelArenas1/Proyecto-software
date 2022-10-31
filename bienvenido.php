<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("por favor debes iniciar sesion");
            window.location = "index.php";
        </script>
    ';
    session_destroy();
    die();
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bienvenido al programa de monitorias eafit</title>
</head>
<body>
    <h1>Bienvenido al programa</h1>
    
</body>
</html>