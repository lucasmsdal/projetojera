<?php



function listaLink($conexao){
	mysqli_set_charset($conexao, "utf8");
	$cadastros = array();
	$resultado = mysqli_query($conexao, "select * from cadastros");
	while($cadastro = mysqli_fetch_assoc($resultado)){
		array_push($cadastros, $cadastro);
	}
	return $cadastros;
}
