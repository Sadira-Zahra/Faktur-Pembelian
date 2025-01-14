<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/tambah-transaksi.css" />
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
    <div class="tambah-transaksi">
      <section class="frame-parent383">
        <header class="rectangle-parent585">
          <div class="frame-child1011"></div>
          <img
            class="image-1-icon5"
            loading="lazy"
            alt=""
            src="./image/image-1@2x.png"
          />

          <div class="frame-wrapper141">
            <div class="frame-parent384">
              <div class="selamat-datang-wrapper1">
                <div class="selamat-datang7">Selamat Datang!</div>
              </div>
              <img
                class="frame-icon47"
                loading="lazy"
                alt=""
                src="./image/frame6.svg"
                id="frame"
              />
            </div>
          </div>
        </header>
        <div class="home-dashboard-container">
          <input
            class="home-dashboard3"
            placeholder="Home / Dashboard"
            type="text"
          />

          <div class="frame-child1012"></div>
          <img class="frame-icon48" alt="" src="./image/frame-31.svg" />
        </div>
      </section>
      <img class="frame-icon49" alt="" src="./image/frame7.svg" />

      <section class="tambah-transaksi-inner">
        <div class="frame-parent385">
          <div class="tambah-transaksi-wrapper">
            <b class="tambah-transaksi1">Tambah Transaksi</b>
          </div>
          <div class="last-invoice-label">
            <div class="no-faktur8">No. Faktur</div>
            <div class="km-terakhir">KM Terakhir</div>
            <div class="total-1-parent">
              <div class="total-1">Total 1</div>
              <div class="total-2">Total 2</div>
            </div>
            <div class="frame-parent386">
              <div class="voucher-wrapper">
                <div class="voucher">Voucher</div>
              </div>
              <div class="frame-parent387">
                <div class="npwp-container">
                  <div class="npwp2">NPWP</div>
                </div>
                <div class="nama-customer13">Nama_Customer</div>
              </div>
            </div>
            <div class="rectangle-parent586">
              <div class="frame-child1013"></div>
              <div class="frame-child1014"></div>
              <div class="frame-child1015"></div>
              <div class="frame-child1016"></div>
              <div class="frame-child1017"></div>
              <div class="frame-child1018"></div>
              <select name="npwp" class="rectangle-parent587" style="font-size: 25px;padding-left:15px">
                <option value="default" selected>Pilih</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
              </select>
              <select name="nama-customer" class="rectangle-parent588"  style="font-size: 25px;padding-left:15px">
              <option value="04" selected>Pilih</option>
                <option value="01">sadira</option>
                <option value="02">zahra</option>
                <option value="03">aydin</option>
              </select>
            </div>
          </div>
          <div class="frame-wrapper142">
            <div class="frame-parent388">
              <button class="rectangle-parent589" id="groupButton">
                <div class="frame-child1021"></div>
                <b class="simpan30">Simpan</b>
              </button>
              <button class="rectangle-parent590" id="groupButton1">
                <div class="frame-child1022"></div>
                <b class="batal39">Batal</b>
              </button>
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
          window.location.href = "./transaksi.php";
        });
      }
      
      var groupButton1 = document.getElementById("groupButton1");
      if (groupButton1) {
        groupButton1.addEventListener("click", function (e) {
          window.location.href = "./transaksi.php";
        });
      }
      </script>
  </body>
</php>
