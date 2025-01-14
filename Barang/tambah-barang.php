<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/tambah-barang.css" />
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
    <div class="tambah-barang1">
      <header class="rectangle-parent616">
        <div class="frame-child1069"></div>
        <img
          class="image-1-icon11"
          loading="lazy"
          alt=""
          src="./image/image-1@2x.png"
        />

        <div class="image-container6">
          <div class="frame-parent411">
            <div class="selamat-datang-wrapper7">
              <div class="selamat-datang13">Selamat Datang!</div>
            </div>
            <img
              class="home-dashboard-icon"
              loading="lazy"
              alt=""
              src="./image/frame6.svg"
              id="homeDashboard"
            />
          </div>
        </div>
      </header>
      <div class="home-dashboard-parent6">
        <input
          class="home-dashboard10"
          placeholder="Home / Dashboard"
          type="text"
        />

        <div class="i-d-namelabel"></div>
        <img class="input-area-icon" alt="" src="./image/frame-31.svg" />
      </div>
      <section class="tambah-barang-inner">
        <div class="item-label-parent">
          <div class="item-label">
            <b class="tambah-barang2">Tambah Barang</b>
          </div>
          <div class="frame-wrapper151">
            <div class="rectangle-parent617">
              <div class="frame-child1070"></div>
              <div class="nested-i-d-namelabel-parent">
                <div class="nested-i-d-namelabel">
                  <div class="nested-input-area">
                    <div class="id6">ID</div>
                  </div>
                  <div class="nested-i-d-namelabel-inner">
                    <div class="frame-child1071"></div>
                  </div>
                </div>
                <div class="nested-i-d-namelabel1">
                  <div class="nama-wrapper1">
                    <div class="nama22">Nama</div>
                  </div>
                  <div class="nested-i-d-namelabel-child">
                    <div class="frame-child1072"></div>
                  </div>
                </div>
              </div>
              <div class="frame-parent412">
                <div class="harga-satuan-container">
                  <div class="harga-satuan1">Harga Satuan</div>
                </div>
                <div class="frame-child1073"></div>
              </div>
            </div>
          </div>
          <div class="save-button-container">
            <div class="save-button11">
              <a href="barang2.php" class="rectangle-parent618" id="groupButton" style="text-decoration:none;color:black">
                <div class="frame-child1074"></div>
                <b class="simpan36">Simpan</b>
              </a>
              <a href="barang2.php" class="rectangle-parent619" style="text-decoration:none;color:black">
                <div class="frame-child1075"></div>
                <b class="batal45">Batal</b>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script>
      var homeDashboard = document.getElementById("homeDashboard");
      if (homeDashboard) {
        homeDashboard.addEventListener("click", function (e) {
          window.location.href = "./profile.php";
        });
      }
      
      var groupButton = document.getElementById("groupButton");
      if (groupButton) {
        groupButton.addEventListener("click", function (e) {
          window.location.href = "./barang2.php";
        });
      }
      </script>
  </body>
</php>
