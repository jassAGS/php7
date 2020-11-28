<?php
    include_once "../app/registerController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER || MEMEFLIX</title>
  
    <link rel="stylesheet" href="../css/estilos.css">

</head>
<body>
        <?php
            if(isset($_SESSION) && isset($_SESSION['error'])){
                echo "<h3>Error: ".$_SESSION['error']."</h3>";
                unset($_SESSION['error']);
            }

            if(isset($_SESSION) && isset($_SESSION['success'])){
                echo "<h3>Completado: ".$_SESSION['success']."</h3>";
                unset($_SESSION['success']);
            }
        ?>

        <div class="menu">
            <img src="../img/memeflix.png" height="60px" alt="">
        </div>

                <!-- DIV CON FORM DEL Login -->
        <div class="seccionLogin" style="margin-top: 100px; height: 600px">
            <h2>Registrarse</h2>
        <form id="registerForm" method="POST" action="../app/registerController.php" onsubmit="return checkForm()">
                <input type="text" class="in" required="" name="name" id="name" placeholder="Nombre">
                <input type="text" class="in"  required="" name="lastname" id="lastname" placeholder="Apellidos"> <br>
                <input type="date" class="in"  required="" name="birthdate" id="birthdate" placeholder="Fecha de nacimiento"> <br>
                <input type="email" class="in" required="" name="email" id="email" placeholder="Email"> <br>
                <input type="password" class="in" required="" name="password" id="password" placeholder="Contraseña"> <br>
                <input type="password" class="in" required="" name="password-repeat" id="password-repeat" placeholder="Repetir contraseña"> <br><br>
                <a href="../index.php">Ya tengo una cuenta</a> <br> <br>
                <button type="submit">ENVIAR REGISTRO</button>
                <input type="hidden" name="action" value="store">
        </form>
        </div>
    
    
        <script type="text/javascript">
            function checkForm(){
                var password = document.getElementById('password').value;
                var passwordr = document.getElementById('password-repeat').value;

                if (password==passwordr){
                    return true;
                }else{
                    alert('Las contraseñas no son iguales');
                    return false;
                }
            }
        </script>

</body>
</html>