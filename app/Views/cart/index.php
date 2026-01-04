<section>
    <h1>Shopping Cart</h1>
    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif ?>
    
    <?php foreach($products as $product): ?>
        <h2><?= $product['product']['name'] ?></h2>
        <p><?= $product['product']['price'] ?></p>
        <p><?= $product['quantity'] ?></p>
        <p>Total: <?= (int)$product['product']['price'] * (int)$product['quantity'] ?> €</p>
    <?php endforeach ?>
</section>