<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("navbar.php");?>
<?php include("bancoLink.php");?>	


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
 <link href="linkform.css" rel="stylesheet">
  <div class="container">



    <div class="col-md-6">
    
    <div id="logbox">
    
      <form id="linkcad" method="post" action="cadastroLink.php">
        <h1>Cadastro</h1>
        <input name="titulo" type="text" placeholder="Título" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
        <input name="link" type="text" placeholder="Link" required="required" class="input pass"/>
       
 
        
        <input type="submit" value="Cadastrar" class="inputButton"/>
      
      </form>
    </div>
   </div>

   </div>

<?php include("rodape.php");?>