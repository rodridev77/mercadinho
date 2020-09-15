<?php //echo "<pre>"; print_r($_SESSION['cart']); ?>
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
                <?php foreach($list as $product): ?>
                <div class="cart-content">
                    <section class="col-sm-12 cart-content-list">
                        <ul class="content-list">
                            <li class="row cart-product-box">
                                <div class="col-sm-6 product-info-box">
                                    <div class="row">
                                        <div class="col-sm-4 product-thumb-box">
                                            <figure class="product-thumb">
                                                <a>
                                                    <img src="<?= BASE_URL.'/public/assets/images/products/'.$product->image ?>"
                                                        width="60px">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-sm-8 product-text-box">
                                            <p class="product-text"><?= $product->getDescription(); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 product-qtty text-center">
                                    <div class="product-qtty-box add_to_cart">
                                        <input type="hidden" id="product-id" name="product-id"
                                            value="<?php echo $product->getId(); ?>">
                                        <span class="qtty-icon-minus" data-action="decrease">-</span>
                                        <input id="count-product" type="number" size="3" name="count-product" min="1"
                                            value="1" disabled>
                                        <span class="qtty-icon-plus" data-action="increase">+</span>
                                    </div>
                                </div>

                                <div class="col-sm-3 product-price text-center">
                                    R$ <?= 'R$ ' . number_format($product->getPrice(), 2, ',', '.'); ?>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-sm-4 cart-left-column">
            <div class="cart-wrapper">
                <h3 class="summary-title">Resumo dos Pedidos</h3>
                <ul class="summary-details">
                    <?php $total = 0; ?>
                    <?php foreach($list as $product): ?>
                    <?php $total += (floatval($product->getPrice()) * intval($product->count)); ?>
                    <li class="summary-detail">
                        <span><?= $product->count; ?> produto(s)</span>
                        <span><?= 'R$ ' . number_format($product->getPrice(), 2, ',', '.'); ?></span>
                    </li>
                    <?php endforeach; ?>
                    <li class="summary-detail">
                        <span>Frete</span>
                        <span>R$ 0,00</span>
                    </li>
                </ul>
                <div class="summary-total">
                    <span>Total</span>
                    <span><?= 'R$ ' . number_format($total, 2, ',', '.'); ?></span>
                </div>
                <button id="buy-btn" class="summary-buy-btn btn btn-primary btn-block">Comprar</button>
            </div>
        </div>
    </section>
</div>