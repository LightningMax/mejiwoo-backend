<section id="hero">
  <div class="left">
    <img src="assets/images/image_21.png" alt="" srcset="" />
    <img src="assets/images/image_7.png" alt="" srcset="" />
  </div>
  <div class="mid">
    <h1>MEJIWOO</h1>
    <h2>미지우</h2>
    <p>make your everyday look prettier with MEJIWOO Korean Made</p>
  </div>
  <div class="right">
    <img src="assets/images/image_20.png" alt="" srcset="" />
    <img src="assets/images/image_10.png" alt="" srcset="" />
  </div>
</section>
<section id="collections-section">
  <h2>Season Collections</h2>

  <div class="collections-container">
    <?php foreach($seasons as $season): ?>
      <article class="collection-item">
        <figure>
          <img src=<?=$season['image_url']?> />
          <figcaption><?=$season['title']?></figcaption>
        </figure>
        <button>MORE</button>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<section id="best-seller-section">
  <h2>Our Best Seller</h2>
  <div class="best-seller-container">
      <?php foreach($best_seller as $product): ?>
        <article class="best-seller-item">
          <figure>
            <img
              src=<?= $product['image'] ?>
            />
          </figure>
          <div>
            <h3><?= $product['name'] ?></h3>
            <p><?= $product['price'] ?></p>
          </div>
        </article>
      <?php endforeach ?>

    <article class="best-seller-item">
      <figure>
        <img
          src="assets/images/Venus_Halter_Dress.png"
          alt="Venus Halter Dress"
        />
      </figure>
      <div>
        <h3>Venus Halter Dress</h3>
        <p>Rp. 180.000</p>
      </div>
    </article>

    <article class="best-seller-item">
      <figure>
        <img src="assets/images/Snap_Pure_Blouse.png" alt="Snap Pure Blouse" />
      </figure>
      <div>
        <h3>Snap Pure Blouse</h3>
        <p>Rp. 129.000</p>
      </div>
    </article>
  </div>

 <?php var_dump($best_seller) ?>
</section>
