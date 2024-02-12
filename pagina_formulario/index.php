<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2460b47c04.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/style.css" />

    <title>CRUD EIATEC</title>
    <style>

    </style>
</head>

<body>
    <h1>Eiatec</h1>
    <h2 class="titulo_formulario_de_envio">Formulario de envio:</h2>
    <div class="tabla1">
        <form action="./conexion.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="sitio_escritura" />
                    </td>
                    <td>
                        <label for="oficina">Oficina:</label>
                        <select id="oficina" name="oficina" class="sitio_escritura" required>
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
                    </td>
                    <td>
                        <label for="area">Area:</label>
                        <select id="area" name="area" class="sitio_escritura" required>
                            <option value=""></option>
                            <option value="Tecnica">Tecnica</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Administracion">Administracion</option>
                            <option value="Geb_Centro">Geb_Centro</option>
                            <option value="Geb_Norte">Geb_Norte</option>
                            <option value="Gerencia">Gerencia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cargo">Cargo:</label>
                        <select id="cargo" name="cargo" class="sitio_escritura" required>
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
                    </td>
                    <td>
                        <label for="cedula">Cedula:</label>
                        <input type="text" id="cedula" name="cedula" class="sitio_escritura" required />
                    </td>
                    <td>
                        <label for="dominio">Dominio:</label>
                        <input type="text" id="dominio" name="dominio" class="sitio_escritura" required />
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td>
                        <label for="cuenta">Cuenta:</label>
                        <input type="text" id="cuenta" name="cuenta" class="sitio_escritura" required />
                    </td>
                    <td>
                        <label for="region">Región:</label>
                        <select id="region" name="region" class="sitio_escritura" required>
                            <option value=""></option>
                            <option value="Centro">Centro</option>
                            <option value="Norte">Norte</option>
                            <option value="Sur">Sur</option>
                        </select>
                    </td>
                    <td>
                        <label for="ubicacion">Ubicación:</label>
                        <select id="ubicacion" name="ubicacion" class="sitio_escritura" required>
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
                    </td>
                </tr>
            </table><br>

            <input type="submit" value="Enviar" class="boton" />

        </form><br><br>
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

    <!-- Aquí va el código HTML para mostrar la tabla de trabajadores -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" class="form-inline">
                    <div class="form-group mr-3">
                        <label for="search" class="titulo_busqueda">Ingresa la cedula o el ID para buscar:</label>
                    </div>
                    <br>
                    <table>
                        <tr>
                            <td>
                                <input type="text" id="search" name="search" class="sitio_escritura_busqueda">
                            </td>
                            <td>
                                <button type="submit" name="submit" class="fa-solid fa-magnifying-glass" id="boton_lupa"></button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <br>
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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir el valor de búsqueda enviado desde el formulario
        $search = escapar($_POST['search']);

        // Consulta SQL para buscar trabajadores por ID o cédula
        $sql = "SELECT * FROM trabajadores WHERE ID = '$search' OR Cedula = '$search'";

        // Ejecutar la consulta
        $resultado = $conn->query($sql);

        // Verificar si se encontraron resultados
        if ($resultado->num_rows > 0) {
            // Mostrar los resultados en una tabla
    ?>
            <div>
                <div>
                    <div>
                        <h2>Resultados de la búsqueda</h2>
                        <table class="tabla_de_resultados">
                            <thead>
                                <tr class="campos_de_resultados">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Cédula</th>
                                    <th>Cuenta</th>
                                    <th>Ubicación</th>
                                    <th>Area</th>
                                    <th>Cargo</th>
                                    <th>Dominio</th>
                                    <th>Región</th>
                                    <th>Oficina</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($fila = $resultado->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo escapar($fila["ID"]); ?></td>
                                        <td><?php echo escapar($fila["Nombre"]); ?></td>
                                        <td><?php echo escapar($fila["Cedula"]); ?></td>
                                        <td><?php echo escapar($fila["Cuenta"]); ?></td>
                                        <td><?php echo escapar($fila["Ubicacion"]); ?></td>
                                        <td><?php echo escapar($fila["Area"]); ?></td>
                                        <td><?php echo escapar($fila["Cargo"]); ?></td>
                                        <td><?php echo escapar($fila["Dominio"]); ?></td>
                                        <td><?php echo escapar($fila["Region"]); ?></td>
                                        <td><?php echo escapar($fila["Oficina"]); ?></td>
                                        <td>
                                            <!--
                                                OPCION DESCARTADA
                                            <a href="borrar.php?id=<?php echo urlencode($fila["ID"]); ?>">🗑️Borrar</a>
                                            -->
                                            <a href="editar.php?id=<?php echo urlencode($fila["ID"]); ?>">
                                                <i class="fa-solid fa-pen-nib fa-beat"></i> Editar
                                            </a>


                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    <?php
        } else {
            // Mostrar un mensaje si no se encontraron resultados
            echo "<p>No se encontraron resultados para el #ID o cédula: $search</p>";
        }
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>

    <br><br>
    <link rel="stylesheet" href="./">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./scripts/scripts_validaciones.js"></script>
    <?php include "footer.php"; ?>