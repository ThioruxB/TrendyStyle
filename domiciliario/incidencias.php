<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/edit_perfil.css">
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
                                <a class="nav-link" href="../error404.html"><i class="fa-solid fa-bell fa-xl"></i></a>
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
                    <img src="img/delivery.png"  class="xd" alt="iconempleado">
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
                <img src="img/delivery.png" alt="user">
                <h1 class="modal-title col align-items-center " id="exampleModalLabel"><?php echo $_SESSION['user']; ?></h1>
                                <h4>Rol: <?php echo $_SESSION['tipo']; ?></h4>
            </div>
            <div class="modal-body">
            <p>Correo: <?php echo $_SESSION['email']; ?></p>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-secondary"><a href="edit_perfil.php" class="nav-link">Modificar perfil</a></button>
            </div>
        </div>
    </div>
</div>
            <!--menu de funcionalidades-->
            <h3>Domicilios</h3>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="entregas.html"><i class="fa-solid fa-box-open"></i>Ver entregas </a></li>
                <li class="nav-item"><a class="nav-link" href="incidencias.php"><i class="fa-solid fa-circle-exclamation"></i>Registrar incidencia </a></li>
            </ul>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-12 ">
                        <div class="card  ">

                            <div class="card-body">
                                <form action="" class="was-validated">
                                    <h1>Registrar incidencias</h1>
                                    <div class="row cardr">
                                        <div class="col-md-8 d-flex justify-content-center">
                                            <div class="col-md-1 mt-2">
                                                <img src="img/alerta.png" width="32px" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-floating mb-1">
                                                <select class="form-select " name="t_producto" required>
                                            <option value="">Selecciona el tipo de incidencia</option>
                                            <option value="1caso">Direccion equivocada</option>
                                            <option value="2caso">No queria pagar</option>
                                            <option value="3caso">No recibio nadie el pedido</option>
                                            <option value="4caso">Compra falsa</option>
                                        </select>
                                        <div class="invalid-feedback">Selecciona alguna opcion</div>
                                                </div>
                                            </div>
                                        </div>    
                                        
                                        <div class="col-md-8 d-flex justify-content-center mb-2">
                                            <div class="col-md-1 mt-3">
                                                <img src="img/descripcion.png" class="img-fluid " width="35px" alt="telefono">
                                            </div>
                                            <div class="col-md-10">
                                            <div class="form-floating">
                                            <textarea class="form-control" required id="floatingTextarea2"
                                                style="height: 100px" placeholder="desceri"></textarea>
                                            <label for="floatingTextarea2">Descripción de la incidencia</label>
                                            <div class="invalid-feedback">Escribe la descripcion</div>
                                        </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-8 d-flex justify-content-center">
                                        <div class="col-md-1">
                                                <img src="img/fecha.png" class="img-fluid " width="32px" alt="telefono">
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-floating mb-3">
                                                    <input type="date" class="form-control" id="floatingInput"  
                                                        required>
                                                    <label for="floatingInput">Fecha de la incidencia</label>
                                                    <div class="invalid-feedback">
                                                        Pon la fecha
                                                      </div>
                                                </div>
                            
                                            </div>
                                            

                                        </div>
                                        <div class="col-md-8 d-flex justify-content-center">
                                            <div class="col-md-1">
                                                <img src="img/user_black.png" width="35px" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="floatingInput"  placeholder="Empleado@gmail.com"
                                                        required>
                                                    <label for="floatingInput">Cliente</label>
                                                    <div class="invalid-feedback">
                                                        Escribe el nombre del cliente que realizo el pedido
                                                      </div>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="col-md-8 d-flex justify-content-center">
                                            <div class="col-md-8">
                                                <input class="btn editbtn col-12" type="submit" onclick="Incidencia()"
                                        value="Registrar incidencia">
                                                
                                            </div>
                                        </div>
                                    </form>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
    </div>
    <script>
        //script de alerta
        function Incidencia() {
            Swal.fire({
  title: "Incidencia registrada!",
  text: "gracias por proporcionar esta incidencia La tendremos en cuenta!",
  icon: "success"
});
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script>
        new DataTable('#domiciliarios');
    </script>
</body>

</html>