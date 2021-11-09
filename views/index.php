
<?php

    include("../controllers/controladorarticulos.php");
    
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Store</title>
        <link rel=" shortcut icon" href="../public/img/carrito.png">
        <link rel="stylesheet" href="../public/estilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.css"
        integrity="sha512-Q0DfJ+I5cbH4Wm20NlPZ/fENHil7k3ZgzI9b71LfQAB1IlM8Gt7aO7eOPX2QzYT+4fZaF6u1kSfZAHczl4r/9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <main>
            <div class="b-example-divider"></div>
            <header class="p-3 mb-3 border-bottom bg-dark  fixed-top">
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
                        </div>
                        </div>
                        <div class="linea1 text-center text-white">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odio aspernatur eaque ullam doloremque consequatur dolorem dignissimos voluptatem perferendis asperiores!</p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container- flur mt-5 py-5 ">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../public/img/img8.jpg" class="d-block w-100" alt="Photography1">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/img/Img1.jpg" class="d-block w-100" alt="Photography2">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/img/img3.jpg" class="d-block w-100" alt="Photography3">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/img/img4.jpg" class="d-block w-100" alt="Photography4">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/img/img5.jpg" class="d-block w-100" alt="Photography5">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/img/img6.jpg" class="d-block w-100" alt="Photography6">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/img/img7.jpg" class="d-block w-100" alt="Photography7">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <h2 class="text-center fw-bold">All Items</h2>

            <!--codigo para activaciones de eliminacion y mostrar datos--->
            <div class="container mt-5 d-flex justify-content-center p-5 ">
                <div class="row g-4">
                    <?php foreach($producto as $producto):?>
                        <div class="col">
                            <div class="card h-100 "style="width: 18rem;">
                                <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="img1">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold"><?php echo($producto["nombre"])?></h6>
                                    <p class ="card-text">Us$ <?php echo($producto["valor"])?></p>
                                    <p class="card-text lh-1">Description: <?php echo($producto["descripcion"])?></p>
                                    <p class="card-text">Quantity: <?php echo($producto["inventario"])?></p>
                                    <a href="#" class="btn btn-light"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="btn btn-light"data-bs-toggle="modal" data-bs-target="#delete<?=$producto["id"]?>"><i class="fas fa-trash-alt"></i></a>
                                    <a href="#" class="btn btn-light"data-bs-toggle="modal" data-bs-target="#editar<?=$producto["id"]?>"><i class="fas fa-pen"></i></a>
                                </div> 
                            </div>
                            <!-- Modal eliminar -->
                            <section>
                                <div class="modal fade" id="delete<?=$producto["id"]?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-secondary text-white">
                                                <h5 class="modal-title">The Store<i class="fas fa-shopping-cart"></i></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿are you sure to remove the product?</p>
                                                <p><?= $producto["id"] ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                <a href="../controllers/controladorDelete.php?id=<?= $producto["id"]?>" class="btn btn-danger">to accept</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Modal editar -->
                            <section>
                                <div class="modal fade" id="editar<?= $producto["id"] ?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-secondary text-white">
                                                <h5 class="modal-title">The Store<i class="fas fa-shopping-cart"></i></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <img src="<?= $producto["foto"] ?>" alt="foto" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-9">
                                                        <form action="" method="">
                                                            <div class="mb-3">
                                                                <label  class="form-label">Product value</label>
                                                                <input type="text" class="form-control" value="<?= $producto["valor"] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label  class="form-label">Description</label>
                                                                <input type="text" class="form-control" value="<?= $producto["descripcion"] ?>">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Edit</button>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"
         integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA=="
         crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>