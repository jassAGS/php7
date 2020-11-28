<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION) || isset($_SESSION['role'])!="admin" ){
        header("Location:"."../");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | MEMEFLIX</title>
    <link rel="stylesheet" href="../css/adminEstilo.css?ver=1.4">

</head>
<body>
    <!--MENU SUPERIOR  -->
    <div class="header">
        <div style="float: left; margin-left: 70px"> 
            <a href="/WebProyect/pag/catalogo.php"><img src="../img/memeflix.png" height="30px" alt=""></a>
        </div>
        <div class="iconos-menu" style="float: right; margin-right: 115px"> 
            <a href="catalogo.php"><img src="../img/avatar-de-hombre.png" alt=""></a>
        </div>
    </div>

    <nav id="nav" >
        <div class="logo centerdiv">
            <img src="assets/img/logo.png" alt="">
        </div>
        <div class="links">
            <a class="option" onclick="openOption(event, 'index')">Inicio</a>
            <a class="option" onclick="openOption(event, 'movies')">Peliculas</a>
            <a class="option" onclick="openOption(event, 'clients')">Clientes</a>
            <a class="option" onclick="openOption(event, 'loans')">Prestamos</a>
        </div>
    </nav>

    <div id="index" class="options" style="display: block;">
        <div class="content centerdiv">
            <h3>Inicio</h3>

        </div>
    </div>

    <div id="movies" class="options">
        <div class="content centerdiv">
            <h3>Pelicula</h3>
            
            <table CELLSPACING="0">

                <thead>
                    <th>
                        #Pelicula
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Acciones
                    </th>

                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Lorem Lorem
                        </td>
                        <td>
                            <button onclick="openMovieDetail(event)">
                                Edit
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

    <div id="movies-detail" class="options">
        <div class="content centerdiv">
            <h3>Pelicula - Detalles</h3>

            <div class="card centerdiv">
                <img src="../img/pelicula3.png" height="140px" alt="">

                <p id="value1">
                    Value
                </p>
                <p id="value2">
                    Value
                </p>
                <p id="value3">
                    Value
                </p>
            </div>
            
            <table CELLSPACING="0" style="margin-top: 20px">

                <thead>
                    <th>
                        #Pelicula
                    </th>
                    <th>
                        Descripcion
                    </th>
                    <th>
                        Clasificacion
                    </th>
                    <th>
                        Duracion
                    </th>
                    <th>
                        Categoria
                    </th>
                    <th>
                        Visualizaciones
                    </th>
                    <th>
                        Acciones
                    </th>

                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Lorem Lorem
                        </td>
                        <td>
                            A
                        </td>
                        <td>
                            90 minutos
                        </td>
                        <td>
                            Lorem Lorem
                        </td>
                        <td>
                            100
                        </td>
                        <td>
                            <button>
                                Edit
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

    <div id="clients" class="options">
        <div class="content centerdiv">
            <h3>Clientes</h3>

            <table CELLSPACING="0">

                <thead>
                    <th>
                        #Cliente
                    </th>
                    <th>
                        Nombres
                    </th>
                    <th>
                        Apellidos
                    </th>
                    <th>
                        Acciones
                    </th>

                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Juan 
                        </td>
                        <td>
                            Perez 
                        </td>
                        <td>
                            <button onclick="openClientsDetail(event)">
                                Edit
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

    <div id="clients-detail" class="options">
        <div class="content centerdiv">
            <h3>Clientes - Detalles</h3>

            <div class="card centerdiv">
                <img src="../img/admin-avatar.png" height="140px" alt="">

                <p id="value1">
                    Value
                </p>
                <p id="value2">
                    Value
                </p>
                <p id="value3">
                    Value
                </p>
            </div>
            
            <table CELLSPACING="0" style="margin-top: 20px">

                <thead>
                    <th>
                        #Cliente
                    </th>
                    <th>
                        Nombres
                    </th>
                    <th>
                        Apellidos
                    </th>
                    <th>
                        Fecha de nacimiento
                    </th>
                    <th>
                        Acciones
                    </th>

                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Juan
                        </td>
                        <td>
                            Perez
                        </td>
                        <td>
                            26/01/2000
                        </td>
                        <td>
                            <button>
                                Edit
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

    <div id="loans" class="options">
        <div class="content">
            <h3 class="centerdiv">Prestamos</h3>

            <div class="card2 centerdiv">
                <img src="../img/pelicula3.png" height="100px" alt="">

                <p id="value1">
                    Value
                </p>
                <p id="value2">
                    Value
                </p>
                <p id="value3">
                    Value
                </p>

                <button class="btn-loans">Regresar</button>
            </div>

            <div class="card2 centerdiv">
                <img src="../img/pelicula3.png" height="100px" alt="">

                <p id="value1">
                    Value
                </p>
                <p id="value2">
                    Value
                </p>
                <p id="value3">
                    Value
                </p>
                <button class="btn-loans">Regresar</button>
            </div>
        </div>
    </div>


    <script>

        function openOption(evt, option) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("options");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("option");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(option).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function openMovieDetail(evt) {
            document.getElementById("movies-detail").style.display = "block";
            document.getElementById("movies").style.display = "none";
        }

        function openClientsDetail(evt) {
            document.getElementById("clients-detail").style.display = "block";
            document.getElementById("clients").style.display = "none";
        }

    </script>

    


    
</body>
</html>