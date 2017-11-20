<?php include("cabecalho.php");?>


<?php

session_start();
session_destroy();
header('location: index.php');

?>



<?php include("rodape.php");?>