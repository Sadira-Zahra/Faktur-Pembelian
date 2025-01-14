<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/ubah-barang.css" />
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
    <div class="ubah-barang1">
      <header class="rectangle-parent612">
        <div class="frame-child1061"></div>
        <img
          class="image-1-icon10"
          loading="lazy"
          alt=""
          src="./image/image-1@2x.png"
        />

        <div class="frame-wrapper148">
          <div class="frame-parent404">
            <div class="selamat-datang-wrapper6">
              <div class="selamat-datang12">Selamat Datang!</div>
            </div>
            <img
              class="frame-icon60"
              loading="lazy"
              alt=""
              src="./image/frame6.svg"
              id="frame"
            />
          </div>
        </div>
      </header>
      <div class="home-dashboard-parent5">
        <input
          class="home-dashboard9"
          placeholder="Home / Dashboard"
          type="text"
        />

        <div class="frame-child1062"></div>
        <img class="frame-icon61" alt="" src="./image/frame-31.svg" />
      </div>
      <section class="ubah-barang-inner">
        <div class="frame-parent405">
          <div class="ubah-barang-container">
            <b class="ubah-barang2">Ubah Barang</b>
          </div>
          <div class="frame-wrapper149">
            <div class="rectangle-parent613">
              <div class="frame-child1063"></div>
              <div class="frame-parent406">
                <div class="frame-parent407">
                  <div class="id-wrapper">
                    <div class="id5">ID</div>
                  </div>
                  <div class="rectangle-wrapper57">
                    <input class="frame-child1064"
                    placeholder
                    type="text"
                    />
                  </div>
                </div>
                <div class="frame-parent408">
                  <div class="nama-frame">
                    <div class="nama21">Nama</div>
                  </div>
                  <div class="rectangle-wrapper58">
                    <input class="frame-child1065"
                    placeholder
                    type="text"
                    />
                  </div>
                </div>
              </div>
              <div class="frame-parent409">
                <div class="harga-satuan-wrapper">
                  <div class="harga-satuan">Harga Satuan</div>
                </div>
                <input class="frame-child1066"
                placeholder
                type="text"
                />
              </div>
            </div>
          </div>
          <div class="frame-wrapper150">
            <div class="frame-parent410">
              <a href="barang2.php" class="rectangle-parent614" id="groupButton" style="text-decoration:none;color:black">
                <div class="frame-child1067"></div>
                <b class="simpan35">Simpan</b>
              </a>
              <a href="barang2.php" class="rectangle-parent615" style="text-decoration:none;color:black">
                <div class="frame-child1068"></div>
                <b class="batal44">Batal</b>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script>
      var frame = document.getElementById("frame");
      if (frame) {
        frame.addEventListener("click", function (e) {
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
