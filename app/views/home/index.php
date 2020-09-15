    <div class="container container-products">
        <div class="product-container-title">
            <h2>Cereais e Leite</h2>
        </div>
        <div class="card-deck">
            <?php foreach($productList as $product): ?>
            <?php extract($product); ?>
            <div class="card product-card">
                <div class="card-item">
                    <div class="product-img" onclick="productPage();">
                        <img class="card-img-top" src="<?= BASE_URL.'/public/assets/images/products/'.$image; ?>" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <?= $product->getDescription(); ?>.
                        </p>
                        <div class="price-box">
                            <p>R$ <?= $product->getPrice(); ?><p>
                        </div>
                        <div class="button-buy-component">
                            <button class="btn btn-outline-success btn-lg btn-block">Adicionar</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="product-id" value="<?= $product->getId(); ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>