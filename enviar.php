
<?php 
$mysqli = mysqli_connect('localhost', 'phpmyadmin', 'RedesInformaticas', 'db_sotodelacolina');

$dni = $_POST['DNI'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$contra = $_POST['Contraseña'];

if (empty($dni) || empty($nombres) | empty($apellidos)|| empty($correo)|| empty($contra)) {
    echo "Por favor, complete todos los campos.";
} else
$query = "INSERT INTO registro (DNI, nombre, apellido, correo, contrasenia) VALUES ('$dni', '$nombres', '$apellidos', '$correo', '$contra')";


mysqli_query($mysqli, $query);

header('Location: redes/index.php');
?>

