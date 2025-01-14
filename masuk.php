<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/masuk.css" />
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
    <div class="masuk3">
      <header class="rectangle-parent626">
        <div class="frame-child1085"></div>
        <img
          class="image-1-icon13"
          loading="lazy"
          alt=""
          src="./image/image-1@2x.png"
        />

        <nav class="frame-wrapper159">
          <nav class="menu-group">
            <h2 class="menu1">Menu</h2>
            <h2 class="faq5">FAQ</h2>
            <div class="tentang-kami-wrapper15">
              <h2 class="tentang-kami26">Tentang Kami</h2>
            </div>
          </nav>
        </nav>
        <div class="daftar-container">
          <h2 class="daftar2">Daftar</h2>
        </div>
      </header>
      <main class="masuk-inner">
        <section class="frame-parent420">
          <div class="rectangle-parent627">
            <div class="frame-child1086"></div>
            <div class="frame-parent421">
              <div class="image-2-wrapper">
                <img
                  class="image-2-icon3"
                  loading="lazy"
                  alt=""
                  src="./image/image-22@2x.png"
                />
              </div>
              <h2 class="masuk-sebagai-admin">Masuk Sebagai Admin</h2>
            </div>
            <div class="rectangle-wrapper59">
              <img
                class="frame-child1087"
                loading="lazy"
                alt=""
                src="./image/rectangle-12@2x.png"
              />
            </div>
          </div>
          <div class="rectangle-parent628">
            <div class="frame-child1088"></div>
            <div class="welcome-to-shopanddrive-wrapper">
              <h2 class="welcome-to-shopanddrive">Welcome to ShopAndDrive</h2>
            </div>
            <div class="email-parent2">
              <div class="email4">Email</div>
              <input class="frame-child1089" placeholder="Email " type="text" />
            </div>
            <div class="password-parent">
              <div class="password3">Password</div>
              <input
                class="frame-child1090"
                placeholder="Password"
                type="text"
              />
            </div>
            <div class="frame-parent422">
              <div class="lupa-password-wrapper">
                <div class="lupa-password1">Lupa Password ?</div>
              </div>
              <div class="masuk-frame">
                <b class="masuk4" id="masukText">Masuk </b>
              </div>
            </div>
            <div class="frame-parent423">
              <div class="atau-masuk-dengan-wrapper">
                <div class="atau-masuk-dengan">Atau Masuk Dengan</div>
              </div>
              <div class="frame-wrapper160">
                <button class="frame-wrapper161" id="groupButton">
                  <div class="masuk-dengan-google-wrapper">
                    <div class="masuk-dengan-google">Masuk Dengan Google</div>
                  </div>
                </button>
              </div>
              <div class="frame-wrapper162" id="groupContainer">
                <div class="belum-punya-akun-daftar-sekar-wrapper">
                  <div class="belum-punya-akun">
                    Belum Punya Akun? Daftar Sekarang
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <script>
      var masukText = document.getElementById("masukText");
      if (masukText) {
        masukText.addEventListener("click", function (e) {
          window.location.href = "./dashboard1.php";
        });
      }
      
      var groupButton = document.getElementById("groupButton");
      if (groupButton) {
        groupButton.addEventListener("click", function (e) {
          window.location.href = "./dashboard1.php";
        });
      }
      
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
          window.location.href = "./daftar.php";
        });
      }
      </script>
  </body>
</php>
