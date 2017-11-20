

<?php include("cabecalho.php");?>
<?php include ("navbar.php");?>
<?php include ("conecta.php");?>
<?php include ("logicaUsuario.php");?>
<?php include ("banco-usuario.php");




$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);



if ($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha inválida";
	header("Location: index.php");
}else{
	$_SESSION["success"] = "Você está logado com sucesso";
	logaUsuario($usuario["email"]);
	header("Location: index.php");
}

?>