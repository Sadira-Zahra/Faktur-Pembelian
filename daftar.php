<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/daftar.css" />
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
    <div class="daftar3">
      <header class="rectangle-parent629">
        <div class="frame-child1091"></div>
        <div class="image-1-wrapper">
          <img
            class="image-1-icon14"
            loading="lazy"
            alt=""
            src="./image/image-1@2x.png"
          />
        </div>
        <nav class="menu-f-a-q-wrapper">
          <nav class="menu-f-a-q">
            <h2 class="menu2">Menu</h2>
            <h2 class="faq6">FAQ</h2>
            <div class="tentang-kami-wrapper16">
              <h2 class="tentang-kami27">Tentang Kami</h2>
            </div>
          </nav>
        </nav>
        <div class="arrow-drop-down-container">
          <img
            class="arrow-drop-down-icon1"
            loading="lazy"
            alt=""
            src="./image/arrow-drop-down.svg"
          />
        </div>
        <div class="input-field4">
          <h2 class="masuk5">Masuk</h2>
        </div>
      </header>
      <main class="daftar-inner">
        <section class="image-container-group">
          <div class="image-container7">
            <div class="image-container-child1"></div>
            <div class="admin-sign-up-button">
              <img
                class="image-2-icon4"
                loading="lazy"
                alt=""
                src="./image/image-22@2x.png"
              />
            </div>
            <div class="sign-up-message">
              <h2 class="daftar-sebagai-admin">Daftar Sebagai Admin</h2>
              <img
                class="confirm-password-field"
                loading="lazy"
                alt=""
                src="./image/rectangle-12@2x.png"
              />
            </div>
          </div>
          <form class="profile-form-title">
            <div class="profile-form-title-child"></div>
            <h2 class="selamat-datang-di">Selamat Datang Di ShopAndDrive</h2>
            <div class="confirmation-page-title">
              <div class="nama-lengkap1">
                <div class="no-h-p-input">
                  <div class="nama-lengkap2">Nama Lengkap</div>
                  <input
                    class="registration-form-fields"
                    placeholder="Nama Lengkap"
                    type="text"
                  />
                </div>
                <div class="no-h-p-input1">
                  <div class="no-hp">No. HP</div>
                  <input
                    class="no-h-p-input-child"
                    placeholder="No. HP"
                    type="text"
                  />
                </div>
                <div class="no-h-p-input2">
                  <div class="password-group">
                    <div class="password4">Password</div>
                    <div class="password5">Password</div>
                  </div>
                  <input
                    class="no-h-p-input-item"
                    placeholder="Password"
                    type="text"
                  />
                </div>
                <div class="no-h-p-input3">
                  <div class="konfirmasi-password1">Konfirmasi Password</div>
                  <input
                    class="featured-insights"
                    placeholder="Konfirmasi Pasword"
                    type="text"
                  />
                </div>
              </div>
            </div>
            <div class="google-sign-in-button-wrapper">
              <div class="google-sign-in-button">
                <div class="google-sign-in-button-inner">
                  <button class="frame-wrapper163" id="groupButton">
                    <div class="daftar-frame">
                      <b class="daftar4">DAFTAR</b>
                    </div>
                  </button>
                </div>
                <div class="atau-daftar-dengan">
                  <div class="atau-daftar-dengan-wrapper">
                    <div class="atau-daftar-dengan1">Atau Daftar Dengan</div>
                  </div>
                  <button class="share-wrapper" id="groupButton1">
                    <div class="share">
                      <div class="daftar-dengan-google">
                        Daftar Dengan Google
                      </div>
                    </div>
                  </button>
                  <div class="atau-daftar-dengan-inner" id="groupContainer">
                    <div class="sudah-punya-akun-masuk-sekara-wrapper">
                      <div class="sudah-punya-akun">
                        Sudah Punya Akun? Masuk Sekarang
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </section>
      </main>
    </div>

    <script>
      var groupButton = document.getElementById("groupButton");
      if (groupButton) {
        groupButton.addEventListener("click", function (e) {
          window.location.href = "./dashboard1.php";
        });
      }
      
      var groupButton1 = document.getElementById("groupButton1");
      if (groupButton1) {
        groupButton1.addEventListener("click", function (e) {
          window.location.href = "./dashboard1.php";
        });
      }
      
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
          window.location.href = "./masuk.php";
        });
      }
      </script>
  </body>
</php>
