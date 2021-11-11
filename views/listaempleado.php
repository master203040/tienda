<?php 
    
    include("../controllers/controladorlistaempleados.php");

    if(!isset($_SESSION)){
    session_start();
   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel=" shortcut icon" href="../public/img/carrito.png">
    <link rel="stylesheet" href="../public/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="b-example-divider"></div>
        <header class="p-3 mb-3 border-bottom bg-dark fixed-top">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <h1 class="text-white">THE STORE<i class="fas fa-shopping-cart"></i></h1>
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="../home.php" class="nav-link px-2 link-dark text-white">Home</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark text-white">About us</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark text-white">Offers of the day</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark text-white">Customer service</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark text-white">Contact</a></li>
                        <li><a href="../views/registro.php" class="nav-link px-2 link-dark text-white">Enter product </a></li>
                        <li><a href="../views/user.php" class="nav-link px-2 link-dark text-white">User register</a></li>
                    </ul>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>
                    <button type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal"data-bs-target="#staticBackdrop1">
                        Search
                    </button>
                    <div class="linea1 text-center text-white">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odio aspernatur eaque ullam doloremque consequatur dolorem dignissimos voluptatem perferendis asperiores!</p>
                    </div>
                </div>
            </div>
        </header>
        <h2 class="text-center text-dark fw-bold mt-5">All Items</h2>
        <div class="container mt-5 d-flex justify-content-center p-5">
                <div class="row g-4">
                    <?php foreach($empleados as $empleado):?>
                        <div class="col">
                            <div class="card h-100 "style="width: 18rem;">
                                <img src="<?php echo($empleado["foto"])?>" class="card-img-top" alt="img1">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold"><?php echo($empleado["nombre"])?></h6>
                                    <p class="card-text">Age: <?php echo($empleado["edad"])?></p>
                                    <p class="card-text lh-1">Description: <?php echo($empleado["descripcion"])?></p>
                                    <a href="#" class="btn btn-light"data-bs-toggle="modal" data-bs-target="#delete<?=$empleado["id"]?>"><i class="fas fa-trash-alt"></i></a>
                                    <a href="#" class="btn btn-light"data-bs-toggle="modal" data-bs-target="#edit<?=$empleado["id"]?>"><i class="fas fa-pen"></i></a>
                                </div> 
                            </div>
                            <!-- Modal eliminar -->
                            <section>
                                <div class="modal fade" id="delete<?=$empleado["id"]?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-secondary text-white">
                                                <h5 class="modal-title">The Store<i class="fas fa-shopping-cart"></i></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿are you sure to remove the product?</p>
                                                <p><?=$empleado["id"]?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                <a href="../controllers/controladorEliminar.php?id=<?=$empleado["id"]?>" class="btn btn-danger">to accept</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Modal editar -->
                            <section>
                                <div class="modal fade" id="edit<?=$empleado["id"]?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-secondary text-white">
                                                <h5 class="modal-title">The Store<i class="fas fa-shopping-cart"></i></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <img src="<?=$empleado["foto"]?>" alt="foto" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-9">
                                                        <form action="../controllers/controladorEdit.php?id=<?=$empleado["id"]?>"method="POST">
                                                            <div class="mb-3">
                                                                <label  class="form-label">Name</label>
                                                                <input type="text" class="form-control" value="<?=$empleado["nombre"]?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label  class="form-label">Photography</label>
                                                                <input type="text" class="form-control" value="<?=$empleado["foto"]?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label  class="form-label">Description</label>
                                                                <input type="text" class="form-control" value="<?=$empleado["descripcion"]?>">
                                                            </div>
                                                            <button type="submit"class="btn btn-primary" name="botonEdit">Edit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    <?php endforeach ?>    
                </div>
            </div>      
        </main>
        <section>
            <?php if(isset($_SESSION['mensaje'])):?>
                <div class="modal fade" id="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary text-white">
                                <h5 class="modal-title" id="exampleModalLabel">The Store<i class="fas fa-shopping-cart"></i></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark">
                                <h5><?php echo($_SESSION['mensaje'])?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php unset($_SESSION['mensaje'])?>
            <?php endif ?>
    </section>
        
     <div class="b-example-divider"></div>
        <div class="container-flur py-5 " >
            <footer class="d-flex justify-content-center align-items-center bg-white">
                <div class="col-md-4 text-center">
                   <span class="text-dark fw-bold">&copy; 2021 Company, Inc </span>
                </div>
                <ul class="nav col-md-4 justify-content-lef gb-dark">
                    <li class="ms-3"><a class="text-dark fw-bold" href="#"><i class="fab fa-github"></i></a></li>
                    <li class="ms-3"><a class="text-dark fw-bold" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="ms-3"><a class=" nav-link text-dark fw-bold" href="#">www.theStore.com</a></li>
                </ul>
                <p class = "text-dark fw-bold lh-sm">
                    La Planta Central de los Envio esta en la Ciudad de Medellin-Colombia calle 24 #23-584 Autopista Norte via a Barbosa
                </p>
            </footer>
        </div>   
    
    <script type ="module" src="../public/js/modal1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"
    integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>                     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>