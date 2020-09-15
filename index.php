<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body class="bg-dark">
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <img src="img/supermarket.png" width="50" height="50" alt="logo">
            <a class="navbar-brand" href="index.php">MERCADITO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pagina 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">pagina 3</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mas paginas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Accion</a>
                            <a class="dropdown-item" href="#">Otra accion</a>
                            <a class="dropdown-item" href="#">Algo mas aqui</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
    <div class="container text-white">
        <div class="row justify-content-center mt-5">
            <div class="col-4">
                <form action="index.php" method="POST">
                    <h3 class="text-center mb-4">Factura de su compra</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 1" name="producto1">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 2">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 3">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 4">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 5">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block" name="botonCalcular">Calcular</button>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST["botonCalcular"])):
        ?>
            <h3>
                <?php echo("Estas haciendo click"); ?>
            </h3>
        <?php
            endif
        ?>

    </div>

    </main>

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>