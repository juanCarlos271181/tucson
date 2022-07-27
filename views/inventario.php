<?php include_once("../env.php");?>
<!DOCTYPE html>
<html lang="en">

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
$HEADER_TITLE="ARTICULOS";
include_once("header.php")
?>

<br>



    <table class=" table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">N°</th>
                <th scope="col">Código </th>
                <th scope="col">Artículo</th>
                <th scope="col">Marca</th>
                <th scope="col">Super Rubro</th>
                <th scope="col">Rubro</th>
                <th scope="col">Lote</th>
                <th scope="col">Stock Total</th>
                <th scope="col">Amacen Talar</th>

            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>#10X10 BALI</td>
                <td>LST PIEDRA BALI QUARTZ 10X10 GREEN</td>
                <td>LATIN STONE</td>
                <td>PIEDRAS & MARMOLES</td>
                <td>PIEDRA MEDIO</td>
                <td>SINLOTE</td>
                <td>33,000</td>
                <td>23,000</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>#IL AUGUS NT OU</td>
                <td>ILVA PORC.60X120 AUGUSTUS NATURAL OUT</td>
                <td>ILVA</td>
                <td>PORCELANATO NACIONAL</td>
                <td>PORCELANATO NACIONAL</td>
                <td>24JD</td>
                <td>36,000</td>
                <td>0,000</td>


            </tr>
            <tr>
                <th scope="row">3</th>
                <td>0413/B2P-CR</td>
                <td>FV NEWPORT COCINA MESADA</td>
                <td>FV</td>
                <td>ACCESORIOS</td>
                <td>GRIFERIAS MEDIO</td>
                <td>SINLOTE</td>
                <td>5,000</td>
                <td>4,000</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>#IL AUGUS NT OU</td>
                <td>ILVA PORC.60X120 AUGUSTUS NATURAL OUT</td>
                <td>ILVA</td>
                <td>PORCELANATO NACIONAL</td>
                <td>PORCELANATO NACIONAL</td>
                <td>24JD</td>
                <td>36,000</td>
                <td>0,000</td>


            </tr>
            <tr>
                <th scope="row">5</th>
                <td>0413/B2P-CR</td>
                <td>FV NEWPORT COCINA MESADA</td>
                <td>FV</td>
                <td>ACCESORIOS</td>
                <td>GRIFERIAS MEDIO</td>
                <td>SINLOTE</td>
                <td>5,000</td>
                <td>4,000</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>#IL AUGUS NT OU</td>
                <td>ILVA PORC.60X120 AUGUSTUS NATURAL OUT</td>
                <td>ILVA</td>
                <td>PORCELANATO NACIONAL</td>
                <td>PORCELANATO NACIONAL</td>
                <td>24JD</td>
                <td>36,000</td>
                <td>0,000</td>


            </tr>
            <tr>
                <th scope="row">7</th>
                <td>0413/B2P-CR</td>
                <td>FV NEWPORT COCINA MESADA</td>
                <td>FV</td>
                <td>ACCESORIOS</td>
                <td>GRIFERIAS MEDIO</td>
                <td>SINLOTE</td>
                <td>5,000</td>
                <td>4,000</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>#IL AUGUS NT OU</td>
                <td>ILVA PORC.60X120 AUGUSTUS NATURAL OUT</td>
                <td>ILVA</td>
                <td>PORCELANATO NACIONAL</td>
                <td>PORCELANATO NACIONAL</td>
                <td>24JD</td>
                <td>36,000</td>
                <td>0,000</td>


            </tr>
            <tr>
                <th scope="row">9</th>
                <td>0413/B2P-CR</td>
                <td>FV NEWPORT COCINA MESADA</td>
                <td>FV</td>
                <td>ACCESORIOS</td>
                <td>GRIFERIAS MEDIO</td>
                <td>SINLOTE</td>
                <td>5,000</td>
                <td>4,000</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>0413/B2P-CR</td>
                <td>FV NEWPORT COCINA MESADA</td>
                <td>FV</td>
                <td>ACCESORIOS</td>
                <td>GRIFERIAS MEDIO</td>
                <td>SINLOTE</td>
                <td>5,000</td>
                <td>4,000</td>
            </tr>
        </tbody>
    </table>




    <footer class="py-5 bg-dark">
        <div class="m-0 text-center text-white">

            <img src="../img/logo-2.png" alt="">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
            </div>
    </footer>


</body>


</html>
