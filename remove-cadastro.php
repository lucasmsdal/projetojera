
<?php include("cabecalho.php");?>
<?php

 include ("logicaUsuario.php");
 
 ?>
 
<?php
   include("conecta.php"); 

   $id = $_POST['id'];

 function removeLink($conexao, $id){
		$query= "delete from cadastros where id='{$id}'";
		return mysqli_query($conexao, $query);
	}


if (removeLink($conexao, $id)){
          echo"<script language='javascript' type='text/javascript'>alert('Removido com Sucesso');window.location.href='index.php';</script>";
          die();
        }else{
          
           echo"<script language='javascript' type='text/javascript'>alert('Não foi removido');window.location.href='index.php';</script>";
          die();
           
        }
?>

<?php include("rodape.php");?>
