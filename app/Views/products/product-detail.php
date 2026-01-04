<section>

<article class="product-detail" x-data="{ count: 1 }">
    <div class="product-detail-wrapper">
        <img src="/<?= $product['image'] ?>" alt="">

        <div>
            <div>
                <h2><?= $product['name'] ?></h2>
                <p style="width: 240px;">
                    Autem ducimus ea consectetur voluptatem amet blanditiis rem.
                </p>
                <p><?= $product['price'] ?> €</p>
            </div>

            <button type="button" @click="count--" :disabled="count <= 1">-</button>

            <input 
                type="number"
                name="quantity"
                x-model="count"
                min="1"
            >

            <button type="button" @click="count++">+</button>
            
            <form class="add-to-cart-form" action="/add-to-cart" method="post">
                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                <input type="hidden" name="quantity" :value="count">
                <input type="submit" value="Add to cart">
            </form>
        </div>
    </div>
</article>

    
</section>