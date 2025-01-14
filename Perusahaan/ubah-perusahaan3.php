<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/ubah-perusahaan.css" />
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
    <div class="ubah-perusahaan">
      <header class="home-dashboard7">
        <div class="home-dashboard-child"></div>
        <img
          class="image-1-icon9"
          loading="lazy"
          alt=""
          src="./image/image-1@2x.png"
        />

        <div class="home-dashboard-inner">
          <div class="frame-parent400">
            <div class="selamat-datang-wrapper5">
              <div class="selamat-datang11">Selamat Datang!</div>
            </div>
            <img
              class="frame-icon58"
              loading="lazy"
              alt=""
              src="./image/frame6.svg"
              id="frame"
            />
          </div>
        </div>
      </header>
      <div class="home-dashboard-parent4">
        <input
          class="home-dashboard8"
          placeholder="Home / Dashboard"
          type="text"
        />

        <div class="frame-child1055"></div>
        <img class="frame-icon59" alt="" src="./image/frame-31.svg" />
      </div>
      <section class="ubah-perusahaan-inner">
        <form class="firm-name-label-parent">
          <div class="firm-name-label">
            <div class="ubah-perusahaan-wrapper">
              <b class="ubah-perusahaan1">Ubah Perusahaan</b>
            </div>
            <div class="rectangle-parent609">
              <div class="frame-child1056"></div>
              <div class="frame-parent401">
                <div class="labels-input-parent">
                  <div class="labels-input">
                    <div class="nama20">Nama</div>
                  </div>
                  <div class="rectangle-wrapper55">
                    <input class="frame-child1057"
                    placeholder
                    type="text"/>
                  </div>
                </div>
                <div class="frame-parent402">
                  <div class="alamat-wrapper1">
                    <div class="alamat16">Alamat</div>
                  </div>
                  <div class="rectangle-wrapper56">
                    <input class="frame-child1058"
                    placeholder
                    type="text"/>
                  </div>
                </div>
              </div>
              <div class="save-cancel-buttons-parent">
                <div class="save-cancel-buttons">
                  <div class="npwp6">NPWP</div>
                </div>
                <div class="input-field3">
                  <div class="save-button10"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="cancel-button16">
            <div class="frame-parent403">
              <a href="perusahaan.php" class="rectangle-parent610" id="groupButton">
                <div class="frame-child1059"></div>
                <b class="simpan34">Simpan</b>
              </a>
              <a href="perusahaan.php" class="rectangle-parent611" id="groupButton1">
                <div class="frame-child1060"></div>
                <b class="batal43">Batal</b>
              </a>
            </div>
          </div>
        </form>
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
          window.location.href = "./perusahaan.php";
        });
      }
      
      var groupButton1 = document.getElementById("groupButton1");
      if (groupButton1) {
        groupButton1.addEventListener("click", function (e) {
          window.location.href = "./perusahaan.php";
        });
      }
      </script>
  </body>
</php>
