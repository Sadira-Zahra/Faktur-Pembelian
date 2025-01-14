<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/ubah-customer.css" />
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
    <div class="ubah-customer1">
      <section class="frame-parent395">
        <header class="rectangle-parent597">
          <div class="frame-child1035"></div>
          <img
            class="image-1-icon7"
            loading="lazy"
            alt=""
            src="./image/image-1@2x.png"
          />

          <div class="frame-wrapper145">
            <div class="frame-parent396">
              <div class="selamat-datang-wrapper3">
                <div class="selamat-datang9">Selamat Datang!</div>
              </div>
              <img
                class="frame-icon54"
                loading="lazy"
                alt=""
                src="./image/frame6.svg"
                id="frame"
              />
            </div>
          </div>
        </header>
        <div class="home-dashboard-parent2">
          <input
            class="home-dashboard5"
            placeholder="Home / Dashboard"
            type="text"
          />

          <div class="frame-child1036"></div>
          <img class="frame-icon55" alt="" src="./image/frame-31.svg" />
        </div>
      </section>
      <section class="ubah-customer-inner">
        <form class="ubah-customer-label-parent">
          <div class="ubah-customer-label">
            <div class="name-i-d-container">
              <b class="ubah-customer2">Ubah Customer</b>
            </div>
            <div class="rectangle-parent598">
              <div class="frame-child1037"></div>
              <div class="frame-wrapper146">
                <div class="nama-group">
                  <div class="nama18">Nama</div>
                  <div class="id3">ID</div>
                  <div class="npwp-parent">
                    <div class="npwp4">NPWP</div>
                    <div class="alamat14">Alamat</div>
                    <div class="no-pol2">No. Pol</div>
                  </div>
                </div>
              </div>
              <div class="rectangle-parent599">
                <input class="frame-child1038"
                placeholder
                type="text"/>
                <input class="frame-child1039"
                placeholder
                type="text"/>
                <div class="rectangle-parent600">
                  <input class="frame-child1040"
                  placeholder
                  type="text"/>
                  <input class="frame-child1041"
                  placeholder
                  type="text"/>
                  <input class="frame-child1042"
                  placeholder
                  type="text"/>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-wrapper147">
            <div class="frame-parent397">
              <a href="customer3.php" class="rectangle-parent601" id="groupButton" style="text-decoration:none;color:black">
                <div class="frame-child1043"></div>
                <b class="simpan32">Simpan</b>
</a>
              <a href="customer3.php" class="rectangle-parent602" id="groupButton1" style="text-decoration:none;color:black">
                <div class="frame-child1044"></div>
                <b class="batal41">Batal</b>
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
          window.location.href = "./customer3.php";
        });
      }
      
      var groupButton1 = document.getElementById("groupButton1");
      if (groupButton1) {
        groupButton1.addEventListener("click", function (e) {
          window.location.href = "./customer3.php";
        });
      }
      </script>
  </body>
</php>
