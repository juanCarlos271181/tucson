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

<body>


    <header>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navBar">
            <div class="container">
                <div class="logo" id="logoTucson">
                <img src="../img/logoBlue.png" alt="" style="width: 55%;">
                </div>
                <a class="navbar-brand" href="#!">PRODUCTOS</a>
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
                                <li><a class="dropdown-item active" href="./views/ceramicos.php">Ceramicos/Porcelanatos</a></li>
                                <li><a class="dropdown-item" href="./griferia.php">Griferias/Sanitarios</a></li>
                                <li><a class="dropdown-item" href="./marmoleria.php">Marmol</a></li>
                                <li><a class="dropdown-item" href="./pegamentos.php">Pegamentos/Pastina</a></li>
                            </ul>
                        

                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

   

<br>
<br>



    <table class=" table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">N°</th>
                <th scope="col">Pisos y Revestimientos </th>
                <th scope="col">Griferias</th>
                <th scope="col">Sanitarios</th>
                <th scope="col">Marmol</th>
                <th scope="col">Pegamentos</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ilva</td>
                <td>Hidromet</td>
                <td>Ferrum</td>
                <td>Quarzo</td>
                <td>Mapei</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Rosetto</td>
                <td>Fv</td>
                <td>Roca</td>
                <td>Bahia Silver</td>
                <td>Pastina</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Elizabeth</td> 
                <td>Peirano</td>
                <td>Johnson Acero</td>
                <td>Bianchisimo</td>
                <td>Klaukol</td> 
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