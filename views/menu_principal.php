<?php include_once("../env.php");?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=$PATH;?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$PATH;?>assets/css/styles.css">
        <link rel="icon" type="image/x-icon" href="<?=$PATH;?>img/logoBlue.png" style="height: 30px" />
        <script type="text/javascript" src="js/qrcodejs/qrcode.min.js"></script>
        <link rel="stylesheet" href=https://fonts.google.com/share?selection.family=Roboto%20Mono:wght@100">
        <title><?=$TITLE;?></title>

    </head>

    <body>

<?php
  $HEADER_TITLE="MENU";
  include_once("header.php")
?>

    <br>

    <div class="row mx-5">

    <div class="col ml-5">
         <div class="card" style="width:10rem; padding:10px">
             <img src="<?=$PATH;?>img/usuario.jfif" class="card-img-top" alt="imagen de tarjeta">
              <div class="card-body">
                     <h6>USUARIOS</h6>
              </div>
         </div>
     </div>


    <div class="col ml-8">
    <div class="card"   style="width:11rem; padding:11px;">
             <img src="<?=$PATH;?>img/ventas.jpg" class="card-img-top" alt="imagen de tarjeta">
             <div class="card-body">
                 <h6>VENTAS</h6>
             </div>
         </div>
     </div>


      <div class="col ml-8">
      <div class="card" style="width:10rem; padding:10px">
          <a href="./inventario.php">
             <img src="<?=$PATH;?>img/inventario.webp" class="card-img-top" alt="imagen de tarjeta">
             <div class="card-body">
                 <h6>INVENTARIO</h6>
             </div>
          </a>
     </div>
     </div>


    <br><br>


     <div class="row mx-5">
     <div class="col">
     <div class="card" style="width:10rem; padding:10px">
             <img src="<?=$PATH;?>img/logistica2.jpg" class="card-img-top" alt="imagen de tarjeta">
             <div class="card-body">
                 <h6>LOGISTICA</h6>
             </div>
         </div>
     </div>


     <div class="col">
     <div class="card" style="width:10rem; padding:9px">
             <img src="<?=$PATH;?>img/operacion-empresa.jpg " class="card-img-top" alt="imagen de tarjeta">
             <div class="card-body">
                 <h6>OPERACIONES</h6>
             </div>
         </div>
     </div>



     <div class="col">
     <div class="card" style="width:10rem; padding:8px">
             <img src="<?=$PATH;?>img/dashboard.jpg" class="card-img-top" alt="imagen de tarjeta">
             <div class="card-body">
                 <h6>DASHBOARD</h6>
             </div>
         </div>
     </div>




  </div>

    <footer class="py-5 bg-dark">
        <div class="m-0 text-center text-white">

            <img src="<?=$PATH;?>img/logo-2.png" alt="">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
            </div>
    </footer>

<body>














