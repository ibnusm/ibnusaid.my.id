<?php
include "user-go-index.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ResepFood</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="lomba, jagoanhosting, jh" />
    <meta name="description" content="Webiste ResepFood Lomba JagoanHosting" />
    <meta name="author" content="@ibnusaid" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link
      rel="shortcut icon"
      href="./assets/icons/favicon.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/style2.css" />
  </head>

  <body>
    <header>
      <div id="nav-background">
        <div id="nav-container">
          <header id="nav-header">
            <div class="icons">
              <a
                href="#"
                onclick="alert('Maaf, Ini Hanya Tampilan :)')"
                class="fas fa-user-circle"
              ></a>
              <a
                href="#"
                onclick="alert('Maaf, Ini Hanya Tampilan :)')"
                class="fas fa-shopping-cart"
              ></a>
            </div>
            <div id="nav-menu-button" class="fas fa-bars"></div>
          </header>
          <nav>
            <ul class="nav-ul hide-ul">
              <li><a class="nav-link active-link" href="#home">Home</a></li>
              <li><a class="nav-link" href="#product">Product</a></li>
              <li><a class="nav-link" href="#deal">Update</a></li>
              <li><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <section class="home" id="home">
      <div class="image">
        <img src="./assets/img/home-img.png" alt="" />
      </div>

      <div class="content">
        <h3>Temukan Resep Makanan Sesuai Kebutuhan Anda</h3>
        <div class="meal-search">
          <cite>Ibnu Said</cite>
          <div class="meal-search-box">
            <input
              type="text"
              class="search-control"
              placeholder="Cari"
              id="search-input"
            />
            <button type="submit" class="search-btn btn" id="search-btn">
              <i class="fas fa-search"></i>
            </button>
          </div>
          <p>
            <span>Pilihlah Resep Makanan Sesuai Kebutuhan Anda</span>
          </p>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="meal-wrapper">
        <div class="meal-result" id="product">
          <h2 class="title">Hasil Pencarian Anda</h2>
          <div id="meal"></div>
        </div>

        <div class="meal-details">
          <button
            type="button"
            class="btn recipe-close-btn"
            id="recipe-close-btn"
          >
            <i class="fas fa-times"></i>
          </button>

          <div class="meal-details-content"></div>
        </div>
      </div>
    </div>

    <section class="deal" id="deal">
      <div class="content">
        <h3 class="title">Update Resep</h3>
        <p>Tunggu Update Resep Makanan Terbaru Dari Kami Di Tanggal 2 September 2022</p>

        <div class="count-down">
          <div class="box">
            <h3 id="day"></h3>
            <span>Hari</span>
          </div>
          <div class="box">
            <h3 id="hour"></h3>
            <span>Jam</span>
          </div>
          <div class="box">
            <h3 id="minute"></h3>
            <span>Menit</span>
          </div>
          <div class="box">
            <h3 id="second"></h3>
            <span>Detik</span>
          </div>
        </div>

        <a
          href="#"
          onclick="alert('Ups... :(\n\nAnda Harus Berlangganan Untuk Mendapatkan Notifikasi Pembaruan')"
          class="btns"
          >Aktifkan Notifikasi</a
        >
      </div>
    </section>

    <section class="newsletter">
      <h3>Berlangganan Untuk Mendapatkan Informasi Tentang Pembaruan Terbaru</h3>

      <form action="">
        <input class="box" type="email" placeholder="Masukan Email" />
        <input type="submit" value="subscribe" class="btns" />
      </form>
    </section>

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <a href="#" class="logo"
            ><i class="fas fa-shopping-basket"></i>ResepFood</a
          >
          <p>Social Media</p>
          <div class="share">
            <style>
              ion-icon {
                color: #000;
              }
            </style>
            <a href="https://instagram.com/chinulniboss"
              ><ion-icon size="large" name="logo-instagram"></ion-icon
            ></a>
            <a href="https://twitter.com/nulz404"
              ><ion-icon size="large" name="logo-twitter"></ion-icon
            ></a>
            <a href="https://facebook.com/profile.php?id=100009142125278"
              ><ion-icon size="large" name="logo-facebook"></ion-icon
            ></a>
            <a href="https://github.com/ibnusm"
              ><ion-icon size="large" name="logo-github"></ion-icon
            ></a>
          </div>
        </div>

        <div class="box">
          <h3>Menu</h3>
          <div class="links">
            <a href="#home">home</a>
            <a href="#product">product</a>
            <a href="#deal">update</a>
            <a href="contact.php">contact</a>
          </div>
        </div>

        <div class="box">
          <h3>Download App</h3>
          <div class="links">
            <a
              href="#"
              onclick="alert('Mohon maaf belum ada!\nini hanya sebuah desain website')"
              >google play</a
            >
            <a
              href="#"
              onclick="alert('Mohon maaf belum ada!\nini hanya sebuah desain website')"
              >window xp</a
            >
            <a
              href="#"
              onclick="alert('Mohon maaf belum ada!\nini hanya sebuah desain website')"
              >app store</a
            >
          </div>
        </div>

        <div class="box">
          <h3>Suport By</h3>
          <a href="https://www.jagoanhosting.com">
            <p>Jagoan Hosting</p>
            <img src="./assets/icons/logojh.png" alt="logo jagoanhosting" />
          </a>
        </div>
      </div>

      <h1 class="credit">
        &copy;Copyright
        <a href="https://instagram.com/chinulniboss"><span> ibnusaid </span></a>
        | all rights reserved!
      </h1>
    </section>

    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/countdown.js"></script>
  </body>
</html>
