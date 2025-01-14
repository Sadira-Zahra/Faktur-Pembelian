<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lilita One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Source Sans Pro:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Markazi Text:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Istok Web:ital,wght@0,700;1,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
    />
  </head>
  <body>
    <div class="homepage">
      <header class="rectangle-parent">
        <div class="frame-child"></div>
        <div class="frame-wrapper">
          <img
            class="frame-item"
            loading="lazy"
            alt=""
            src="../image/image-1@2x.png"
          />
        </div>
        <nav class="frame-container">
          <nav class="menu-parent">
            <div class="menu">Menu</div>
            <div class="faq">FAQ</div>
            <div class="about-us">
              <div class="tentang-kami">Tentang Kami</div>
            </div>
          </nav>
        </nav>
        <div class="arrow-drop-down-wrapper">
          <img
            class="arrow-drop-down-icon"
            loading="lazy"
            alt=""
            src="../image/arrow-drop-down.svg"
          />
        </div>
        <div class="daftar-wrapper">
          <div class="daftar" id="daftarText">Daftar /</div>
        </div>
        <div class="masuk-wrapper">
          <div class="masuk" id="masukText">Masuk</div>
        </div>
      </header>
      <section class="homepage-inner">
        <div class="dedicated-care-message-parent">
          <div class="dedicated-care-message">
            <div class="commitment-message">
              <img class="image-2-icon" alt="" src="./image/image-2@2x.png" />

              <div class="pusat-perawatan-mobil">
                Pusat Perawatan Mobil Anda
              </div>
            </div>
            <div class="best-service">
              <img class="image-3-icon" alt="" src="./image/image-3@2x.png" />

              <div class="berkomitmen-memberikan-pelayan-container">
                <p class="berkomitmen">Berkomitmen</p>
                <p class="memberikan">Memberikan</p>
                <p class="pelayanan">Pelayanan</p>
                <p class="terbaik">Terbaik</p>
              </div>
            </div>
          </div>
          <footer class="dedicated-care-message1">
            <div class="image-4-parent">
              <img class="image-4-icon" alt="" src="./image/image-42@2x.png" />

              <div class="siap-melayani-sepenuh">
                Siap Melayani Sepenuh Hati
              </div>
            </div>
            <div class="image-5-parent">
              <img class="image-5-icon" alt="" src="./image/image-52@2x.png" />

              <div class="memberikan-produk-berkualitas">
                Memberikan Produk Berkualitas untuk Kendaraan Anda
              </div>
            </div>
          </footer>
        </div>
      </section>
    </div>

    <script>
      var daftarText = document.getElementById("daftarText");
      if (daftarText) {
        daftarText.addEventListener("click", function (e) {
          window.location.href = "./daftar.php";
        });
      }
      
      var masukText = document.getElementById("masukText");
      if (masukText) {
        masukText.addEventListener("click", function (e) {
          window.location.href = "./masuk.php";
        });
      }
      </script>
  </body>
</php>
