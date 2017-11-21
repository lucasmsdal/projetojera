<?php
include("cabecalho.php");
include("navbar.php");

 include("conecta.php");

include("bancoLink.php");
?>
<link href="listaLink.css" rel="stylesheet">
 

<?php
 

   $titulo = $_POST['titulo'];
   
 $categoria = $_POST['categoria'];
   
   include("conecta.php"); 

   

  function buscaLink($conexao, $titulo, $categoria){
  mysqli_set_charset($conexao, "utf8");
  $buscas = array();
  $resultado = mysqli_query($conexao, "select *  from cadastros where titulo='{$titulo}' and categoria='{$categoria}'");
  while($busca = mysqli_fetch_assoc($resultado)){
    array_push($buscas, $busca);
  }
  return $buscas;
}
?>

 <?php
$buscas = buscaLink($conexao, $titulo, $categoria);

if ( buscaLink($conexao, $titulo, $categoria)){ ?>

<table class="table table-striped table-bordered">




    <th><big>Título</th>
    <th><big>Link</th>
    <th><big>Categoria</th>
 

    

  



<?php
foreach ($buscas as $busca){
?>

  
  
  <tr>
  
    <td><?= $busca['titulo'] ?> </td>
    <td><?= $busca['link'] ?> </td>
    <td><?= $busca['categoria'] ?> </td>
    
   
    
 
  </tr>
  
<?php
}
?>
</table>
<?php
die();
        }else{
          
           echo"<script language='javascript' type='text/javascript'>alert('Não foi encontrado');window.location.href='busca.php';</script>";
          die();
           
        }
        ?>
 <br>
     
      <br>

       </body>
 

      <?php
include("rodape.php");
?>