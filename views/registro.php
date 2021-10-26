<?php 

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
    <title>document</title>
    <link rel="stylesheet" href="../public/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="b-example-divider"></div>
            <header class="p-3 mb-3 border-bottom bg-dark ">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <h1 class="text-white">THE STORE<i class="fas fa-shopping-cart"></i></h1>
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a href="../index.php" class="nav-link px-2 link-dark text-white">Home</a></li>
                            <li><a href="#" class="nav-link px-2 link-dark text-white">About us</a></li>
                            <li><a href="#" class="nav-link px-2 link-dark text-white">Offers of the day</a></li>
                            <li><a href="#" class="nav-link px-2 link-dark text-white">Customer service</a></li>
                            <li><a href="#" class="nav-link px-2 link-dark text-white">Contact</a></li>
                            <li><a href="./views/registro.php" class="nav-link px-2 link-dark text-white">Enter product </a></li>
                        </ul>

                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                        </form>
                        
                        <button type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal"data-bs-target="#staticBackdrop1">
                        Sign up
                        </button>
                        </div>
                        </div>
                        <div class="linea1 text-center text-white">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odio aspernatur eaque ullam doloremque consequatur dolorem dignissimos voluptatem perferendis asperiores!</p>
                        </div>
                </div>
            </header>
    <main>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-5">
                    <form action="../controllers/cotroladorproductos.php" method="POST">
                        <h3>Registro de Productos</h3>
                        <div class="mb-3 mt-5">
                            <label class="form-label">Nombres del producto</label>
                            <input type="text" class="form-control" name="nombre" autofocus>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">valor del producto</label>
                            <input type="text" class="form-control" name="valor">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">tipo de producto</label>
                            <input type="text" class="form-control" name="tipo">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">foto de producto</label>
                            <input type="text" class="form-control" name="foto">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripcion</label>
                            <textarea class="form-control" name="descripcion"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">inventario</label>
                            <input type="text" class="form-control" name="inventario">
                        </div>

                        <button type="submit" class="btn btn-primary" name="boton">registrar</button>
            
                    </form>

                </div>
                
            </div>
        </div>
    </main>
    
     <section>
      <?php if(isset($_SESSION['mensaje'])):?>
        <div class="modal fade" id="modal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">La tiendita del horror</h5>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"
         integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA=="
         crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>