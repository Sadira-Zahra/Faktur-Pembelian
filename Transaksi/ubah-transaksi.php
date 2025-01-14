<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/ubah-transaksi.css" />
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
    <div class="ubah-transaksi">
      <section class="ubah-transaksi-button">
        <header class="rectangle-parent591">
          <div class="frame-child1023"></div>
          <img
            class="image-1-icon6"
            loading="lazy"
            alt=""
            src="./image/image-1@2x.png"
          />

          <div class="frame-wrapper143">
            <div class="frame-parent389">
              <div class="selamat-datang-wrapper2">
                <div class="selamat-datang8">Selamat Datang!</div>
              </div>
              <img
                class="frame-icon51"
                loading="lazy"
                alt=""
                src="./image/frame6.svg"
                id="frame"
              />
            </div>
          </div>
        </header>
        <div class="home-dashboard-parent1">
          <input
            class="home-dashboard4"
            placeholder="Home / Dashboard"
            type="text"
          />

          <div class="frame-child1024"></div>
          <img class="frame-icon52" alt="" src="./image/frame-31.svg" />
        </div>
      </section>
      <section class="ubah-transaksi-inner">
        <form class="change-transaction-btn-parent">
          <div class="change-transaction-btn">
            <b class="ubah-transaksi1">Ubah Transaksi</b>
          </div>
          <div class="frame-parent390">
            <div class="no-faktur-wrapper2">
              <div class="no-faktur9">No. Faktur</div>
            </div>
            <div class="km-terakhir-wrapper">
              <div class="km-terakhir1">KM Terakhir</div>
            </div>
            <div class="frame-parent391">
              <div class="total-1-wrapper">
                <div class="total-11">Total 1</div>
              </div>
              <div class="n-p-w-p-txt">
                <div class="total-2-wrapper">
                  <div class="total-21">Total 2</div>
                </div>
                <div class="frame-parent392">
                  <footer class="voucher-container">
                    <div class="voucher1">Voucher</div>
                  </footer>
                  <div class="frame-parent393">
                    <div class="npwp-frame">
                      <div class="npwp3">NPWP</div>
                    </div>
                    <div class="nama-customer14">Nama_Customer</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rectangle-parent592">
              <div class="frame-child1025"></div>
              <input class="frame-child1026"
              placeholder
              type="text"/>
              <input class="frame-child1027"
              placeholder
              type="text"/>
              <input class="frame-child1028"
              placeholder
              type="text"/>
              <input class="frame-child1029"
              placeholder
              type="text"/>
              <input class="frame-child1030"
              placeholder
              type="text"/>
              <select name="npwp" class="rectangle-parent593" style="font-size: 25px;padding-left:15px">
                <option value="default" selected>Pilih</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
              </select>
              <select name="nama-customer" class="rectangle-parent594"  style="font-size: 25px;padding-left:15px">
              <option value="04" selected>Pilih</option>
                <option value="01">sadira</option>
                <option value="02">zahra</option>
                <option value="03">aydin</option>
              </select>
            </div>
          </div>
          <div class="frame-wrapper144">
            <div class="frame-parent394">
              <a href="transaksi.php" class="rectangle-parent595" id="groupButton" style="text-decoration:none;color:black" >
                <div class="frame-child1033"></div>
                <b class="simpan31">Simpan</b>
</a>
              <a href="transaksi.php" class="rectangle-parent596" id="groupButton1" style="text-decoration:none;color:black">
                <div class="frame-child1034"></div>
                <b class="batal40">Batal</b>
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
