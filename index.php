<?php
include("cabecalho.php");
 include ("logicaUsuario.php");
 ?>


<?php
  
 if(usuarioEstaLogado()) {?>
 <link href="listaLink.css" rel="stylesheet">
 
 <?php include("navbar.php");

 include("conecta.php");

include("bancoLink.php");
?>

  
 <?php

$cadastros = listaLink($conexao);
?>




<table class="table table-striped table-bordered">




    <th><big>Título</th>
    <th><big>Link</th>
   <th><big>Categoria</th>
    <th><big>Remover</th>

    

  



<?php
foreach ($cadastros as $cadastro){
?>

  
  
  <tr>
  
    <td><?= $cadastro['titulo'] ?> </td>
    <td><a href="?= $cadastro['link'] ?"><?= $cadastro['link'] ?></a> </td>
    <td><?= $cadastro['categoria'] ?> </td>
    
    <td>
<div id="logbox">

    <form action="remove-cadastro.php" method="POST">

      <input type="checkbox" name="id" value="<?=$cadastro['id']?>">
      <input type="submit" value="Remover" class="inputButton"/>
    </form>
  </div>

    </td>
    
 
  </tr>
  
<?php
}
?>
</table>


 

       </body>
 <?php } else {?>




     <link href="login.css" rel="stylesheet">
  <div class="container">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


    <div class="col-md-6">
    
    <div id="logbox">
    
      <form id="cadastro" method="post" action="cadastro.php">
        <h1>Cadastro</h1>
        <input name="nome" type="text" placeholder="Nome" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
        <input name="email" type="email" placeholder="Email" class="input pass"/>
        <input name="senha" type="password" placeholder="Senha" required="required" class="input pass"/>
 
        
        <input type="submit" value="Cadastrar" class="inputButton"/>
      
      </form>
    </div>
   </div>
    <!--col-md-6-->
    
   <div class="col-md-6">
    <div id="logbox">
      <form id="login" method="post" action="login-usuario.php">
        <h1>Login</h1>
        <input name="email" type="email" placeholder="Email" class="input pass"/>
        <input name="senha" type="password" placeholder="Senha" required="required" class="input pass"/>
        <input type="submit" value="Login" class="inputButton"/>
        
      </form>
    </div>
    </div>

  </div>
  <?php } ?>
      <?php
include("rodape.php");
?>
