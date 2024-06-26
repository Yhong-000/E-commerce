<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Notsteam</title>
</head>

<body>
    <div class="screen">
        <div class="container-fluid p-0">

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand ml-auto" href="#">Admin</a>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <div class="container-fluid">

                    <a class="navbar-brand mb-1" href="#">Notsteam</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="admin.php?adduser">ADD USER</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="admin.php?addgames">ADD GAMES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="admin.php?addgam">ADD CATEGORIES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="admin.php?display-payment">PAYMENT
                                    RECORDS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="admin.php?control-user">USER CONTROL</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="#">GAME CONTROL</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="#">CATEGORIES CONTROL</a>
                            </li>

                        </ul>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="container my-5">
                <?php
                if(isset($_GET['addgames'])) {
                    include('addgames.php');
                }
                if(isset($_GET['adduser'])) {
                    include('adduser.php');
                }
                
            ?>
            </div>

        </div>

    </div>
</body>

</html>