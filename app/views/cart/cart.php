<div class="container container-products">
    <header class="cart-title">
        <h2 class="page-title">Minha Cesta</h2>
    </header>

    <section class="row cart-container">
        <div class="col-sm-8 cart-right-column">
            <div class="cart-products">
                <div class="row cart-columns">
                    <h3 class="col-sm-6">produto</h3>
                    <h3 class="col-sm-3 text-center">qtd</h3>
                    <h3 class="col-sm-3 text-center">preço</h3>
                </div>

                <div class="cart-content">
                    <section class="col-sm-12 cart-content-list">
                        <ul class="content-list">
                            <li class="row cart-product-box">
                                <div class="col-sm-6 product-info-box">
                                    <div class="row">
                                        <div class="col-sm-4 product-thumb-box">
                                            <figure class="product-thumb">
                                                <a>
                                                    <img src="<?= BASE_URL.'/public/assets/images/leite.jpg'; ?>"
                                                        width="60px">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-sm-8 product-text-box">
                                            <p class="product-text">aas askjwq wqiwq wqkwjkqjwq wqkjwqw </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 product-qtty text-center">
                                    <div class="product-qtty-box">
                                        <span class="qtty-icon-minus">-</span>
                                        <input type="number" name="qtty-value" min="1" value="1">
                                        <span class="qtty-icon-plus">+</span>
                                    </div>
                                </div>

                                <div class="col-sm-3 product-price text-center">
                                    R$ 200,00
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>

        <div class="col-sm-4 cart-left-column">
            <div class="cart-wrapper">
                <h3 class="summary-title">Resumo dos Pedidos</h3>
                <ul class="summary-details">
                    <li class="summary-detail">
                        <span>2 produtos</span>
                        <span>R$ 300,00</span>
                    </li>
                    <li class="summary-detail">
                        <span>Frete</span>
                        <span>R$ 0,00</span>
                    </li>
                </ul>
                <div class="summary-total">
                    <span>Total</span>
                    <span>R$ 800,00</span>
                </div>
                <button id="buy-btn" class="summary-buy-btn btn btn-primary btn-block">Comprar</button>
            </div>
        </div>
    </section>
</div>