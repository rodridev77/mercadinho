<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="/mercadinho/customer/newCustomer" class="my-5" method="POST">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" required class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="district">Bairro</label>
                    <input type="text" id="district" name="district" required class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="street">Rua</label>
                    <input type="text" id="street" name="street" required class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="number">Numero</label>
                    <input type="text" id="number" name="number" required class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-block btn-success">cadastrar</button>
        </form>
    </div>
</body>

</html>