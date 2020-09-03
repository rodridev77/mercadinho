<div class="container pt-3">
    <div class="col-12" id="container-content">
        <div id="page-title">
            <h2 id="top-title">Cadastro de Produtos</h2>
        </div>

        <form id="signupfull-form">
            <div class="form-row">
                <div class="form-group col-sm-6 col-12">
                    <label for="prod-category">Categoria</label>
                    <select class="form-control" id="prod-catgory" name="prod-category" required="required">
                        <option selected>Cereais</option>
                        <option value="">Carnes</option>
                    </select>
                </div>

                <div class="form-group col-sm-6 col-12">
                    <label for="prod-brand">Marca</label>
                    <select class="form-control" id="prod-brand" name="prod-brand" required="required">
                        <option selected>Seara</option>
                        <option value="">Dona Benta</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6 col-12">
                    <label for="prod-title">Título</label>
                    <input type="text" class="form-control" id="prod-title" name="prod-title" required="required"
                        placeholder="Título do produto">
                </div>

                <div class="form-group col-sm-3 col-12">
                    <label for="prod-price">Price</label>
                    <input type="text" class="form-control" id="prod-price" name="prod-price" required="required"
                        placeholder="Preço do produto">
                </div>

                <div class="form-group col-sm-3 col-12">
                    <label for="prod-from">Preço Antigo</label>
                    <input type="email" class="form-control" id="prod-from" name="prod-from" required="required"
                        placeholder="Preço antigo">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6 col-12">
                    <label for="prod-description">Descrição do produto</label>
                    <textarea class="form-control" id="prod-description" name="prod-description" required="required">
                    </textarea>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="prod-sale">
                    <label class="form-check-label" for="prod-sale">Promoção</label>
                </div>
            </div>


            <input type="hidden" id="bank-address_id">

            <button type="submit" class="btn btn-success btn-lg submit-account">Salvar</button>
        </form>
        <div>
        </div>