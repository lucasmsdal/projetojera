<?php
include("cabecalho.php");

?>
<?php
 

   $titulo = $_POST['titulo'];
   $link = $_POST['link'];
 $categoria = $_POST['categoria'];
   
   include("conecta.php"); 

   
   function insereLink ($conexao, $titulo, $link, $categoria){
    
    $query = "insert into cadastros (titulo, link, categoria) values ('{$titulo}', '{$link}', '{$categoria}')";
    $resultadoInsercao = mysqli_query($conexao, $query);
        
    
    return $resultadoInsercao;
}

if (insereLink ($conexao, $titulo, $link, $categoria)){
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