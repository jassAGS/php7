<?php
  include_once "app.php";

    include_once "connectionController.php";

    if (isset($_POST['action'])){
        $registerController = new registerController();

        switch ($_POST['action']) {
            case 'store':
                $name = strip_tags($_POST['name']);
                $lastname = strip_tags($_POST['lastname']);
                $birthdate = strip_tags($_POST['birthdate']);
                $email = strip_tags($_POST['email']);
                $password = strip_tags($_POST['password']);

                $registerController->store($name, $lastname, $birthdate, $email, $password);
            break;            
        }
    }

    class RegisterController{
        public function store($name, $lastname, $birthdate, $email, $password){
            $conn = connect();
            if ($conn->connect_error==false){

                if($name!="" && $lastname!="" && $birthdate!="" && $email!="" && $password!=""){
                    $query = "insert into users (name, lastname, birthdate, email, password) VALUES(?,?,?,?,?)";

                    $prepared_query = $conn->prepare($query);
                    $prepared_query->bind_param('sssss', $name, $lastname, $birthdate, $email, $password);
                    if ($prepared_query->execute()){
                        $_SESSION['success'] = 'El registro se ha guardado correctamente';
                        header("Location:".$_SERVER["HTTP_REFERER"]);
                    }else{
                        $_SESSION['error'] = 'Verifica los datos ingresados';
                        header("Location:".$_SERVER["HTTP_REFERER"]);
                    }
                }else{
                    $_SESSION['error'] = 'verifique la informacion del formulario';
                    header("Location:".$_SERVER["HTTP_REFERER"]);
                }

            }else{
                $_SESSION['error'] = 'verifique la conexion a la base de datos';
                header("Location:".$_SERVER["HTTP_REFERER"]);
            }
        }

    }
?>