<section>
    <article class="product-detail">
        <div class="product-detail-wrapper">
            <img src="/<?= $product['image'] ?>" alt="" srcset="">
            <div>
                <div>
                    <h2><?= $product['name'] ?></h2>
                    <p style="width: 240px;">Autem ducimus ea consectetur voluptatem amet blanditiis rem, quis alias illo quos corporis, debitis placeat quia et iusto.</p>
                    <p><?= $product['price'] ?> €</p>
                </div>
                <div>
                    <button>Add to card</button>
                    <span>Quantity: <?= $product['quantity'] ?></span>
                </div>
            </div>
        </div>
    </article>
    
</section>