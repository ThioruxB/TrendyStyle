<?php
require '../BD.php';
$consulta_join = $miPDO->prepare("SELECT * FROM `producto` INNER JOIN marca ON producto.id_marca=marca.id_marca;");
$consulta_join->execute();
$datos = $consulta_join->fetchAll(PDO::FETCH_ASSOC); // Cambiado a fetchAll para obtener todos los resultados

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_dashboard.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <!--Barra de navegacion-->
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg">

                    <img class="navbar-brand" src="img/logo.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="dashboard.php"><i
                                        class="fa-solid fa-house fa-xl"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../error4044.html"><i class="fa-solid fa-bell fa-xl"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ingreso.php"><i class="fa-solid fa-door-open fa-xl"></i></a>
                            </li>

                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        <!--Menu de funcionalidades-->
        <div class="row">
            <div class="col-md-3 menu">
                <!--img del perfil-->
                <div class="row perfiles">
                    <img src="img/user1.png" class="xd" alt="iconempleado">
                    <?php
                    session_start();
                    ?>
                    <h4>Hola <?php echo $_SESSION['user']; ?></h4>
                    <p><?php echo $_SESSION['tipo']; ?></p>
                    <button class="btn btn-outline-light col-4" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Ver perfil</button>
                </div>
                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="img/user1.png" alt="user">
                                <h1 class="modal-title col align-items-center " id="exampleModalLabel"><?php echo $_SESSION['user']; ?></h1>
                                <h4>Rol: <?php echo $_SESSION['tipo']; ?></h4>
                            </div>
                            <div class="modal-body">
                            <p>Correo: <?php echo $_SESSION['email']; ?></p>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-secondary"><a href="editar_perfil.php" class="nav-link">Modificar perfil</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--menu de funcionalidades-->
                <h3>Inventario</h3>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="borrar_producto.php"><i
                                class="fa-solid fa-eye"></i>Ver productos </a></li>
                    <li class="nav-item"><a class="nav-link" href="form_products.php"><i
                                class="fa-solid fa-plus"></i>Agregar productos</a></li>
                </ul>

             
            </div>
                    <div class="col-md-9 tableposi ">
                        <h2>Productos con poco stock</h2>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th class="fs-4 text-center"  colspan="2"><i class="fa-solid fa-bookmark fa-lg"></i> Marca</th>
                                    <th class="fs-4" scope="col"><i class="fa-solid fa-shirt fa-lg"></i> Producto</th>
                                    <th class="fs-4" scope="col"><i class="fa-solid fa-boxes-stacked fa-lg"></i> Cantidad/Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($datos as $row) : ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $row['nombre_marca'];?></td>
                                    <td><img src="<?php echo $row['logo'];?>" alt="<?php echo $row['nombre_marca'];?>"></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                    <td>
                                       <?php echo $row['Cantidad'];?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
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
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    
</body>

</html>
