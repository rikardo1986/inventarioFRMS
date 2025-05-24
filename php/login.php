<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

if ($usuario === 'admin_sur' && $contrasena === 'admin_sur') {
    $_SESSION['autenticado'] = true;
    header('Location: ../index.html');
    exit;
} else {
    echo "<script>
        alert('Usuario o contraseña incorrectos');
        window.location.href='../login.html';
    </script>";
}
?>
