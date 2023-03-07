<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-relative position-fixed w-100 "
        style="z-index: 1;">
        <div class="container-fluid ">
            <a class="navbar-brand mx-3 text-warning" href="#"><i class="fa-sharp fa-solid fa-shop mx-3"></i>Exprese
                Shope</a>

            <div class="collapse navbar-collapse position-absolute end-0 m-4" id="navbarNavAltMarkup">
                <div class="navbar-nav me-4">
                    <a class="nav-link mx-4 " aria-current="page" href="/">Home</a>

                    @if(session()->has('client_id'))

                    <a class="nav-link mx-4" href="/Shope">Shope</a>
                    <a class="nav-link mx-4 " data-bs-toggle="modal" data-bs-target="#contact" tabindex="-1"
                        aria-disabled="true">Contact us</a>
                    <a class="nav-link  mx-4" href="/Cart" tabindex="-1" aria-disabled="true">
                        <i class="fa-solid fa-cart-shopping"></i></a>
                    <a type="button" class="mx-4 btn btn-outline-secondary" href="logout">Logout</a>
                    @if(session()->has('admin'))
                    <a class="mx-4 mt-2 " data-bs-toggle="modal" data-bs-target="#login_admin"><i
                            class="fs-3 fa-solid fa-screwdriver-wrench"></i></a>
                    @endif

                    @else

                    <a class="nav-link mx-4" type="button" class="mx-4 btn btn-outline-secondary" type="button"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Shope</a>
                    <a class="nav-link mx-4 " data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"
                        tabindex="-1" aria-disabled="true">Contact us</a>
                    <a class="nav-link  mx-4" data-bs-toggle="modal" data-bs-target="#exampleModal" href="/Cart"
                        tabindex="-1" aria-disabled="true">
                        <i class="fa-solid fa-cart-shopping"></i></a>
                    <a type="button" class="mx-4 btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Login</a>

                    @endif
                </div>
            </div>
        </div>
    </nav>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email :</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label">Password :</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <a class="me-5 mb-3" data-bs-dismiss="modal" data-bs-toggle="modal"
                            data-bs-target="#registration" href="">You
                            don't have account ?? </a>
                        <a class="ms-5 mb-3 text-danger" data-bs-dismiss="modal" data-bs-toggle="modal"
                            data-bs-target="#forget" type="button">forget
                            password</a>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" data-bs-target="#manage" class="btn btn-primary" value="Login">
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>



    <div class="modal fade" id="registration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="registration">
                        @csrf
                        <div class="mb-3">
                            <label for="fistname" class="col-form-label">FistName :</label>
                            <input name="fistname" type="text" class="form-control" id="fistname">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="col-form-label">LastName :</label>
                            <input name="lastname" type="text" class="form-control" id="lastname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email :</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label">Password :</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="register">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="login_admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../admin" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email :</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label">Password :</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" data-bs-target="#manage" class="btn btn-primary" value="Login">
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>




    <div class="modal fade" id="contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="contact" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="subject" class="col-form-label">subject :</label>
                            <input name="subject" type="text" class="form-control" id="subject">
                        </div>
                        <div class="mb-3">
                            <label for="mess" class="col-form-label">message :</label>
                            <textarea name="message" type="password" class="form-control" id="mess" col="30"
                                row="3"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="send">
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="forget" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">forget Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="forget" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Your Email :</label>
                            <input name="email" type="email" class="form-control" id="email" required>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="send">
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/692381961f.js" crossorigin="anonymous"></script>

</body>

</html>