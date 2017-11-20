<?php
include("cabecalho.php");
 include ("logicaUsuario.php");
 ?>


<?php
  
 if(usuarioEstaLogado()) {?>
 
 
 <?php include("navbar.php");

 include("conecta.php");

include("bancoLink.php");


 
 

$cadastros = listaLink($conexao);
?>

<?php if (array_key_exists("removido", $_GET)&& $_GET['removido'] == 'true') { ?>
  <p class ="alert-success">Pergunta apagado com sucesso</p>
  <?php }?>


<table class="table table-striped table-bordered">



  
    <th><big>Título</th>
    <th><big>Link</th>
    <th><big>Remover</th>

    

  



<?php
foreach ($cadastros as $cadastro){
?>

  
  
  <tr>
      
    <td><?= $cadastro['titulo'] ?> </td>
    <td><?= $cadastro['link'] ?> </td>
 
    
    <td>
    <form action="remove-pergunta.php" method="post" >
    <input type="hidden" name="id" value="<?=$pergunta['id'] ?>" />
    <button class="btn btn-danger">Remover</button>
    </form>
    </td>
    
 
  </tr>
  
<?php
}
?>
</table>


 <br>
      <a class="btn btn-primary btn-outline btn-lg" href="linkForm.php">Cadastrar Link</a>
      <br>

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
