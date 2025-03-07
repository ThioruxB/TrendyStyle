<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_editar.css">
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
                    <button class="btn btn-outline-light col-4 " data-bs-toggle="modal"
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
                    <li class="nav-item"><a class="nav-link" href="borrar_producto.php"><i class="fa-solid fa-eye"></i>Ver productos </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="form_products.php"><i class="fa-solid fa-plus"></i>Agregar
                            productos</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-12 ">
                        <div class="card  ">

                            <div class="card-body">
                                <form action="" class="was-validated">
                                    <h1>Agregar producto</h1>
                                    <div class="row cardr">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control " id="floatingInput"
                                                     placeholder="Camisa con rayas"
                                                    required>
                                                <label for="floatingInput">Nombre del producto</label>
                                                <div class="invalid-feedback">
                                                    Escribe el nombre del producto
                                                  </div>
                                            </div>
                                            <select class="form-select form-select-sm" name="talla" required>
                                                <option value="">Selecciona la talla</option>
                                                <optgroup label="Calzado">
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                </optgroup>
                                                <optgroup label="Camisas">
                                                    <option value="XS">XS</option>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL</option>
                                                </optgroup>
                                                <optgroup label="Pantalones">
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="30">30</option>
                                                    <option value="32">32</option>
                                                    <option value="34">34</option>
                                                    <option value="36">36</option>
                                                    <option value="38">38</option>
                                                    <option value="40">40</option>
                                                </optgroup>
                                            </select>
                                            <div class="invalid-feedback">
                                                Escoge una categoria
                                              </div>

                                            <div class="form-floating mb-3">
                                                <input type="tel" class="form-control inputm10" id="floatingInput"
                                                    pattern="[0-9]{2,}" placeholder="44" title="minimo de cantidad 10"
                                                    required>
                                                <label for="floatingInput">Stock</label>
                                                <div class="invalid-feedback">
                                                    Escribe el stock del producto
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-floating">
                                                <textarea class="form-control" required id="floatingTextarea2"
                                                    style="height: 100px" placeholder="Descripción"></textarea>
                                                <label for="floatingTextarea2">Descripción del producto</label>
                                                <div class="invalid-feedback">
                                                    Escribe la descripcion del producto
                                                  </div>
                                            </div>
                                            <select class="form-select form-select-sm " name="clasificacion" required>
                                                <option value="">Selecciona la clasificacion</option>
                                                <option value="Mujer">Mujer</option>
                                                <option value="Hombre">Hombre</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Escoge una clasificacion
                                              </div>
                                            <select class="form-select form-select-sm" name="t_producto" required>
                                                <option value="">Selecciona el tipo de producto</option>
                                                <option value="Calzado">Calzado</option>
                                                <option value="Vestido">Vestido</option>
                                                <option value="t_gala">Traje de gala</option>
                                                <option value="Pijama">Pijama</option>
                                                <option value="Camisa">Camisa</option>
                                                <option value="Pantalon">Pantalon</option>
                                                <option value="r_deportiva">Ropa deportiva</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Escoge el tipo de producto
                                              </div>
                                        </div>
                                    </div>


                                    <div class="row cardr">
                                        <div class="col-md-3">
                                            <div class="d-flex align-items-center">
                                                <label for="exampleColorInput" class="form-label colorp">Colores
                                                    producto:</label>

                                                <input type="color" required
                                                    class="form-control px form-control-color me-2"
                                                    id="exampleColorInput is-valid" value="#000" title="Escoge el color color">
                                                <input type="color" required
                                                    class="form-control px form-control-color me-2"
                                                    id="exampleColorInput is-valid" value="#2F00FF" title="Escoge el color">
                                                <input type="color" class="form-control px form-control-color"
                                                    id="exampleColorInput is-valid" value="#FF2A00" title="Escoge el color">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex align-items-center">
                                            
                                            <div class="input-group mb-3 precio ">
                                               
                                                <span class="input-group-text">$</span>
                                                <input type="tel" id="precio" class="form-control" placeholder="PRECIO DEL PRODUCTO EJ:100.000"
                                                    pattern="([0-9]{2}.[0-9]{3})|([0-9]{3}.[0-9]{3})" required
                                                    title="Haz las separaciones de los mil, con el .">
                                                <span class="input-group-text">.00</span>
                                                <div class="invalid-feedback">
                                                    Escribe el precio del producto
                                                  </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3" id="fileInputWrapper">
                                        <label for="formFile" class="form-label label-file">Selecciona la imagen del
                                            producto</label>
                                        <input class="form-control" type="file" id="formFile" required>
                                    </div>
                                    <input class="btn editbtn col-12" type="submit" onclick="Agregar()"
                                        value="Agregar producto">
                                </form>
                            </div>
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
    <script>
        function Agregar() {
            let timerInterval;
            Swal.fire({
                title: "Agregando producto!",
                html: "Se agregarar en <b></b> milisegundos.",
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                        timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                    window.location.href="../error500.html";
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log("I was closed by the timer");
                }
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