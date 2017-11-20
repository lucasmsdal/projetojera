<?php
include("cabecalho.php");

?>
<?php
 

   $titulo = $_POST['titulo'];
   $link = $_POST['link'];
 
   
   include("conecta.php"); 

   
   function insereLink ($conexao, $titulo, $link){
    
    $query = "insert into cadastros (titulo, link) values ('{$titulo}', '{$link}')";
    $resultadoInsercao = mysqli_query($conexao, $query);
        
    
    return $resultadoInsercao;
}

if (insereLink ($conexao, $titulo, $link)){
          echo"<script language='javascript' type='text/javascript'>alert('Adicionado com Sucesso');window.location.href='index.php';</script>";
          die();
        }else{
          
           echo"<script language='javascript' type='text/javascript'>alert('Não foi adicionado com Sucesso');window.location.href='linkForm.php';</script>";
          die();
           
        }
         

      
?>

      <?php
include("rodape.php");
?>