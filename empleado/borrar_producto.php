<?php
require '../BD.php';
session_start();

// Verificamos si se ha enviado un ID por POST
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    // Preparamos y ejecutamos la consulta para eliminar el producto
    $eliminar = $miPDO->prepare("DELETE FROM producto WHERE id_producto = :id");
    $eliminar->execute(['id' => $id]);
}

// Consultamos la lista de productos después de eliminar
$consulta = $miPDO->prepare("SELECT * FROM producto");
$consulta->execute();
$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_borrar.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <!-- Barra de navegacion -->
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg">     
                      <img class="navbar-brand" src="img/logo.png" alt="">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="dashboard.php"><i class="fa-solid fa-house fa-xl"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-bell fa-xl"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="../ingreso.php"><i class="fa-solid fa-door-open fa-xl"></i></a>
                          </li>                         
                        </ul>
                      </div>                    
                </nav>
            </div>
        </div>       
        <!-- Menu de funcionalidades -->
        <div class="row">
            <div class="col-md-3 menu">
                <!-- img del perfil -->
                <div class="row perfiles">
                    <img src="img/user1.png" class="xd" alt="iconempleado">
                    <h4>Hola <?php echo $_SESSION['user']; ?></h4>
                    <p><?php echo $_SESSION['tipo']; ?></p>
                    <button class="btn btn-outline-light col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver perfil</button>
                </div>  
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="img/user1.png" alt="user">
                                <h1 class="modal-title col align-items-center" id="exampleModalLabel"><?php echo $_SESSION['user']; ?></h1>
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
                <!-- menu de funcionalidades -->
                <h3>Inventario</h3>
                <ul class="navbar-nav">
                    <li class="nav-item" ><a class="nav-link" href="borrar_producto.php"><i class="fa-solid fa-eye"></i>Ver productos </a></li>
                    <li class="nav-item"><a class="nav-link" href="form_products.php"><i class="fa-solid fa-plus"></i>Agregar productos</a></li>
                </ul>            
               
            </div>
            <div class="col-md-9 martop">
                <div class="row pro d-flex flex-wrap g-4">
                    <?php foreach ($datos as $row) : ?>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="<?php echo $row['img_producto']; ?>" alt="<?php echo $row['nombre']; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                                    <div class="row btn-lol">
                                        <form method="post" class="btn col-6 p-1">
                                            <button type="submit" class="btn" name="id" value="<?php echo $row['id_producto']; ?>">Eliminar </button>
                                        </form>
                                        <button class="btn "><a href="editar_producto.php">Editar </a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div> <!-- Cierre de row -->
    </div> <!-- Cierre de container-fluid -->
    <!-- pie de pagina -->
    <footer> 
        <img id="logofooter" src="img/logo.png" alt="">
        <div class="contengotodo">
            <div class="img">
                <img src="img/contacto.png" alt="contactoicon">
                <h2>Escribenos</h2>
               </div>
               <div class="texto">
                <p>bustamanteparrabryanalexander@gmail.com</p>
                <p>luisandrestovarr2019@gmail.com</p>
                <p>hoonluv4@gmail.com</p>
                <p>sebastiangalindo@gmail.com</p>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function Eliminar() {
            Swal.fire({
                title: "¿Estás seguro que deseas eliminar?",
                text: "Ten en cuenta que una vez borrado no lo puedes reestablecer.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminarlo."
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "¡Eliminado!",
                        text: "Tu producto se ha eliminado correctamente.",
                        icon: "success"
                    });
                }
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
</body>
</html>
