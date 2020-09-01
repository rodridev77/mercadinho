<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mercadinho</title>
    <link rel="stylesheet" href=<?= asset("css/bootstrap.min.css"); ?>>
    <link rel="stylesheet" href=<?= asset("css/home.css"); ?>>
    <link rel="stylesheet" href=<?= asset("fontawesome/css/font-awesome.min.css"); ?>>
    <link rel="stylesheet" href=<?= asset("css/template.css");?>>
</head>

<body>
    <nav class="navbar navbar-primary bg-primary fixed-top">

        <div class="d-inline-flex">
            <a class="navbar-brand" style="color: white;" href="#">
                <i class="fa fa-shopping-cart fa-lg">
                </i>
                Mercadinho
            </a>
            <div class="">
                <div class="input-group">
                    <form action="" class="form-inline my-2 my-lg-0">
                        <input type="text" class="form-control" placeholder="Procurar Produtos">
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-block search-product-btn" type="button">Buscar</button>
                        </span>
                    </form>
                </div><!-- /input-group -->
            </div>
        </div>

        <div class="d-flex">
            <ul class="nav align-items-center">
                <li class="nav-item ">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-list fa-lg">
                        </i> Minha Lista<span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">

                    <div class="btn-group">
                        <a href="#" class="nav-link text-white" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            Login</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form class="px-4 py-3">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="email" id="Email"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="">
                                </div>
                            
                                <button type="submit" class="btn btn-primary">entrar</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cadastro</a>
                            <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                        </div>
                    </div>

                </li>
            </ul>

            <div class="">
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
    </nav>

    <?php $this->loadViewInTemplate($viewPath, $viewName, $viewData); ?>

    <script src=<?=asset("js/jquery.min.js");?>></script>
    <script src=<?=asset("js/bootstrap.min.js");?>></script>
</body>

</html>