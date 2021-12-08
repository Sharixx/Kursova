<!DOCTYPE html>
<html lang="uk">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi</title>

    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <link rel="stylesheet" href="./styles/reg.css">
    <link rel="stylesheet" href="./styles/main.css">
    <!-- <link href="путь_до/jquery.fancybox.min.css" rel="stylesheet"> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="module">
  import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
</script>


</head>
<body class="d-flex flex-column min-vh-100">

    <header class="color1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md color1 navbar-dark nav">
                        <!-- Brand -->
                        <a class="navbar-brand" href="index.php"><img src="./img/logo1.png" alt="logo" class="logo"></a>

                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Клієнтам</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Автопаркам</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Бізнесу</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Доставка</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active_nav" href="#">Про нас</a>
                                </li>
                                <li class="nav-item">
                                <?php
                                    if( isset($_SESSION['logged_user'])) : ?>
                                    <a class="nav-link-log login" href="logout.php">Вийти</a>
                                    <?php else : ?>
                                    <a class="nav-link-log login" href="signup.php">Зареэструватись/Увійти</a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4">
            <form action="" method="POST">
            <p><strong>Звідки їдемо</strong></p>
            <input type="text" name="" value="">

            <p><strong>Куди їдемо</strong></p>
            <input type="text" name="" value="">

            <p><button type="submit" name="do_login" class="btn">Замовити таксі</button></p>
    </form>
            </div>
        </div>
    </div>
            <footer class="d-flex mt-auto flex-wrap justify-content-between align-items-center py-3 my-4 border-top footer text-dark">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                  <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                </a>
        <span class="text-dark">© 2021 Company, Inc</span>
            </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class=""href="#"><img class="footer_img" src=./img/facebook.png></a></li>
              <li class="ms-3"><a class=""href="#"><img class="footer_img" src=./img/instagram.png></a></li>
              <li class="ms-3"><a class=""href="#"><img class="footer_img" src=./img/twitter.png></a></li>
        </ul>
  </footer>



</body>
