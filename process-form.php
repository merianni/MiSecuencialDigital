<?php

// php para guadar nota en la base de datos

$nota = $_POST["nota"];
$notaAclaratoria = $_POST["notaAclaratoria"];

$user = 'root';
$pass = '';
$db = 'secuencialnota';

$db = new mysqli('localhost:3307', $user, $pass, $db) or die("Unable to connect");

if (mysqli_connect_errno()){
    die("Connection error: ". mysqli_connect_error());
}

$sql = "INSERT INTO notaaclaratoria(nota, notaAclaratoria)
        VALUES (?,?)";

$stmt = mysqli_stmt_init($db);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($db));
}

mysqli_stmt_bind_param($stmt, "ss",
                        $nota,
                        $notaAclaratoria);

mysqli_stmt_execute($stmt);

echo "Nota guardada.";

?>