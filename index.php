<?php include_once("env.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=$PATH;?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$PATH;?>assets/css/styles.css">
  <link rel="icon" type="image/x-icon" href="<?=$PATH;?>img/logoBlue.png" style="height: ">
  <title><?=$TITLE;?></title>
</head>
<body>

<?php
  $HEADER_TITLE="SYSTEM TUCSON";
  include_once("views/header.php")
?>

<div class="m-0 text-center">
  <img src="<?=$PATH;?>img/controlInventarios.webp">
</div>

<?php include_once("views/footer.php") ?>

</body>
</html>
