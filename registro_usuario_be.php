
<?php 
include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
        VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    // verificacion que el correo no se repita en la bd
    $verificar_correor = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo'");
if(mysqli_num_rows($verificar_correor) > 0){
    echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "../index.php";
        </srcipt>
    ';
    exit();
}

   // verificacion que el usuario no se repita en la bd
   $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario'");
   if(mysqli_num_rows($verificar_usuario) > 0){
       echo '
           <script>
               alert("Este Usuario ya esta registrado, intente con otro);
               window.location = "../index.php";
            </srcipt>
       ';
       exit();
   }

    $ejecutar = mysqli_query($conexion, $query);

        if($ejecutar) {
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
         '; 
    }else{
        echo '
            <script>
                alert("Intentelo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>
        '; 
    }

    mysqli_close($conexion);



?>
