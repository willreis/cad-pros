<?php
include('core/conn.php');

$nome = utf8_decode($_POST["nomeProspect"]);
$email = $_POST["emailProspect"];
$telefone = $_POST["telProspect"];
$empresa = utf8_decode($_POST["empresaProspect"]);
$mensagem = utf8_decode($_POST["mensagemProspect"]);
$usuario = "ADMIN";
$dataCadastro = date('d/m/Y H:i:s');


$sql = "INSERT INTO cad_prosp (id_cad_pros, nome_prosp, email_prosp, tel_prosp, empresa_prosp, msg_prosp, usuario_prosp, data_cad_pros) VALUES (NULL, '".$nome."', '".$email."', '".$telefone."', '".$empresa."', '".$mensagem."', '".$usuario."', '".$dataCadastro."')";

if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Gravado!');
    window.location.href='cadastro-prospect.php';
    </script>");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>