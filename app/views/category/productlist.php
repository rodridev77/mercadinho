<?php if(!empty($category)):?>
<div class="container container-products">
        <div class="product-container-title">
            <h2>Cereais e Leite</h2>
        </div>
        <div class="card-deck">
            <?php foreach($category as $key => $value) :?>
                <div class="card product-card" onclick="productPage();">
                    <div class="card-item">
                        <div class="product-img">
                            <img class="card-img-top" src="<?= BASE_URL.'/public/assets/images/products/'.str_replace("jpeg","jpg",$value['image']); ?>" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <?=$value["product"]->getDescription();?>
                            </p>
                            <div class="price-box">
                                <p>R$<?=$value["product"]->getPrice();?><p>
                            </div>
                            <div class="button-buy-component">
                                <button class="btn btn-outline-success btn-lg btn-block">Adicionar</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="product-id" value="1">
                </div>
            <?php endforeach; ?>  
        </div>
    </div>
<?php endif;?>