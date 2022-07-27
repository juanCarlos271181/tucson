<?php include_once("../env.php");?>
<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=$PATH;?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$PATH;?>assets/css/styles.css">
  <link rel="icon" type="image/x-icon" href="<?=$PATH;?>img/logoBlue.png" style="height: ">
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="<?=$PATH;?>img/images-removebg-preview.png" style="height: 30px" />
  <title><?=$TITLE;?></title>

</head>

<body>


<?php
$HEADER_TITLE="USUARIOS";
include_once("header.php")
?>
<br>

  <section class="vh-100" id="">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col-md-9 col-lg-6 col-xl-5"id="imagenForm">
          <img src="<?=$PATH;?>/img/almacen-registrate.webp" class="img-fluid" alt="Sample image">
        </div>
        <br>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <div >

            <div class="form-outline mb-4">
              <input type="text" id="login_username" class="form-control form-control-lg"
                placeholder="Enter user" />
              <label class="form-label" for="login_username">User</label>
             </div>

            <div class="form-outline mb-3">
              <input type="password" id="login_password" class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="login_password">Password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">

              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="login_remember" />
                <label class="form-check-label" for="login_remember">
                  To remember
                </label>
              </div>
              <a href="#!" class="text-body">you forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" name="register" onclick="window.location='./menu_principal.php'" class="btn btn-dark btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Enter</button>
            </div>
        </div>
        </div>
      </div>
    </div>
    <br>


      </div>
  </section>
<?php include_once("footer.php") ?>
</body>
