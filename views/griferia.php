<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/proyectoTucson//assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/proyectoTucson//assets/css/styles.css">
        <link rel="icon" type="image/x-icon" href="../img/images-removebg-preview.png" style="height: 30px" />
        <title>tucPrototipo</title>
    
    </head>
    <header>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navBar">
            <div class="container">
                <div class="logo" id="logoTucson">
                    <img src="./img/logo-2.png" alt="" style="width: 45%;">
                </div>
                <a class="navbar-brand" href="#!">MODULO INVENTARIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="views/login.php">Login</a></li>
                        <a class="nav-link dropdown-toggle"href="#" role="button"data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                               
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item active" href="./views/ceramicos.php">Pisos y Revestimientos</a></li>
                                <li><a class="dropdown-item" href="./views/griferia.php">Griferias</a></li>
                                <li><a class="dropdown-item" href="./views/sanitarios.php">Sanitarios</a></li>
                                <li><a class="dropdown-item" href="./views/marmol.php">Marmoleria</a></li>
                                <li><a class="dropdown-item" href="./views/pegamento.php">Pegamento/Pastina</a></li>
                            </ul>
                        

                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

<body>

    <div id="titulo">
        <h2>Griferia</h2>
    </div>

    <table class=" table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Código</th>
                <th scope="col">Descripcion </th>
                <th scope="col">Stock mts/2</th>
                <th scope="col">Img Articulo</th>
                <th scope="col">Codigo QR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">00001</th>
                <td>Acacia White</td>
                <td>180,000 mts/2</td>
                <td><img class="imagen" src="../img/ceramicos/calyx-ducha_mesa-de-trabajo.jpg"></td>
                <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
            </tr>
            <tr>
                <th scope="row">00002</th>
                <td>Iva Porc. Tirrero</td>
                <td>290.000 mts/2</td>
                <td><img class="imagen" src="../img/ceramicos/cocina-velvet-black1.jpg"></td>
                <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
            </tr>
            <tr>
                <th scope="row">00003</th>
                <td colspan="">S.Lorenzo</td>
                <td>80.000 mts/2</td>
                <td><img class="imagen" src="../img/ceramicos/fv-libby-monocomando-lavatorio-alto.jpg"></td>
                <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
            </tr>
            <tr>
                <th scope="row">00004</th>
                <td colspan="">Meggagres 20x120</td>
                <td>120,000 mts/2</td>
                <td><img class="imagen"src="../img/ceramicos/fvArizonaMonocomandoCocina.jpg"></td>
                <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
            </tr>
            <tr>
                <th scope="row">00005</th>
                <td colspan="">Rosseto 57x57</td>
                <td>198,000 mts/2</td>
                <td><img class="imagen"src="../img/ceramicos/hidrometSunCruzLavatorioBlack.jpg"></td>
                <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
            </tr>
            <tr>
                <th scope="row">00006</th>
                <td colspan="">Itagress 60x60</td>
                <td>50.000 mts/2</td>
                <td><img class="imagen"src="../img/ceramicos/peirano-santander-ducha.jpg"></td>
                <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
            </tr>
            <tr>
                <th scope="row">00007</th>
                <td colspan="">Eliane</td>
                <td>280.000 mts/2</td>
                <td><img class="imagen"src="../img/ceramicos/peiranoBetisMonocomandoCocina.jpg"></td>
                <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
            </tr>
            <tr>
                <th scope="row">00008</th>
                <td colspan="">Angelgres</td>
                <td>122,000 mts/2</td>
                <td><img class="imagen"src="../img/ceramicos/calyx-ducha_mesa-de-trabajo.jpg"></td>
                <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
            </tr>
        </tbody>
    </table>





<footer class="py-5 bg-dark">
    <div class="m-0 text-center text-white">
        <img src="../img/images-removebg-preview.png" alt="">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
</footer>


</body>
</html>