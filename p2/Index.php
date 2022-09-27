<?php 
 require_once("controllers/resort_controller.php");
/*    http://parcial1.com:82/p2/   */
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Resort Parcial 1-2</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
            <a class="navbar-brand" href="#">       <img src="Imagenes//logo4.jpg" class="img-fluid" alt="..."></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catalogo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Mayores de edad</a></li>
                            <li><a class="dropdown-item" href="#">Menores de edad</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Tercera edad</a></li>
                            <li><a class="dropdown-item" href="#">Niños</a></li>
                      
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactenos </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Texto buscado" aria-label="Texto buscado ">
                    <button class="btn btn-outline-danger" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
<div class="container-sm">
    
<br>
    <div class="row">
    <table class="table table-info table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID </th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Barra</th>
                        <th scope="col">Acceso</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(resort_controller::Mostrar() as  $persona){?>
                        <tr>
                        <th scope="row"><?php echo $persona->getid() ?></th>
                        <td><?php echo  $persona->getnombre() ?></td>
                        <td><?php echo  $persona->getedad() ?></td>
                        <td><?php echo $persona->getsexo() ?></td>
                        <td><?php echo resort_util::Mybarra($persona->getedad(),
                                    resort_util::Color($persona->getsexo()),
                                                           ) ?>
                        <td><?php echo resort_util::MyModal($persona->getid(),
                                                          "Ver Boleto",
                                                          resort_util::Color($persona->getsexo()),
                                                          "Boleto de el Resort",
                                                          $persona->getnombre(),
                                                          $persona->getedad(),
                                                          
                                                          $persona->getsexo(),
                                                          "Aceptar") ?>
                        </td>
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    </div>


<div class="container-sm">
    

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Imagenes//resort1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Imagenes//resort2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Imagenes//resort3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
