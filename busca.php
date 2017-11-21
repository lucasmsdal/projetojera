<?php include("cabecalho.php");?>
<?php include("conecta.php");?>

<?php include("bancoLink.php");?>	


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
 <link href="linkform.css" rel="stylesheet">
 <?php include("navbar.php");?>
  <div class="container">



    <div class="col-md-6">
    
    <div id="logbox">
    
      <form id="buscaLink" method="post" action="buscaLink.php">
        <h1>Busca</h1>
        <input name="titulo" type="text" placeholder="Título" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
        <input name="categoria" type="text" placeholder="Categoria" required="required" class="input pass"/>
        <input type="submit" name="submit" value="Buscar" class="inputButton"/>
      
      </form>
    </div>
   </div>

   </div>

<?php include("rodape.php");?>