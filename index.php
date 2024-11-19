<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css?v=1.0" type="text/css">
    <title>VerdeVita</title>
</head>

<body>
    <!--Navbar-->

    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-around align-items-center" href="index.php">
                <h1 class="companyName">VerdeVita</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-around " id="navList">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-outline-success">Entrar</button>

        </div>
    </nav>
    <!--End Navbar-->

    <!--Start Home Content-->
    <div class="container-fluid d-flex justify-content-center align-items-center firstContainer">
        <div class="d-flex flex-column justify-content-center align-items-center gap-2 content">
            <h3>Feito por <span id="companyNameContent">VerdeVita</span></h3>
            <h1>Transformando o Mundo <br>com Natureza!</h1>
            <button class=" btn buttonBuy" href="index.php">Compre Agora!</button>
        </div>
    </div>
    <div class="container-fluid secondContainer">
        <img src="src/img/plantas.png" class="plant" alt="plantas">
        <div class="checking d-flex justify-content-center align-items-center">
            <button class="btn btn-primary float-end">Promoções</button>
        </div>
    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

 
    <script src="src/js/script.js?v=1.0"></script>
</body>

</html>