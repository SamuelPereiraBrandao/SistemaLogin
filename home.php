<?php  
//conexão
require_once 'db_connect.php';
//sessão
session_start();
//verificação
if(!isset($_SESSION['logado'])){
    header("Location: index.php");
}
//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect,$sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>
<body>
    <h1>Olá <?php echo $dados['nome'];?></h1>
    <a href="logout.php">SAIR</a>
</body>
</html>