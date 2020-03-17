<?php
  
  //inicia a sessao
  session_start();

  //inicia a variavel de página
  $pagina = "paginas/login";  

  //inclui a conexão com o banco de dados
  include "config/conexao.php";
  

  $site   = $_SERVER['SERVER_NAME'];
  $porta  = $_SERVER['SERVER_PORT'];
  $url  = $_SERVER['SCRIPT_NAME'];
  $h    = $_SERVER['REQUEST_SCHEME'];
  // http://localhost:8888/hqs/admin/index.php
  //localhost
  //80
  // /webplus/teste.php
  //configurar a base de pesquisa do site
  $base   = "$h://$site:$porta/$url";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="css/bootstrap.min.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 

    <title></title>
  </head>
        <?php

          $pagina = $pagina.".php";

          //se não está logado mostrar tela de login
          if (!isset($_SESSION["webplus"]["id"])) {
            include $pagina;
          }

          $pagina = "paginas/home";
          if (isset($_GET["parametro"])) {
            $pagina = trim($_GET["parametro"]);
          }
          $p = explode("/", $pagina);
          //posição 0 é pasta
          //posição 1 é arqivo
          //posição 2 é id
          $pasta = $p[0];
          @$arquivo = $p[1];

          $pagina = "$pasta/$arquivo";

          if (isset($p[2]))
          $id = $p[2];


        


        ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>