<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User register</title>
    <link rel="shortcut icon" href="../public/img/carrito.png">
    <link rel="stylesheet" href="../public/user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.css"
    integrity="sha512-Q0DfJ+I5cbH4Wm20NlPZ/fENHil7k3ZgzI9b71LfQAB1IlM8Gt7aO7eOPX2QzYT+4fZaF6u1kSfZAHczl4r/9Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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
                        <li><a href="./views/registro.php" class="nav-link px-2 link-dark text-white">Enter product </a></li>
                        <li><a href="" class="nav-link px-2 link-dark text-white">User register</a></li>
                    </ul>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>
                    <button type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal"data-bs-target="#staticBackdrop1">
                    Search
                    </button>
                </div>
            </div>
            <div class="linea3 text-center text-white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odio aspernatur eaque ullam doloremque consequatur dolorem dignissimos voluptatem perferendis asperiores!</p>
            </div>
        </div>
    </header>
    <main>
        <div class="container mt-5 py-5">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-12 col-md-5">
                    <form action="#" method="POST" class="form">
                        <h3>User Register</h3>
                        <div class="mb-3 mt-5">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="nombre" autofocus>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last name</label>
                            <input type="text" class="form-control" name="apellido">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Emial</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" name="edad">
                        </div>

                        <div class="mb-3">
                            <label class="form-label"> URL Photography</label>
                            <input type="text"class="form-control" name="foto">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea type ="text"class="form-control" name="descripcion"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="boton">Check in</button>
                    </form>
                </div> 
            </div>
        </div>
    </main>
    <section>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>