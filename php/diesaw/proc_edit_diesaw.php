<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$vidautil = filter_input(INPUT_POST, 'usado', FILTER_SANITIZE_STRING);

$result_cadastro = "UPDATE cadastro_diesaw SET usado='$vidautil', modificado=NOW()  WHERE id='$id'";
$resultado_cadastro = mysqli_query($conn, $result_cadastro);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg1'] = "<p style='color:green;'> Ediçao Finalizada!!</p>";
    header("Location: /ccbs/telas/diesaw/consulta_diesaw.php");
}else{
    $_SESSION['msg1'] = "<p style='color:red;'> Ocorreu algum erro!!</p>";
    header("Location: /ccbs/telas/diesaw/editar_diesaw.php?id=$id");
}

?>
