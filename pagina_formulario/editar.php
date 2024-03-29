<?php include "header.php"; ?>

<?php
include 'funciones.php'; // Incluye las funciones necesarias

$resultado = [
    'error' => false,
    'mensaje' => ''
];

if (!isset($_GET['id'])) {
    $resultado['error'] = true;
    $resultado['mensaje'] = 'El trabajador no existe';
}

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eiatec";

    $dsn = 'mysql:host=' . $servername . ';dbname=' . $database;
    $conexion = new PDO($dsn, $username, $password);

    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        // Obtener valores de los campos del formulario
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $cuenta = $_POST['cuenta'];
        $ubicacion = $_POST['ubicacion'];
        $area = $_POST['area'];
        $cargo = $_POST['cargo'];
        $dominio = $_POST['codigo'];
        $region = $_POST['region'];
        $oficina = $_POST['oficina'];
        $ram = $_POST['ram'];
        $disco_duro = $_POST['disco_duro'];
        $tipo_sistema = $_POST['tipo_sistema'];
        $historial_asignacion = $_POST['historial_asignacion'];
        $procesos_ejecutar = $_POST['procesos_ejecutar'];
        $observaciones = $_POST['observaciones'];

        $consultaSQL = "UPDATE trabajadores SET
            Nombre = :nombre,
            Cedula = :cedula,
            Cuenta = :cuenta,
            Ubicacion = :ubicacion,
            Area = :area,
            Cargo = :cargo,
            Codigo = :codigo,
            Region = :region,
            Oficina = :oficina,
            Ram = :ram,
            `Disco duro` = :disco_duro,
            `Tipo de sistema` = :tipo_sistema,
            `Historial asignacion` = :historial_asignacion,
            `Procesos a ejecutar` = :procesos_ejecutar,
            Observaciones = :observaciones
            WHERE ID = :id";

        $stmt = $conexion->prepare($consultaSQL);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':cedula', $cedula);
        $stmt->bindParam(':cuenta', $cuenta);
        $stmt->bindParam(':ubicacion', $ubicacion);
        $stmt->bindParam(':area', $area);
        $stmt->bindParam(':cargo', $cargo);
        $stmt->bindParam(':codigo', $codigo);
        $stmt->bindParam(':region', $region);
        $stmt->bindParam(':oficina', $oficina);
        $stmt->bindParam(':ram', $ram);
        $stmt->bindParam(':disco_duro', $disco_duro);
        $stmt->bindParam(':tipo_sistema', $tipo_sistema);
        $stmt->bindParam(':historial_asignacion', $historial_asignacion);
        $stmt->bindParam(':procesos_ejecutar', $procesos_ejecutar);
        $stmt->bindParam(':observaciones', $observaciones);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        // Redireccionar a la página inicial después de la actualización
        header("Location: index.php");
        exit(); // Es importante incluir exit() después de la redirección para asegurarse de que el script se detenga y la redirección se realice correctamente
    }

    $id = $_GET['id'];
    $consultaSQL = "SELECT * FROM trabajadores WHERE ID =" . $id;

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute();

    $trabajador = $sentencia->fetch(PDO::FETCH_ASSOC);

    if (!$trabajador) {
        $resultado['error'] = true;
        $resultado['mensaje'] = 'No se ha encontrado el trabajador';
    }
} catch (PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Trabajador</title>
</head>

<body>
    <?php if ($resultado['error']) : ?>
        <p><?php echo $resultado['mensaje']; ?></p>
    <?php else : ?>
        <div>
            <div class="container">
                <form method="POST">
                    <table>
                        <h2>Editar usuario:</h2>
                        <div class="row">
                            <div class="col-md-5">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" id="nombre" class="form-control text-center border-dark bg-secondary text-white" name="nombre" value="<?php echo $trabajador['Nombre']; ?>">

                            </div>
                            <div class="col-md-2">
                                <label for="cedula" class="form-label">Cédula:</label>
                                <input type="text" id="cedula" class="form-control text-center border-dark bg-secondary text-white" name="cedula" value="<?php echo $trabajador['Cedula']; ?>">
                            </div>

                            <div class="col-md-3">
                                <label for="cuenta" class="form-label">Cuenta:</label>
                                <input type="text" id="cuenta" class="form-control text-center border-dark bg-secondary text-white" name="cuenta" value="<?php echo $trabajador['Cuenta']; ?>">

                            </div>

                            <div class="col-md-2">
                                <label for="ubicacion" class="form-label">Ubicación:</label>
                                <select id="ubicacion" name="ubicacion" class="form-select text-center border-dark bg-secondary text-white">
                                    <option value=""></option>
                                    <option value="Bogotá" <?php if ($trabajador['Ubicacion'] == 'Bogotá') echo 'selected'; ?>>Bogotá</option>
                                    <option value="Cartagena" <?php if ($trabajador['Ubicacion'] == 'Cartagena') echo 'selected'; ?>>Cartagena</option>
                                    <option value="Ibague" <?php if ($trabajador['Ubicacion'] == 'Ibague') echo 'selected'; ?>>Ibague</option>
                                    <option value="Neiva" <?php if ($trabajador['Ubicacion'] == 'Neiva') echo 'selected'; ?>>Neiva</option>
                                    <option value="Puente Nacional" <?php if ($trabajador['Ubicacion'] == 'Puente Nacional') echo 'selected'; ?>>Puente Nacional</option>
                                    <option value="Riohacha" <?php if ($trabajador['Ubicacion'] == 'Riohacha') echo 'selected'; ?>>Riohacha</option>
                                    <option value="Santa Marta" <?php if ($trabajador['Ubicacion'] == 'Santa Marta') echo 'selected'; ?>>Santa Marta</option>
                                    <option value="Sogamoso" <?php if ($trabajador['Ubicacion'] == 'Sogamoso') echo 'selected'; ?>>Sogamoso</option>
                                    <option value="Tunja" <?php if ($trabajador['Ubicacion'] == 'Tunja') echo 'selected'; ?>>Tunja</option>
                                    <option value="Uribia" <?php if ($trabajador['Ubicacion'] == 'Uribia') echo 'selected'; ?>>Uribia</option>
                                    <option value="Valledupar" <?php if ($trabajador['Ubicacion'] == 'Valledupar') echo 'selected'; ?>>Valledupar</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="area" class="form-label">Área:</label>
                                <select id="area" name="area" class="form-select text-center border-dark bg-secondary text-white">
                                    <option value=""></option>
                                    <option value="Tecnica" <?php if ($trabajador['Area'] == 'Tecnica') echo 'selected'; ?>>Tecnica</option>
                                    <option value="Contabilidad" <?php if ($trabajador['Area'] == 'Contabilidad') echo 'selected'; ?>>Contabilidad</option>
                                    <option value="Administracion" <?php if ($trabajador['Area'] == 'Administracion') echo 'selected'; ?>>Administracion</option>
                                    <option value="Geb_Centro" <?php if ($trabajador['Area'] == 'Geb_Centro') echo 'selected'; ?>>Geb_Centro</option>
                                    <option value="Geb_Norte" <?php if ($trabajador['Area'] == 'Geb_Norte') echo 'selected'; ?>>Geb_Norte</option>
                                    <option value="Gerencia" <?php if ($trabajador['Area'] == 'Gerencia') echo 'selected'; ?>>Gerencia</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="cargo" class="form-label">Cargo:</label>
                                <select id="cargo" name="cargo" class="form-select text-center border-dark bg-secondary text-white">
                                    <option value=""></option>
                                    <option value="Gerente" <?php if ($trabajador['Cargo'] == 'Gerente') echo 'selected'; ?>>Gerente</option>
                                    <option value="Profesional Forestal" <?php if ($trabajador['Cargo'] == 'Profesional Forestal') echo 'selected'; ?>>Profesional Forestal</option>
                                    <option value="Profesional Ambiental" <?php if ($trabajador['Cargo'] == 'Profesional Ambiental') echo 'selected'; ?>>Profesional Ambiental</option>
                                    <option value="Gestor Predial" <?php if ($trabajador['Cargo'] == 'Gestor Predial') echo 'selected'; ?>>Gestor Predial</option>
                                    <option value="Coordinador de Proyectos" <?php if ($trabajador['Cargo'] == 'Coordinador de Proyectos') echo 'selected'; ?>>Coordinador de Proyectos</option>
                                    <option value="Auxiliar HSEQ" <?php if ($trabajador['Cargo'] == 'Auxiliar HSEQ') echo 'selected'; ?>>Auxiliar HSEQ</option>
                                    <option value="Profesional Civil" <?php if ($trabajador['Cargo'] == 'Profesional Civil') echo 'selected'; ?>>Profesional Civil</option>
                                    <option value="Profesional Social" <?php if ($trabajador['Cargo'] == 'Profesional Social') echo 'selected'; ?>>Profesional Social</option>
                                    <option value="Gerente Tecnico" <?php if ($trabajador['Cargo'] == 'Gerente Tecnico') echo 'selected'; ?>>Gerente Tecnico</option>
                                    <option value="Coordinador De Arqueología" <?php if ($trabajador['Cargo'] == 'Coordinador De Arqueología') echo 'selected'; ?>>Coordinador De Arqueología</option>
                                    <option value="Profesional Biologo" <?php if ($trabajador['Cargo'] == 'Profesional Biologo') echo 'selected'; ?>>Profesional Biologo</option>
                                    <option value="Tecnologo Social" <?php if ($trabajador['Cargo'] == 'Tecnologo Social') echo 'selected'; ?>>Tecnologo Social</option>
                                    <option value="Auxiliar de Servicios Generales" <?php if ($trabajador['Cargo'] == 'Auxiliar de Servicios Generales') echo 'selected'; ?>>Auxiliar de Servicios Generales</option>
                                    <option value="Coordinador Sig" <?php if ($trabajador['Cargo'] == 'Coordinador Sig') echo 'selected'; ?>>Coordinador Sig</option>
                                    <option value="Gerente Administrativo" <?php if ($trabajador['Cargo'] == 'Gerente Administrativo') echo 'selected'; ?>>Gerente Administrativo</option>
                                    <option value="Coordinador Area Sig" <?php if ($trabajador['Cargo'] == 'Coordinador Area Sig') echo 'selected'; ?>>Coordinador Area Sig</option>
                                    <option value="Contador Junior" <?php if ($trabajador['Cargo'] == 'Contador Junior') echo 'selected'; ?>>Contador Junior</option>
                                    <option value="Gestor Social" <?php if ($trabajador['Cargo'] == 'Gestor Social') echo 'selected'; ?>>Gestor Social</option>
                                    <option value="Logistico/Conduccion" <?php if ($trabajador['Cargo'] == 'Logistico/Conduccion') echo 'selected'; ?>>Logistico/Conduccion</option>
                                    <option value="Profesional Geologo" <?php if ($trabajador['Cargo'] == 'Profesional Geologo') echo 'selected'; ?>>Profesional Geologo</option>
                                    <option value="Profesional Biotico" <?php if ($trabajador['Cargo'] == 'Profesional Biotico') echo 'selected'; ?>>Profesional Biotico</option>
                                    <option value="Profesional Especializado" <?php if ($trabajador['Cargo'] == 'Profesional Especializado') echo 'selected'; ?>>Profesional Especializado</option>
                                    <option value="Asistente Administrativo" <?php if ($trabajador['Cargo'] == 'Asistente Administrativo') echo 'selected'; ?>>Asistente Administrativo</option>
                                    <option value="Profesional Abiotico" <?php if ($trabajador['Cargo'] == 'Profesional Abiotico') echo 'selected'; ?>>Profesional Abiotico</option>
                                    <option value="Asistente De Facturacion" <?php if ($trabajador['Cargo'] == 'Asistente De Facturacion') echo 'selected'; ?>>Asistente De Facturacion</option>
                                    <option value="Estructurador de Proyectos" <?php if ($trabajador['Cargo'] == 'Estructurador de Proyectos') echo 'selected'; ?>>Estructurador de Proyectos</option>
                                    <option value="Gerente General" <?php if ($trabajador['Cargo'] == 'Gerente General') echo 'selected'; ?>>Gerente General</option>
                                    <option value="Logistico" <?php if ($trabajador['Cargo'] == 'Logistico') echo 'selected'; ?>>Logistico</option>
                                    <option value="Auxiliar Tecnico/Alturas" <?php if ($trabajador['Cargo'] == 'Auxiliar Tecnico/Alturas') echo 'selected'; ?>>Auxiliar Tecnico/Alturas</option>
                                    <option value="Profesional Arqueologo" <?php if ($trabajador['Cargo'] == 'Profesional Arqueologo') echo 'selected'; ?>>Profesional Arqueologo</option>
                                    <option value="Tecnico Biologo" <?php if ($trabajador['Cargo'] == 'Tecnico Biologo') echo 'selected'; ?>>Tecnico Biologo</option>
                                    <option value="Profesional Sig / Profesional De Aseguramiento De Información - Sig" <?php if ($trabajador['Cargo'] == 'Profesional Sig / Profesional De Aseguramiento De Información - Sig') echo 'selected'; ?>>Profesional Sig / Profesional De Aseguramiento De Información - Sig</option>
                                    <option value="Coordinador Administrativo" <?php if ($trabajador['Cargo'] == 'Coordinador Administrativo') echo 'selected'; ?>>Coordinador Administrativo</option>
                                    <option value="Tecnico Juridico" <?php if ($trabajador['Cargo'] == 'Tecnico Juridico') echo 'selected'; ?>>Tecnico Juridico</option>
                                    <option value="Tecnologo Geologo" <?php if ($trabajador['Cargo'] == 'Tecnologo Geologo') echo 'selected'; ?>>Tecnologo Geologo</option>
                                    <option value="Auxiliar Recursos Humanos" <?php if ($trabajador['Cargo'] == 'Auxiliar Recursos Humanos') echo 'selected'; ?>>Auxiliar Recursos Humanos</option>
                                    <option value="Tecnico De Sistemas" <?php if ($trabajador['Cargo'] == 'Tecnico De Sistemas') echo 'selected'; ?>>Tecnico De Sistemas</option>
                                    <option value="Subgerente" <?php if ($trabajador['Cargo'] == 'Subgerente') echo 'selected'; ?>>Subgerente</option>
                                    <option value="Coordinador Social" <?php if ($trabajador['Cargo'] == 'Coordinador Social') echo 'selected'; ?>>Coordinador Social</option>
                                    <option value="Coordinador De Compras Y Mantenimiento" <?php if ($trabajador['Cargo'] == 'Coordinador De Compras Y Mantenimiento') echo 'selected'; ?>>Coordinador De Compras Y Mantenimiento</option>
                                    <option value="Coordinador HSEQ" <?php if ($trabajador['Cargo'] == 'Coordinador HSEQ') echo 'selected'; ?>>Coordinador HSEQ</option>
                                    <option value="Coordinador T.I.C." <?php if ($trabajador['Cargo'] == 'Coordinador T.I.C.') echo 'selected'; ?>>Coordinador T.I.C.</option>
                                    <option value="Profesional Biologo Mastozoologo" <?php if ($trabajador['Cargo'] == 'Profesional Biologo Mastozoologo') echo 'selected'; ?>>Profesional Biologo Mastozoologo</option>
                                    <option value="Gestor Documental - Tecnico" <?php if ($trabajador['Cargo'] == 'Gestor Documental - Tecnico') echo 'selected'; ?>>Gestor Documental - Tecnico</option>
                                    <option value="Contador" <?php if ($trabajador['Cargo'] == 'Contador') echo 'selected'; ?>>Contador</option>
                                    <option value="Auxiliar Contable" <?php if ($trabajador['Cargo'] == 'Auxiliar Contable') echo 'selected'; ?>>Auxiliar Contable</option>
                                    <option value="Coordinador Juridica" <?php if ($trabajador['Cargo'] == 'Coordinador Juridica') echo 'selected'; ?>>Coordinador Juridica</option>
                                    <option value="Gerente Comercial" <?php if ($trabajador['Cargo'] == 'Gerente Comercial') echo 'selected'; ?>>Gerente Comercial</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="region" class="form-label">Región:</label>
                                <select id="region" name="region" class="form-select text-center border-dark bg-secondary text-white">
                                    <option value=""></option>
                                    <option value="Centro" <?php if ($trabajador['Region'] == 'Centro') echo 'selected'; ?>>Centro</option>
                                    <option value="Norte" <?php if ($trabajador['Region'] == 'Norte') echo 'selected'; ?>>Norte</option>
                                    <option value="Sur" <?php if ($trabajador['Region'] == 'Sur') echo 'selected'; ?>>Sur</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="oficina" class="form-label">Oficina:</label>
                                <select id="oficina" name="oficina" class="form-select text-center border-dark bg-secondary text-white">
                                    <option value=""></option>
                                    <option value="N_Rio" <?php if ($trabajador['Oficina'] == 'N_Rio') echo 'selected'; ?>>N_Rio</option>
                                    <option value="S_Nei" <?php if ($trabajador['Oficina'] == 'S_Nei') echo 'selected'; ?>>S_Nei</option>
                                    <option value="C_Téc" <?php if ($trabajador['Oficina'] == 'C_Téc') echo 'selected'; ?>>C_Téc</option>
                                    <option value="C_Adm" <?php if ($trabajador['Oficina'] == 'C_Adm') echo 'selected'; ?>>C_Adm</option>
                                    <option value="C_Hof" <?php if ($trabajador['Oficina'] == 'C_Hof') echo 'selected'; ?>>C_Hof</option>
                                    <option value="N_Hof" <?php if ($trabajador['Oficina'] == 'N_Hof') echo 'selected'; ?>>N_Hof</option>
                                    <option value="S_Hof" <?php if ($trabajador['Oficina'] == 'S_Hof') echo 'selected'; ?>>S_Hof</option>
                                    <option value="N_Uri" <?php if ($trabajador['Oficina'] == 'N_Uri') echo 'selected'; ?>>N_Uri</option>
                                </select>
                            </div>

                            <!--Datos del equipo-->
                            <h2>Editar equipo:</h2>

                            <div class="col-md-4">
                                <label for="codigo" class="form-label">Codigo:</label>
                                <input type="text" id="codigo" class="form-control text-center border-dark bg-secondary text-white" name="codigo" value="<?php echo $trabajador['Codigo']; ?>">
                            </div>

                            <div class="col-md-2">
                                <label for="ram" class="form-label">RAM:</label>
                                <select id="ram" name="ram" class="form-select text-center border-dark bg-secondary text-white" required>
                                    <option value="<?php echo $trabajador['Ram']; ?>"><?php echo $trabajador['Ram']; ?></option>
                                    <option value="8Gb">8 Gb</option>
                                    <option value="12Gb">12 Gb</option>
                                    <option value="16Gb">16 Gb</option>
                                    <option value="32Gb">32 Gb</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="disco_duro" class="form-label">Disco Duro:</label>
                                <select id="disco_duro" name="disco_duro" class="form-select text-center border-dark bg-secondary text-white" required>
                                    <option value="<?php echo $trabajador['Disco duro']; ?>"><?php echo $trabajador['Disco duro']; ?></option>
                                    <option value="128Gb">128 Gb</option>
                                    <option value="250Gb">250 Gb</option>
                                    <option value="500Gb">500 Gb</option>
                                    <option value="1TB">1 TB</option>
                                    <option value="1Tb+250Gb">1TB + 250Gb</option>
                                    <option value="1Tb+500Gb">1TB + 500Gb</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="tipo_sistema" class="form-label">Tipo de Sistema:</label>
                                <select id="tipo_sistema" name="tipo_sistema" class="form-select text-center border-dark bg-secondary text-white" required>
                                    <option value="<?php echo $trabajador['Tipo de sistema']; ?>"><?php echo $trabajador['Tipo de sistema']; ?></option>
                                    <option value="Windows10 home">Windows 10 home</option>
                                    <option value="Windows10 home single">Windows 10 home single</option>
                                    <option value="Windows10 home single language">Windows 10 home single language</option>
                                    <option value="Windows10 pro">Windows 10 pro</option>
                                    <option value="windows11 home">windows 11 home</option>
                                    <option value="windows11 home single">windows 11 home single</option>
                                    <option value="windows11 home single language">windows 11 home single language</option>
                                    <option value="windows11 pro">windows 11 pro</option>
                                </select>
                                <br>
                            </div>
                            <hr>

                            <!--Datos historial-->

                            <h2>Editar historial:</h2>
                            <div class="col-md-12">
                                <label for="historial_asignacion" class="form-label">Historial de Asignación:</label>
                                <input type="text" id="historial_asignacion" class="form-control text-center border-dark bg-secondary text-white" name="historial_asignacion" value="<?php echo $trabajador['Historial asignacion']; ?>">
                            </div>

                            <div class="col-md-12">
                                <label for="procesos_ejecutar" class="form-label">Procesos a Ejecutar:</label>
                                <input type="text" id="procesos_ejecutar" class="form-control text-center border-dark bg-secondary text-white" name="procesos_ejecutar" value="<?php echo $trabajador['Procesos a ejecutar']; ?>">
                            </div>

                            <div class="col-md-12">
                                <label for="observaciones" class="form-label">Observaciones:</label>
                                <textarea name="observaciones" id="observaciones" class="form-control border-dark bg-secondary text-white" rows="4"><?php echo $trabajador['Observaciones']; ?></textarea>
                            </div>



                        </div>


                    </table>

                    <br>
                    <input type="submit" name="submit" class="btn btn-lg btn-success mt-2" value="Actualizar">

                </form>

            </div>

        <?php endif; ?>

        <?php include "footer.php"; ?>