<div class="container container-products">

    <div class="row">
        <?php if (!empty($product->isEmpty())): ?>
        <div class="col-sm-5">
            <div class="block-img">
                <div class="product-box-img">
                    <img src="<?= BASE_URL.'/public/assets/images/leite.jpg'; ?>">
                </div>
            </div>
        </div>

        <div class="col-sm-7">
            <div class="tittle-area">
                <div class="tittle-box">
                    <div class="tittle-component">
                        <h1 class="tittle"><?= $product->getTitle(); ?></h1>
                    </div>
                </div>
                <span class="subtittle">SKU: <strong><?= $product->getSku(); ?></strong></span>
            </div>
            <div class="manufacture">
                <h2><?= $product->getBrandName(); ?></h2>
            </div>
            <div class="divisor"></div>
            <div class="row">
                <div class="col-sm-5 box-prices">
                    <div class="flag-promotion">
                        <div class="flag-promotion-component">
                            <div class="box-promo">
                                <span><?= $product->getOff(); ?>% off</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-price-component">
                        <span class="price-text"><?= 'R$ ' . number_format($product->getPrice(), 2, ',', '.'); ?></span>
                        un
                    </div>
                </div>
                <div class="col-sm-7 box-button-add">
                    <div class="btn-buy">
                        <div class="btn-component">
                            <button class="btn btn-success" type="button" onclick="addToCart();">Adicionar</button>
                            <input type="hidden" id="product-id" name="product-id" value="<?= $product->getId(); ?>">
                            <input type="hidden" id="count-product" name="count-product" value="1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="divisor"></div>
            <div class="more-info">
                <h2 class="tittle-more-info">Descrição:</h2>
                <p><?= $product->getDescription(); ?>.</p>
            </div>
        </div>
        <?php else: ?>
        <?php echo ""; ?>
        <?php endif; ?>
    </div>
</div>