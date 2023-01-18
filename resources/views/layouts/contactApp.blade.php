<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContactAPP</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="root d-flex flex-column bg-white">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-danger" href="/">
                    ContactAPP
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Companys</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center gap-2">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                JOIN DOC
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-outline-primary" href="#" role="button">Login</a>
                        <a class="btn btn-outline-info" href="#" role="button">Register</a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="flex-grow-1 mt-3 d-flex container-fluid container-md justify-content-center align-items-center ">
            @yield('content')
        </section>
    </div>
</body>

</html>
