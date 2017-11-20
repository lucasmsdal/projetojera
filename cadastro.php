<?php
include("cabecalho.php");

?>
<?php
 

   $nome = $_POST['nome'];
   $email = $_POST['email'];
  $senha = $_POST['senha'];
 
   
   include("conecta.php"); 

   
   function insereUsuario ($conexao, $nome, $email, $senha){
    
    $query = "insert into usuario (nome, email, senha) values ('{$nome}', '{$email}', '{$senha}')";
    $resultadoInsercao = mysqli_query($conexao, $query);
        
    
    return $resultadoInsercao;
}

if (insereusuario ($conexao, $nome, $email, $senha)){
          echo"<script language='javascript' type='text/javascript'>alert('Adicionado com Sucesso, faça o login no formulário à direita');window.location.href='index.php';</script>";
          die();
        }else{
          
           echo"<script language='javascript' type='text/javascript'>alert('Não foi adicionado com Sucesso');window.location.href='cadastro-usuario.php';</script>";
          die();
           
        }
         

      
?>

      <?php
include("rodape.php");
?>