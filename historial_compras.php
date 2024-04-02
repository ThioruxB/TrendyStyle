<?php
require 'BD.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_historial.css">
    <link rel="stylesheet" href="iconos/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--encabezado-->
  <header id="inicio">
        <img src="img/logo.jpeg" alt="logo">
        <h1>Trendy-Style</h1>
        <img src="img/logo.jpeg" alt="logo">
    </header>
    <!--navegacion-->
    <nav>
    <?php
    session_start(); 
    ?>
        <a href="index.html">Inicio</a>
     
        <a href="catalogo.php">Catalogo/Categorias</a>
        <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-user-ninja fa-lg"></i> <?php echo $_SESSION['user']; ?>
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="historial_compras.php">Historial de compras</a></li>
    <li><a class="dropdown-item" href="ingreso.php">Salir</a></li>
  </ul>
</div>
    
    </nav>


    <div class="col-md-11 tableposi mt-4  table-responsive">
                        <h2 class='text-center'>Historial de compras</h2>
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col"><i class="fa-solid fa-hashtag fa-2xl"></i></th>
                                    <th class="fs-4" scope="col"><i class="fa-solid fa-calendar-days"></i> Fecha</th>
                                    <th class="fs-4" scope="col"><i class="fa-solid fa-shirt "></i> Producto</th>
                                    <th class="fs-4" scope="col"><i class="fa-solid fa-boxes-stacked"></i> Cantidad</th>
                                    <th class="fs-4" scope="col"><i class="fa-solid fa-money-bill"></i> Precio</th>
                                    <th class="fs-4" scope="col"><i class="fa-solid fa-money-check-dollar"></i> Medio de pago</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>31/02/2022</td>
                                    <td>Camisa de goku</td>
                                    <td>2</td>
                                        <td>80.000</td>
                                    <td>
                                       Efectivo
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>02/03/2024</td>
                                    <td>Pantalon dril</td>
                                    <td>1</td>
                                    <td>
                                       95.000
                                    </td>
                                    <td>
                                        Tarjeta de credito
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>18/02/2024</td>
                                    <td>Zapatos cafes</td>
                                    <td>3</td>
                                    <td>
                                        200.000
                                    </td>
                                    <td>
                                        Tarjeta de debito
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>07/02/2024</td>
                                    <td>Buzo de cubo de rubik</td>
                                    <td>1</td>
                                    <td>
                                        85.000
                                    </td>
                                    <td>
                                    Tarjeta de credito
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>01/02/2024</td>
                                    <td>Kimono</td>
                                    <td>1</td>
                                    <td>
                                       80.000
                                    </td>
                                    <td>
                                        Efectivo
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


    <!-- pie de pagina -->
    <footer> 
            <img id="logofooter" src="img/logo.png" alt="">
            <div class="contengotodo">
                <div class="img">
                    <img src="img/contacto.png" alt="contactoicon">
                    <h2>Escribenos</h2>
                   </div>
                   <div class="texto">
                    <p>
                        bustamanteparrabryanalexander@gmail.com
                    </p>
                    <p>
                        luisandrestovarr2019@gmail.com
                    </p>
                    <p>
                        hoonluv4@gmail.com
                    </p>
                    <p>
                        sebastiangalindo@gmail.com
                    </p>
                   </div>         
            </div>
       <div class="contengotodo">
        <div class="img">
            <img src="img/llamada.png" alt="">
            <h2>LLamanos</h2>
        </div>
        <div class="texto">
            <p>3015823912</p>
            <p>313 4177450</p>
            <p>315 2594007</p>
            <p>317 5158394</p>
        </div>
       </div>
           
        </footer>
        <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
</body>
</html>