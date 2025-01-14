
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/data-pelanggan-simpan.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Source Sans Pro:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Baskervville:ital,wght@1,400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="data-pelanggan-simpan">
      <img class="dashboard-icon15" alt="" src="../public/dashboard.svg" />

      <section class="menu-utama-wrapper9">
        <div class="menu-utama16">
          <div class="menu-utama-child14"></div>
          <div class="profil14">
            <div class="vector-parent14">
              <img
                class="vector-icon54"
                loading="lazy"
                alt=""
                src="../public/vector1.svg"
              />

              <img class="vector-icon55" alt="" src="../public/vector-1.svg" />
            </div>
            <div class="bunga-nessa-maharani-wrapper11">
              <b class="bunga-nessa-maharani16">Bunga Nessa Maharani</b>
            </div>
          </div>
          <div class="add-button-parent">
            <div class="add-button8">
              <b class="beranda28" id="berandaText">Beranda</b>
            </div>
            <div class="add-button9">
              <b class="tentang-kami15" id="tentangKamiText">Tentang Kami</b>
            </div>
            <img class="vector-icon56" alt="" src="../public/vector-2.svg" />
          </div>
        </div>
      </section>
      <section class="data-pelanggan-simpan-inner">
        <div class="frame-parent98">
          <div class="pt-sinar-abadi-motor-wrapper10">
            <div class="pt-sinar-abadi15">PT Sinar Abadi Motor</div>
          </div>
          <div class="frame-parent99" width="100%">
            <div class="frame-child262">Data Pelanggan</div>
            <form action="">
              <table class="table table-striped">
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                  

                </tr>
                

                <tr>
                <?php
            include '../koneksi.php';
            $limit = 10; // Jumlah baris per halaman
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;
        
            $query = mysqli_query($conn, "SELECT * FROM pelanggan LIMIT $start, $limit");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['No_id'] ;?></td>
                <td><?php echo $data['Nama'] ;?></td>
                <td><?php echo $data['Alamat'] ;?></td>
                <td>
                <a class="edit" href="ubahpelanggan.php?No_id=<?php echo $data['No_id'];?>" >Edit</a> |
                <a class="hapus" href="hapuspelanggan.php?No_id=<?php echo $data['No_id']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>
            </td>
            </tr>
            </tr>
<?php } ?>
                </tr>

              </table>

            </form>

            
          </div>
        </div>
      </section>
    </div>

    <script>
      var berandaText = document.getElementById("berandaText");
      if (berandaText) {
        berandaText.addEventListener("click", function (e) {
          window.location.href = "../menu-utama.php";
        });
      }
      
      var tentangKamiText = document.getElementById("tentangKamiText");
      if (tentangKamiText) {
        tentangKamiText.addEventListener("click", function (e) {
          // Please sync "Tentang kami 2" to the project
        });
      }
      
      var groupButton = document.getElementById("groupButton");
      if (groupButton) {
        groupButton.addEventListener("click", function (e) {
          window.location.href = "./tambahpelanggan.php";
        });
      }
      
      var ubahText = document.getElementById("ubahText");
      if (ubahText) {
        ubahText.addEventListener("click", function (e) {
          window.location.href = "./ubahpelanggan.php";
        });
      }
      
      var hapusText = document.getElementById("hapusText");
      if (hapusText) {
        hapusText.addEventListener("click", function (e) {
          window.location.href = "./datapelanggan.php";
        });
      }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>
\