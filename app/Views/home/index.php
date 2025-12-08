<section id="hero">
  <div class="left">
    <img src="assets/images/image 21.png" alt="" srcset="" />
    <img src="assets/images/image 7.png" alt="" srcset="" />
  </div>
  <div class="mid">
    <h1>MEJIWOO</h1>
    <h2>미지우</h2>
    <p>make your everyday look prettier with MEJIWOO Korean Made</p>
  </div>
  <div class="right">
    <img src="assets/images/image 20.png" alt="" srcset="" />
    <img src="assets/images/image 10.png" alt="" srcset="" />
  </div>
</section>
<section id="collections-section">
  <h2>Season Collections</h2>

  <div class="collections-container">
    <article class="collection-item">
      <figure>
        <img src="assets/images/frame_4.png" alt="Spring Collection" />
        <figcaption>SPRING</figcaption>
      </figure>
      <button>MORE</button>
    </article>

    <article class="collection-item">
      <figure>
        <img src="assets/frame_5.png" alt="Summer Collection" />
        <figcaption>SUMMER</figcaption>
      </figure>
      <button>MORE</button>
    </article>

    <article class="collection-item">
      <figure>
        <img src="assets/images/Frame 6.png" alt="Winter Collection" />
        <figcaption>WINTER</figcaption>
      </figure>
      <button>MORE</button>
    </article>
  </div>
</section>
<section id="best-seller-section">
  <h2>Our Best Seller</h2>
  <div class="best-seller-container">
    <article class="best-seller-item">
      <figure>
        <img
          src="assets/images/Euphoria_Crop_Blouse.png"
          alt="Euphoria Crop Blouse"
        />
      </figure>
      <div>
        <h3>Euphoria Crop Blouse</h3>
        <p>Rp. 125.000</p>
      </div>
    </article>

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

  <?php foreach($products as $product) ?>
    <div>
      <h3><?=$product['name'] ?></h3>
      <p>Rp. <?=$product['price'] ?></p>
      <img src=<?=$product['image'] ?> alt="" srcset="">
    </div>
</section>
