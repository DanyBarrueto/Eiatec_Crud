<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2460b47c04.js" crossorigin="anonymous"></script>

    <title>Document</title>

</head>

<body>

    <header style="background-color: rgb(96, 147, 2);">
        <!--Logo-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <img src="./images/Logo_eiatec.png" class="img-responsive" style="width: 50%; height: auto;">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <h2>Usuario:</h2>
        <div class="row justify-content-center">
            <form class="col-md-8" action="./conexion.php" method="post" style="width: 200vh;">
                <div class="row">
                    <div class="col-md-2">
                        <label for="cedula" class="form-label">Cédula:</label>
                        <input type="text" id="cedula" name="cedula" class="form-control border-dark" required />
                    </div>
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control border-dark" />
                    </div>
                    <div class="col-md-2">
                        <label for="oficina" class="form-label">Oficina:</label>
                        <select id="oficina" name="oficina" class="form-select border-dark" required>
                            <option value=""></option>
                            <option value="N_Rio">N_Rio</option>
                            <option value="S_Nei">S_Nei</option>
                            <option value="C_Téc">C_Téc</option>
                            <option value="C_Adm">C_Adm</option>
                            <option value="C_Hof">C_Hof</option>
                            <option value="N_Hof">N_Hof</option>
                            <option value="S_Hof">S_Hof</option>
                            <option value="N_Uri">N_Uri</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="area" class="form-label">Area:</label>
                        <select id="area" name="area" class="form-select border-dark" required>
                            <option value=""></option>
                            <option value="Tecnica">Tecnica</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Administracion">Administracion</option>
                            <option value="Geb_Centro">Geb_Centro</option>
                            <option value="Geb_Norte">Geb_Norte</option>
                            <option value="Gerencia">Gerencia</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="cargo" class="form-label">Cargo:</label>
                        <select id="cargo" name="cargo" class="form-select border-dark" required>
                            <option value=""></option>
                            <option value="Gerente">Gerente</option>
                            <option value="Profesional Forestal">Profesional Forestal</option>
                            <option value="Profesional Ambiental">Profesional Ambiental</option>
                            <option value="Gestor Predial">Gestor Predial</option>
                            <option value="Coordinador de Proyectos">Coordinador de Proyectos</option>
                            <option value="Auxiliar HSEQ">Auxiliar HSEQ</option>
                            <option value="Profesional Civil">Profesional Civil</option>
                            <option value="Profesional Social">Profesional Social</option>
                            <option value="Gerente Tecnico">Gerente Tecnico</option>
                            <option value="Coordinador De Arqueología">Coordinador De Arqueología</option>
                            <option value="Profesional Biologo">Profesional Biologo</option>
                            <option value="Tecnologo Social">Tecnologo Social</option>
                            <option value="Auxiliar de Servicios Generales">Auxiliar de Servicios Generales</option>
                            <option value="Coordinador Sig">Coordinador Sig</option>
                            <option value="Gerente Administrativo">Gerente Administrativo</option>
                            <option value="Coordinador Area Sig">Coordinador Area Sig</option>
                            <option value="Contador Junior">Contador Junior</option>
                            <option value="Gestor Social">Gestor Social</option>
                            <option value="Logistico/Conduccion">Logistico/Conduccion</option>
                            <option value="Profesional Geologo">Profesional Geologo</option>
                            <option value="Profesional Biotico">Profesional Biotico</option>
                            <option value="Profesional Especializado">Profesional Especializado</option>
                            <option value="Asistente Administrativo">Asistente Administrativo</option>
                            <option value="Profesional Abiotico">Profesional Abiotico</option>
                            <option value="Asistente De Facturacion">Asistente De Facturacion</option>
                            <option value="Estructurador de Proyectos">Estructurador de Proyectos</option>
                            <option value="Gerente General">Gerente General</option>
                            <option value="Logistico">Logistico</option>
                            <option value="Auxiliar Tecnico/Alturas">Auxiliar Tecnico/Alturas</option>
                            <option value="Profesional Arqueologo">Profesional Arqueologo</option>
                            <option value="Tecnico Biologo">Tecnico Biologo</option>
                            <option value="Profesional Sig / Profesional De Aseguramiento De Información - Sig">
                                Profesional Sig / Profesional De Aseguramiento De Información - Sig</option>
                            <option value="Coordinador Administrativo">Coordinador Administrativo</option>
                            <option value="Tecnico Juridico">Tecnico Juridico</option>
                            <option value="Tecnologo Geologo">Tecnologo Geologo</option>
                            <option value="Auxiliar Recursos Humanos">Auxiliar Recursos Humanos</option>
                            <option value="Tecnico De Sistemas">Tecnico De Sistemas</option>
                            <option value="Subgerente">Subgerente</option>
                            <option value="Coordinador Social">Coordinador Social</option>
                            <option value="Coordinador De Compras Y Mantenimiento">Coordinador De Compras Y
                                Mantenimiento</option>
                            <option value="Coordinador HSEQ">Coordinador HSEQ</option>
                            <option value="Coordinador T.I.C.">Coordinador T.I.C.</option>
                            <option value="Profesional Biologo Mastozoologo">Profesional Biologo Mastozoologo</option>
                            <option value="Gestor Documental - Tecnico">Gestor Documental - Tecnico</option>
                            <option value="Contador">Contador</option>
                            <option value="Auxiliar Contable">Auxiliar Contable</option>
                            <option value="Coordinador Juridica">Coordinador Juridica</option>
                            <option value="Gerente Comercial">Gerente Comercial</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="cuenta" class="form-label">Cuenta:</label>
                        <input type="text" id="cuenta" name="cuenta" class="form-control border-dark" required />
                    </div>
                    <div class="col-md-2">
                        <label for="region" class="form-label">Región:</label>
                        <select id="region" name="region" class="form-select border-dark" required>
                            <option value=""></option>
                            <option value="Centro">Centro</option>
                            <option value="Norte">Norte</option>
                            <option value="Sur">Sur</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="ubicacion" class="form-label">Ubicación:</label>
                        <select id="ubicacion" name="ubicacion" class="form-select border-dark" required>
                            <option value=""></option>
                            <option value="Bogotá">Bogotá</option>
                            <option value="Cartagena">Cartagena</option>
                            <option value="Ibague">Ibague</option>
                            <option value="Neiva">Neiva</option>
                            <option value="Puente Nacional">Puente Nacional</option>
                            <option value="Riohacha">Riohacha</option>
                            <option value="Santa Marta">Santa Marta</option>
                            <option value="Sogamoso">Sogamoso</option>
                            <option value="Tunja">Tunja</option>
                            <option value="Uribia">Uribia</option>
                            <option value="Valledupar ">Valledupar </option>
                        </select>
                        <br><br>
                    </div>

                    <hr>
                    <!--Aca empieza la parte de los datos del equipo-->
                    <h2>
                        Equipo
                    </h2>

                    <div class="col-md-2">
                        <label for="codigo" class="form-label">Codigo:</label>
                        <input type="text" id="codigo" name="codigo" class="form-control border-dark" required />
                    </div>

                    <div class="col-md-2">
                        <label for="tipo_computador" class="form-label">Tipo de computador:</label>
                        <select id="tipo_computador" name="tipo_computador" class="form-select text-center border-dark" required>
                            <option value=""></option>
                            <option value="Portatil">Portatil</option>
                            <option value="Mesa">Mesa</option>
                            <option value="Todo_en_uno">Todo en uno</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="marca" class="form-label">Marca:</label>
                        <select id="marca" name="marca" class="form-select text-center border-dark" required>
                            <option value=""></option>
                            <option value="Asus">Asus</option>
                            <option value="Lenovo">Lenovo</option>
                            <option value="Dell">Dell</option>
                            <option value="Hp">Hp</option>
                            <option value="LENOVO">LENOVO</option>
                            <option value="Asus">Asus</option>
                            <option value="Huawei">Huawei</option>
                            <option value="Acer">Acer</option>
                            <option value="Toshiba">Toshiba</option>
                            <option value="Apple">Apple</option>
                            <option value="Alienware">Alienware</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" id="modelo" name="modelo" class="form-control text-center border-dark" required />
                    </div>

                    <div class="col-md-2">
                        <label for="numero_serie" class="form-label">Numero de serie:</label>
                        <input type="text" id="numero_serie" name="numero_serie" class="form-control text-center border-dark" required />
                    </div>

                    <div class="col-md-4">
                        <label for="id_producto" class="form-label">Id producto:</label>
                        <input type="text" id="id_producto" name="id_producto" class="form-control text-center border-dark" required />
                    </div>

                    <div class="col-md-6">
                        <label for="tipo_sistema" class="form-label">Tipo de sistema:</label>
                        <select id="tipo_sistema" name="tipo_sistema" class="form-select text-center border-dark" required>
                            <option value=""></option>
                            <option value="Windows10 home">Windows 10 home</option>
                            <option value="Windows10 home single">Windows 10 home single</option>
                            <option value="Windows10 home single language">Windows 10 home single language</option>
                            <option value="Windows10 pro">Windows 10 pro</option>
                            <option value="windows11 home">windows 11 home</option>
                            <option value="windows11 home single">windows 11 home single</option>
                            <option value="windows11 home single language">windows 11 home single language</option>
                            <option value="windows11 pro">windows 11 pro</option>
                        </select>
                    </div>

                    <div class="col-md-9">
                        <label for="procesador" class="form-label">Procesador:</label>
                        <input type="text" id="procesador" name="procesador" class="form-control text-center border-dark" required />
                    </div>

                    <div class="col-md-1">
                        <label for="ram" class="form-label">Ram:</label>
                        <select id="ram" name="ram" class="form-select border-dark" required>
                            <option value=""></option>
                            <option value="8Gb">8Gb</option>
                            <option value="12Gb">12Gb</option>
                            <option value="16Gb">16Gb</option>
                            <option value="32Gb">32Gb</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="disco_duro" class="form-label">Disco duro:</label>
                        <select id="disco_duro" name="disco_duro" class="form-select text-center border-dark " required>
                            <option value=""></option>
                            <option value="128Gb">128 Gb</option>
                            <option value="250Gb">250 Gb</option>
                            <option value="500Gb">500 Gb</option>
                            <option value="1TB">1 TB</option>
                            <option value="1Tb+250Gb">1 TB + 250Gb</option>
                            <option value="1Tb+500Gb">1 TB + 500Gb</option>
                        </select>
                    </div>

                    <div class="col-md-5">
                        <label for="gpu" class="form-label">Gpu:</label>
                        <input type="text" id="gpu" name="gpu" class="form-control text-center border-dark" required />
                    </div>



                    <div class="col-md-2">
                        <label for="display" class="form-label">Display:</label>
                        <select id="display" name="display" class="form-select text-center border-dark" required>
                            <option value=""></option>
                            <option value="16  FHD">16 FHD</option>
                            <option value="14  HD">14 HD</option>
                            <option value="15,6 FHD">15,6 FHD</option>
                            <option value="14  IPS">14 IPS</option>
                            <option value="14  HD Display">14 HD</option>
                            <option value="17 ,3  FHD">17 ,3 FHD</option>
                            <option value="15,6  HD">15,6 HD</option>
                            <option value="14  FHD">14 FHD</option>
                            <option value="14  HD">14 HD</option>
                            <option value="15,6 LCD">15,6 LCD</option>
                            <option value="14 FHD">14 FHD</option>
                            <option value="15  Full HD">15 Full HD</option>
                            <option value="15,6  FHD">15,6 FHD</option>
                            <option value="14  FHD">14 FHD</option>
                            <option value="15,6  HD">15,6 HD</option>
                        </select>
                        <br><br>
                    </div>
                    <hr>
                    <h2>
                        Historial
                    </h2>

                    <div class="col-md-12">
                        <label for="historial_asignacion" class="form-label">Historial asignacion:</label>
                        <input type="text" id="historial_asignacion" name="historial_asignacion" class="form-control border-dark" required />
                    </div>

                    <div class="col-md-12">
                        <label for="procesos_ejecutar" class="form-label">Procesos a ejecutar:</label>
                        <input type="text" id="procesos_ejecutar" name="procesos_ejecutar" class="form-control border-dark" required />
                    </div>

                    <div class="col-md-2">
                        <label for="observaciones" class="form-label border-dark">Observaciones:</label>
                        <textarea name="observaciones" id="" cols="174" rows="4"></textarea>
                    </div>
                    <br><br>
                </div>

                <input type="submit" name="submit" value="Enviar" class="btn btn-lg btn-success mt-2" />

                <hr>
            </form>
        </div>
    </div>
    <br>

    <!--Parte donde se van a mostrar los registrados
    con sus codigos respectivos para poder conectarse
    -->

    <?php

    // Se establecen los datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eiatec";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para obtener los datos de los trabajadores
    $sql = "SELECT * FROM trabajadores";
    $resultado = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        // Crear un array para almacenar los datos de los trabajadores
        $trabajadores = array();

        // Iterar sobre los resultados y almacenarlos en el array de trabajadores
        while ($fila = $resultado->fetch_assoc()) {
            $trabajadores[] = $fila;
        }
    } else {
        // Si no se encontraron resultados, asignar un array vacío a $trabajadores
        $trabajadores = array();
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>

    <!--
        Aquí va el código HTML para mostrar el dato de la BDD solicitado
    -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post" class="form-inline">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text titulo_busqueda">Ingresa la Cedula o el ID para buscar:</span>
                        </div>
                        <input type="text" id="search" name="search" class="form-control sitio_escritura_busqueda text-center">
                        <div class="input-group-append">
                            <button type="submit" name="submit" class="btn btn-success">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include 'funciones.php';

    // Se establecen los datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eiatec";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Variables para almacenar los datos de búsqueda
    $resultados = array();
    $mensaje = "";

    // Parte de la búsqueda de trabajadores
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir el valor de búsqueda enviado desde el formulario
        $search = escapar($_POST['search']);

        // Consulta SQL para buscar trabajadores por ID o cédula
        $sql = "SELECT * FROM trabajadores WHERE ID = '$search' OR Cedula = '$search'";

        // Ejecutar la consulta
        $resultado = $conn->query($sql);

        // Verificar si se encontraron resultados
        if ($resultado->num_rows > 0) {
            // Almacenar los resultados en un array
            while ($fila = $resultado->fetch_assoc()) {
                $resultados[] = $fila;
            }
        } else {
            // Asignar un mensaje si no se encontraron resultados
            $mensaje = "No se encontraron resultados para el #ID o cédula: $search";
        }
    }
    ?>
    <?php if (!empty($resultados)) : ?>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-dark">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Cédula</th>
                                <th>Cuenta</th>
                                <th>Ubicación</th>
                                <th>Area</th>
                                <th>Cargo</th>
                                <th>Codigo</th>
                                <th>Región</th>
                                <th>Oficina</th>
                                <th>Tipo de computador</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Numero de serie</th>
                                <th>Id producto</th>
                                <th>Procesador</th>
                                <th>Ram</th>
                                <th>Disco duro</th>
                                <th>Gpu</th>
                                <th>Tipo de sistema</th>
                                <th>Display</th>
                                <th>Historial asignacion</th>
                                <th>Procesos a ejecutar</th>
                                <th>Observaciones</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultados as $resultado) : ?>
                                <tr>
                                    <td><?php echo escapar($resultado["ID"]); ?></td>
                                    <td><?php echo escapar($resultado["Nombre"]); ?></td>
                                    <td><?php echo escapar($resultado["Cedula"]); ?></td>
                                    <td><?php echo escapar($resultado["Cuenta"]); ?></td>
                                    <td><?php echo escapar($resultado["Ubicacion"]); ?></td>
                                    <td><?php echo escapar($resultado["Area"]); ?></td>
                                    <td><?php echo escapar($resultado["Cargo"]); ?></td>
                                    <td><?php echo escapar($resultado["Codigo"]); ?></td>
                                    <td><?php echo escapar($resultado["Region"]); ?></td>
                                    <td><?php echo escapar($resultado["Oficina"]); ?></td>
                                    <td><?php echo escapar($resultado["Tipo de computador"]); ?></td>
                                    <td><?php echo escapar($resultado["Marca"]); ?></td>
                                    <td><?php echo escapar($resultado["Modelo"]); ?></td>
                                    <td><?php echo escapar($resultado["Numero de serie"]); ?></td>
                                    <td><?php echo escapar($resultado["Id producto"]); ?></td>
                                    <td><?php echo escapar($resultado["Procesador"]); ?></td>
                                    <td><?php echo escapar($resultado["Ram"]); ?></td>
                                    <td><?php echo escapar($resultado["Disco duro"]); ?></td>
                                    <td><?php echo escapar($resultado["Gpu"]); ?></td>
                                    <td><?php echo escapar($resultado["Tipo de sistema"]); ?></td>
                                    <td><?php echo escapar($resultado["Display"]); ?></td>
                                    <td><?php echo escapar($resultado["Historial asignacion"]); ?></td>
                                    <td><?php echo escapar($resultado["Procesos a ejecutar"]); ?></td>
                                    <td><?php echo escapar($resultado["Observaciones"]); ?></td>
                                    <td>
                                        <a href="editar.php?id=<?php echo urlencode($resultado["ID"]); ?>">
                                            <i class="fa-solid fa-pen-nib fa-beat"></i> Editar
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <?php else : ?>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo $mensaje; ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php include "footer.php"; ?>

    <?php
    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>

    <!--
    Tabla que va a mostrar la tabla con todos los datos de la base de datos
    -->

    <?php
    include 'funciones.php';

    // Variables para almacenar los resultados de la búsqueda
    $resultados = array();
    $mensaje = "";

    // Se establecen los datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eiatec";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para obtener todos los trabajadores
    $sql = "SELECT * FROM trabajadores";

    // Ejecutar la consulta
    $resultado = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        // Almacenar los resultados en un array
        while ($fila = $resultado->fetch_assoc()) {
            $resultados[] = $fila;
        }
    } else {
        // Asignar un mensaje si no se encontraron resultados
        $mensaje = "No se encontraron resultados.";
    }
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-3 text-dark">Lista de trabajadores</h2>
                <table class="table table-light">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Cédula</th>
                            <th>Cuenta</th>
                            <th>Ubicación</th>
                            <th>Area</th>
                            <th>Cargo</th>
                            <th>Codigo</th>
                            <th>Región</th>
                            <th>Oficina</th>
                            <th>Tipo de computador</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Número de serie</th>
                            <th>Id producto</th>
                            <th>Procesador</th>
                            <th>Ram</th>
                            <th>Disco duro</th>
                            <th>Gpu</th>
                            <th>Tipo de sistema</th>
                            <th>Display</th>
                            <th>Historial asignación</th>
                            <th>Procesos a ejecutar</th>
                            <th>Observaciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultados as $resultado) : ?>
                            <tr>
                                <td><?php echo escapar($resultado["ID"]); ?></td>
                                <td><?php echo escapar($resultado["Nombre"]); ?></td>
                                <td><?php echo escapar($resultado["Cedula"]); ?></td>
                                <td><?php echo escapar($resultado["Cuenta"]); ?></td>
                                <td><?php echo escapar($resultado["Ubicacion"]); ?></td>
                                <td><?php echo escapar($resultado["Area"]); ?></td>
                                <td><?php echo escapar($resultado["Cargo"]); ?></td>
                                <td><?php echo escapar($resultado["Codigo"]); ?></td>
                                <td><?php echo escapar($resultado["Region"]); ?></td>
                                <td><?php echo escapar($resultado["Oficina"]); ?></td>
                                <td><?php echo escapar($resultado["Tipo de computador"]); ?></td>
                                <td><?php echo escapar($resultado["Marca"]); ?></td>
                                <td><?php echo escapar($resultado["Modelo"]); ?></td>
                                <td><?php echo escapar($resultado["Numero de serie"]); ?></td>
                                <td><?php echo escapar($resultado["Id producto"]); ?></td>
                                <td><?php echo escapar($resultado["Procesador"]); ?></td>
                                <td><?php echo escapar($resultado["Ram"]); ?></td>
                                <td><?php echo escapar($resultado["Disco duro"]); ?></td>
                                <td><?php echo escapar($resultado["Gpu"]); ?></td>
                                <td><?php echo escapar($resultado["Tipo de sistema"]); ?></td>
                                <td><?php echo escapar($resultado["Display"]); ?></td>
                                <td><?php echo escapar($resultado["Historial asignacion"]); ?></td>
                                <td><?php echo escapar($resultado["Procesos a ejecutar"]); ?></td>
                                <td><?php echo escapar($resultado["Observaciones"]); ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo urlencode($resultado["ID"]); ?>">
                                        <i class="fa-solid fa-pen-nib fa-beat"></i> Editar
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if (empty($resultados)) : ?>
                    <p><?php echo $mensaje; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>


</body>

</html>