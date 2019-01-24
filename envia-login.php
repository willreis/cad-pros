<?php
session_start();
include('core/conn.php');

// if(!$_SESSION['usuario']) {
// 	header('Location: login.php');
// 	exit();
// }

// $login = $_POST['login'];
// $senha = $_POST['senha'];


$sql = "SELECT name_user, senha_user, nivel_user FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["name_user"]. " - senha: " . $row["senha_user"];
    }
} else {
    echo "0 results";
}
$conn->close();


?>