<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/tambah-customer.css" />
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
    <div class="tambah-customer1">
      <section class="frame-parent398">
        <header class="rectangle-parent603">
          <div class="frame-child1045"></div>
          <img
            class="image-1-icon8"
            loading="lazy"
            alt=""
            src="./image/image-1@2x.png"
          />

          <div class="name-i-d-label-wrapper">
            <div class="name-i-d-label">
              <div class="selamat-datang-wrapper4">
                <div class="selamat-datang10">Selamat Datang!</div>
              </div>
              <img
                class="frame-icon56"
                loading="lazy"
                alt=""
                src="./image/frame6.svg"
                id="frame"
              />
            </div>
          </div>
        </header>
        <div class="home-dashboard-parent3">
          <input
            class="home-dashboard6"
            placeholder="Home / Dashboard"
            type="text"
          />

          <div class="frame-child1046"></div>
          <img class="frame-icon57" alt="" src="./image/frame-31.svg" />
        </div>
      </section>
      <section class="customer-name-input-wrapper">
        <form class="customer-name-input">
          <div class="n-p-w-p-alamat-no-pol-input">
            <div class="add-customer-label">
              <b class="tambah-customer2">Tambah Customer</b>
            </div>
            <div class="rectangle-parent604">
              <div class="frame-child1047"></div>
              <div class="save-cancel2">
                <div class="nama-parent1">
                  <div class="nama19">Nama</div>
                  <div class="id4">ID</div>
                  <div class="n-p-w-p-alamat-no-pol">
                    <div class="npwp5">NPWP</div>
                    <div class="alamat15">Alamat</div>
                    <div class="no-pol3">No. Pol</div>
                  </div>
                </div>
              </div>
              <div class="rectangle-parent605">
                <div class="frame-child1048"></div>
                <div class="frame-child1049"></div>
                <div class="rectangle-parent606">
                  <div class="frame-child1050"></div>
                  <div class="frame-child1051"></div>
                  <div class="frame-child1052"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="customer-name-input-inner">
            <div class="frame-parent399">
              <a href="customer3.php" class="rectangle-parent607" id="groupButton" style="text-decoration:none;color:black">
                <div class="frame-child1053"></div>
                <b class="simpan33">Simpan</b>
</a>
              <a href="customer3.php" class="rectangle-parent608" id="groupButton1" style="text-decoration:none;color:black">
                <div class="frame-child1054"></div>
                <b class="batal42">Batal</b>
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
