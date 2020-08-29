<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= asset("css/bootstrap.min.css"); ?>>
    <link rel="stylesheet" href=<?= asset("css/home.css"); ?>>
    <link rel="stylesheet" href=<?= asset("fontawesome/css/font-awesome.min.css"); ?>>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-defaul bg-primary navbar-fixed-top ">
        <div class="container navbar-home">

            <div class="">
                <a class="navbar-brand" style="color: white;" href="#">
                    <i class="fa fa-shopping-cart fa-lg">
                    </i>
                    Mercadinho
                </a>
            </div>
            <div class="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Procurar Produtos">
                    <span class="input-group-btn">
                        <button class="btn btn-success btn-block search-product-btn" type="button">Buscar</button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="navbarlink"><i class="fa fa-list fa-lg"></i> Minha Lista<span
                            class="sr-only">(current)</span></a></li>
                <li><a href="#" class="navbarlink"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        Login</a></li>
            </ul>
            <div class="col-sm-2">
                <div class="input-group">

                    <div class="icon-cart-value">
                        <div class="line-cart-value">
                            R$: 0,00
                        </div>
                        
                    </div>

                    <!-- <input type="text" class="form-control" placeholder="Procurar Produtos" value="0,00">
                    <span class="input-group-btn">
                        <button class="btn btn-success btn-block search-product-btn" type="button">
                            <i class="fa fa-shopping-cart fa-lg">
                            </i></button>
                    </span> -->
                </div><!-- /input-group -->
            </div>
        </div>
    </nav>
</body>

</html>