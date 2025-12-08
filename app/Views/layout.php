<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <title><?= isset($title) ? htmlspecialchars($title) : 'MEJIWOO' ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
      <nav class="header-nav">
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">SALE</a></li>
        </ul>
        <div class="logo">
          <span>MEJIWOO</span>
          <span>미지우</span>
        </div>
        <ul class="nav-options">
          <li>
            <form class="search" action="" method="get">
              <input type="search" name="" id="" placeholder="Search" />
              <div class="search-button">
                <button type="submit">
                  <img
                    class="icon"
                    src="assets/icons/search-icon.svg"
                    alt=""
                    srcset=""
                  />
                </button>
              </div>
            </form>
          </li>
          <li>
            <img
              class="icon"
              src="assets/icons/cart-icon.svg"
              alt=""
              srcset=""
            />
          </li>
          <li><img class="icon" src="assets/icons/user-icon.svg" alt="" /></li>
        </ul>
      </nav>
</header>
<main>
    <?= $content ?>
</main>
</body>
</html>

