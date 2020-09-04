<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mercadinho</title>
    <link rel="stylesheet" href=<?= asset("css/bootstrap.min.css"); ?>>
    <link rel="stylesheet" href=<?= asset("css/home.css"); ?>>
    <link rel="stylesheet" href=<?= asset("fontawesome/css/font-awesome.min.css"); ?>>
    <link rel="stylesheet" href=<?= asset("css/template.css"); ?>>
</head>

<body>
    <nav class="navbar navbar-primary fixed-top TopBarContainer">

        <div class="block-top-nav">
            <div class="row area-block-top-nav">
                <div class="col-sm-1 logo-component">
                    <a class="navbar-brand" style="color: white;" href="#">
                        <i class="fa fa-shopping-cart fa-lg">
                        </i>
                        Market
                    </a>
                </div>

                <div class="col-sm-5 ">
                    <form action="" >
                        <div class="input-group mb-3 my-3">
                            <input type="text" class="form-control" placeholder="Procurar Produtos">
                            <span class="input-group-append">
                                <button class="btn btn-success" type="button">Buscar</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>

                <div class="col-sm-2 group-icon-top">
                    <div class="icon-inline">
                        <div>
                            <img src="<?php echo BASE_URL.'public/assets/img/media/mylist.png'; ?>" width="40px">
                        </div>

                        <div class="icon-text">Minha Lista</div>
                    </div>
                </div>

                <div class="col-sm-3 login-icon">
                    <div class="icon-inline">
                        <div class="btn-group">
                            <a href="#" class="nav-link text-white" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                <span id="login">

                                    <?=$_SESSION['user'] ?? "Login";?>

                                </span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form class="" onsubmit="login(event)">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" class="form-control" name="email" id="Email"
                                            placeholder="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="senha" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">entrar</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Cadastro</a>
                                <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                            </div>
                        </div>
                    </div>

                    <div class="IconCartComponent">
                        <div class="icon-cart-value">
                            <div class="line-cart-value">
                                <div class="text-small-iconcart">R$ </div>
                                <div>0</div>
                                <div class="text-small-value">,
                                    <!-- -->00</div>
                            </div>
                        </div>
                        <div class="icon-cart-ball">
                            <i class="fa fa-shopping-cart fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav>
        <div class="container-fluid menu-back-ground">
            <div class="container menu-box">
                <div class="navbar navbar-expand-lg menu-bar-component">
                    <a class="navbar-brand" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cereais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bebidas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Carnes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promoções</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <?php $this->loadViewInTemplate($viewPath, $viewName, $viewData); ?>
    </div>

    <footer class="container-fluid newsletter-container">
        <div class="row newsletters-container-box">
            <div class="col-sm-5">
                <h3>Quer receber as nossas promoções?</h3>
                <span>Cadastre o seu e-mail e fique por dentro de nossas promoções</span>
            </div>

            <div class="col-sm-7">
                <form method="post">
                    <div class="form-row newsletter-form">
                        <div class="form-group">
                            <label for="newsletter-name">Nome: </label>
                            <input class="form-control newsletter-input" type="text" name="newsletter-name"
                                id="newsletter-name">
                        </div>
                        <div clasa="form-group">
                            <label for="newsletter-email">Email: </label>
                            <input class="form-control newsletter-input" type="email" name="newsletter-email"
                                id="newsletter-email">
                        </div>

                        <div class="form-group btn-box">
                            <button class="btn btn-success btn-signup" type="button">Cadastrar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </footer>

    <footer>
        <div class="container-fluid copyright-box">
            <div class="copyright-text">
                <p>Powered By Markus & Equipe © 2020</p>
            </div>
        </div>
    </footer>

    <script src=<?= asset("js/jquery.min.js"); ?>></script>
    <script src=<?= asset("js/bootstrap.min.js"); ?>></script>
    <script src=<?= asset("js/axios.min.js"); ?>></script>
    <script>
    const BASE_URL = "http://localhost/mercadinho";

    function login(event) {

        event.preventDefault();

        const data = {
            "email": event.target.email.value,
            "password": event.target.password.value
        }

        console.log('data :>> ', data);

        axios.post(BASE_URL + "/auth/login", data)
            .then(response => {
                console.log('response :>> ', response.data);
                location.reload();
            }).catch(error => console.log(error));
    }
    </script>
</body>

</html>