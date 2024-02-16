<?php
// Incluir el archivo de funciones
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
    // Recibir los datos del formulario y aplicar escapar a cada variable
    $nombre = escapar($_POST['nombre']);
    $cedula = escapar($_POST['cedula']);
    $cuenta = escapar($_POST['cuenta']);
    $ubicacion = escapar($_POST['ubicacion']);
    $area = escapar($_POST['area']);
    $cargo = escapar($_POST['cargo']);
    $codigo = escapar($_POST['codigo']); // Cambio de 'dominio' a 'codigo'
    $region = escapar($_POST['region']);
    $oficina = escapar($_POST['oficina']);
    $tipo_computador = escapar($_POST['tipo_computador']);
    $marca = escapar($_POST['marca']);
    $modelo = escapar($_POST['modelo']);
    $numero_serie = escapar($_POST['numero_serie']);
    $id_producto = escapar($_POST['id_producto']);
    $procesador = escapar($_POST['procesador']);
    $ram = escapar($_POST['ram']);
    $disco_duro = escapar($_POST['disco_duro']);
    $gpu = escapar($_POST['gpu']);
    $tipo_sistema = escapar($_POST['tipo_sistema']);
    $display = escapar($_POST['display']);
    $historial_asignacion = escapar($_POST['historial_asignacion']);
    $procesos_ejecutar = escapar($_POST['procesos_ejecutar']);
    $observaciones = escapar($_POST['observaciones']);

    // Consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO trabajadores (Nombre, Cedula, Cuenta, Ubicacion, Area, Cargo, Codigo, Region, Oficina, `Tipo de computador`, Marca, Modelo, `Numero de serie`, `Id producto`, Procesador, Ram, `Disco duro`, Gpu, `Tipo de sistema`, Display, `Historial asignacion`, `Procesos a ejecutar`, Observaciones)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la declaración
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros con los valores del formulario
    $stmt->bind_param('sssssssssssssssssssssss', $nombre, $cedula, $cuenta, $ubicacion, $area, $cargo, $codigo, $region, $oficina, $tipo_computador, $marca, $modelo, $numero_serie, $id_producto, $procesador, $ram, $disco_duro, $gpu, $tipo_sistema, $display, $historial_asignacion, $procesos_ejecutar, $observaciones);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir al mismo lugar desde donde se envió el formulario
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit(); // Asegúrate de que la ejecución del script se detenga después de redirigir
    } else {
        // Imprimir el mensaje de error si la consulta falla
        echo "Error al insertar el registro: " . $conn->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
