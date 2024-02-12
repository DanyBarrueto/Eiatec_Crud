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
    $dominio = escapar($_POST['dominio']);
    $region = escapar($_POST['region']);
    $oficina = escapar($_POST['oficina']);

    // Consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO trabajadores (nombre, cedula, cuenta, ubicacion, area, cargo, dominio, region, oficina)
            VALUES ('$nombre', '$cedula', '$cuenta', '$ubicacion', '$area', '$cargo', '$dominio', '$region', '$oficina')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Redirigir al mismo lugar desde donde se envió el formulario
        header("location:" . $_SERVER['HTTP_REFERER'] . " ");
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }
} else {
    // Si no se recibió una solicitud POST, recuperar los registros de la tabla trabajadores
    $trabajadores = array();

    // Consulta SQL para obtener los datos de la tabla trabajadores
    $consulta = "SELECT * FROM trabajadores";

    // Ejecutar la consulta
    $resultado = $conn->query($consulta);

    // Verificar si se obtuvieron resultados
    if ($resultado->num_rows > 0) {
        // Recorrer los resultados y almacenarlos en el array de trabajadores
        while ($fila = $resultado->fetch_assoc()) {
            $trabajadores[] = $fila;
        }
    } else {
        echo "No se encontraron registros.";
    }
}

// Cerrar la conexión
$conn->close();
