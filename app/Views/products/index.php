<section class="products-section">
    
    <header>
        <h1>Our Products</h1>
    </header>

    <div class="products-container-wrapper">
        <div class="products-container">
            <?php foreach($products as $product): ?>
                <article class="product-item">
                <a href="/products/product-detail?id=<?=$product["id"]?>">
                    <img src="<?=$product["image"]?>">
                </a>    
                    <div class="product-item-info">
                        <p><?=$product["name"]?></p>
                        <span><?=$product["price"]?> €</span>
                    </div>
                </article>
            <?php endforeach ?>
        </div>
    </div>
    
</section>