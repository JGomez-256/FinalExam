<?php
$id = $_POST["userid"];
$username = $_POST["username"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["userpass"];
$regdate = $_POST["fecha"];

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "regClientes";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if ($conn) {
        echo "Conectado con éxito <br>";
    } else {
        echo "No se pudo conectar";
    }

    $sql = "INSERT INTO usuarios VALUES ('$id', '$username', '$email', '$address', '$password', '$regdate')";

    if ($conn->query($sql) === TRUE) {
        echo "Se ha insertado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} catch(mysqli_sql_exception) {
    echo "No se pudo conectar";
}
return $conn;

$conn->close();
?>