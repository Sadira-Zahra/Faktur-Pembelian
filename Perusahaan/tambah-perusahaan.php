<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/tambah-perusahaan.css" />
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
    <div class="tambah-perusahaan">
      <header class="rectangle-parent581">
        <div class="frame-child1005"></div>
        <img
          class="image-1-icon4"
          loading="lazy"
          alt=""
          src="./image/image-1@2x.png"
        />

        <div class="frame-wrapper140">
          <div class="name-field-parent">
            <div class="name-field3">
              <div class="selamat-datang6">Selamat Datang!</div>
            </div>
            <img
              class="n-p-w-p-field"
              loading="lazy"
              alt=""
              src="./image/frame6.svg"
              id="nPWPField"
            />
          </div>
        </div>
      </header>
      <div class="home-dashboard-group">
        <input
          class="home-dashboard2"
          placeholder="Home / Dashboard"
          type="text"
        />

        <div class="frame-child1006"></div>
        <img class="frame-icon46" alt="" src="./image/frame-31.svg" />
      </div>
      <section class="tambah-perusahaan-inner">
        <form class="name-field-wrapper-parent">
          <div class="name-field-wrapper">
            <div class="company-name-input2">
              <b class="tambah-perusahaan1">Tambah Perusahaan</b>
            </div>
            <div class="rectangle-parent582">
              <div class="frame-child1007"></div>
              <div class="frame-parent379">
                <div class="frame-parent380">
                  <div class="nama-container">
                    <div class="nama17">Nama</div>
                  </div>
                  <div class="nested-n-p-w-p-field">
                    <input class="nested-n-p-w-p-field-child"
                    placeholder
                    type="text"/>
                  </div>
                </div>
                <div class="frame-parent381">
                  <div class="alamat-frame">
                    <div class="alamat13">Alamat</div>
                  </div>
                  <div class="rectangle-wrapper54">
                    <input class="frame-child1008"
                    placeholder
                    type="text"/>
                  </div>
                </div>
              </div>
              <div class="frame-parent382">
                <div class="npwp-wrapper">
                  <div class="npwp1">NPWP</div>
                </div>
                <div class="cancel-button-label">
                  <input class="cancel-button-label-child"
                  placeholder
                  type="text"/>
                </div>
              </div>
            </div>
          </div>
          <div class="save-company-form-wrapper">
            <div class="save-company-form">
              <a href="perusahaan.php" class="rectangle-parent583" id="groupButton">
                <div class="frame-child1009"></div>
                <b class="simpan29">Simpan</b>
</a>
              <a href="perusahaan.php" class="rectangle-parent584" id="groupButton1">
                <div class="frame-child1010"></div>
                <b class="batal38">Batal</b>
</a>
            </div>
          </div>
        </form>
      </section>
    </div>

    <script>
      var nPWPField = document.getElementById("nPWPField");
      if (nPWPField) {
        nPWPField.addEventListener("click", function (e) {
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
