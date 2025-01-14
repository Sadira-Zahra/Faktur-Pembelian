<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/barang2.css" />
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
    <div class="barang28">
      <header class="barang-container1">
        <div class="barang-container-child"></div>
        <img
          class="image-1-icon17"
          loading="lazy"
          alt=""
          src="../image/image-1@2x.png"
        />

        <div class="barang-container-inner">
          <div class="frame-parent434">
            <div class="selamat-datang-wrapper9">
              <div class="selamat-datang16">Selamat Datang!</div>
            </div>
            <img
              class="frame-icon78"
              loading="lazy"
              alt=""
              src="../image/frame6.svg"
              id="frame"
            />
          </div>
        </div>
      </header>
      <main class="barang-option-parent">
        <div class="barang-option">
          <div class="rectangle-parent638">
            <div class="frame-child1101"></div>
            <div class="background-color">
              <div class="frame-parent435">
                <div class="frame-parent436">
                  <div class="photo-by-oleg-ivanov-parent1">
                    <img
                      class="photo-by-oleg-ivanov6"
                      loading="lazy"
                      alt=""
                      src="../image/photo-by-oleg-ivanov@2x.png"
                      id="photoByOlegIvanov"
                    />

                    <div class="frame-wrapper172">
                      <div class="sadira-zahra-parent1">
                        <div class="sadira-zahra5" id="sadiraZahraText">
                          Sadira Zahra
                        </div>
                        <div class="frame-wrapper173">
                          <div class="frame-parent437">
                            <div class="i-d-label-wrapper">
                              <img
                                class="i-d-label3"
                                alt=""
                                src="../image/frame-11.svg"
                              />
                            </div>
                            <div class="online5">Online</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="action-button2">
                    <div class="action-button-child"></div>
                    <img
                      class="frame-icon79"
                      alt=""
                      src="../image/frame-21.svg"
                    />

                    <input
                      class="action-button-item"
                      placeholder="Search"
                      type="text"
                    />
                  </div>
                </div>
                <div class="dashboard-wrapper5">
                  <div class="dashboard59">
                    <a href="../dashboard1.php" class="dashboard60" style="text-decoration:none;color:white">Dashboard</a>
                    <p class="blank-line9">&nbsp;</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-parent438">
              <div class="faq-frame">
                <div class="faq8">FAQ</div>
              </div>
              <div class="tentang-kami-wrapper17">
                <b class="tentang-kami29">Tentang Kami</b>
              </div>
              <div class="perusahaan-wrapper1">
                <a href="../Perusahaan/perusahaan.php" class="perusahaan7" id="perusahaanText" style="text-decoration:none;color:white">Perusahaan</a>
              </div>
              <div class="transaksi-frame">
                <a href="../Transaksi/transaksi.php" class="transaksi8" id="transaksiText" style="text-decoration:none;color:white">Transaksi</a>
              </div>
              <div class="customer-wrapper14">
                <a href="../Customer/customer3.php" class="customer39" id="customerText" style="text-decoration:none;color:white">Customer</a>
              </div>
              <div class="rectangle-parent639">
                <div class="frame-child1102"></div>
                <input class="barang29" placeholder="Barang" type="text" />
              </div>
            </div>
          </div>
        </div>
        
          <div class="frame-parent439">
            <div class="nama-harga-satuan-wrapper">
              <div class="nama-harga-satuan">
                
                <div class="home-dashboard-label">
                  <div class="action-label2">
                    

                    <div class="home-dashboard-wrapper">
                      
                    </div>
                  </div>
                  <div class="harga10">
                    <div class="satuan">
                      <div class="data-barang-wrapper">
                        
                      </div>
                      
<form>

<h4>TABEL BARANG</h4>
<a class="kembali" href="tambah-barang.php">Tambah Barang </a>|<a class="kembali" href="../home.php">Kembali</a>
<table border="1" align="center" width="100%">
    <tr bgcolor="green">
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Harga Satuan</th>
        <th>Aksi</th>
    </tr>
    <tr>
        <?php
            include '../koneksi.php';
            $limit = 10; // Jumlah baris per halaman
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;
        
            $query = mysqli_query($conn, "SELECT * FROM barang LIMIT $start, $limit");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['ID_Barang']   ;?></td>
                <td><?php echo $data['Nama_Barang'] ;?></td>
                <td><?php echo $data['Harga_Satuan'] ;?></td>
                <td>
        <a class="edit" href="ubah-barang.php?ID_Barang=<?php echo $data['ID_Barang'];?>" >Edit</a> |
        <a class="hapus" href="obathapus.php?ID_Barang=<?php echo $data['ID_Barang']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>        
      </td>
            </tr>
            </tr>
            <?php } ?>

</table>

        <div class="pagination">
            <?php
            $query_total = mysqli_query($conn, "SELECT COUNT(*) as total FROM barang");
            $data_total = mysqli_fetch_assoc($query_total);
            $total_pages = ceil($data_total['total'] / $limit);

            if ($page > 1) {
                echo '<a href="?page=' . ($page - 1) . '">Back</a>';
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    echo '<a href="?page=' . $i . '" class="current">' . $i . '</a>';
                } else {
                    echo '<a href="?page=' . $i . '">' . $i . '</a>';
                }
            }

            if ($page < $total_pages) {
                echo '<a href="?page=' . ($page + 1) . '">Next</a>';
            }
            ?>
</div>
</form>                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="frame-wrapper175">
              <div class="circular-button-parent">
                <a href="tambah-barang.php" ></a>
                
              </div>
            </button>
          </div>
        </section>
      </main>
    </div>

    <script>
      var frame = document.getElementById("frame");
      if (frame) {
        frame.addEventListener("click", function (e) {
          window.location.href = "./profile.php";
        });
      }
      
      var photoByOlegIvanov = document.getElementById("photoByOlegIvanov");
      if (photoByOlegIvanov) {
        photoByOlegIvanov.addEventListener("click", function (e) {
          window.location.href = "./profile.php";
        });
      }
      
      var sadiraZahraText = document.getElementById("sadiraZahraText");
      if (sadiraZahraText) {
        sadiraZahraText.addEventListener("click", function (e) {
          window.location.href = "./profile.php";
        });
      }
      
      var perusahaanText = document.getElementById("perusahaanText");
      if (perusahaanText) {
        perusahaanText.addEventListener("click", function (e) {
          window.location.href = "./perusahaan.php";
        });
      }
      
      var transaksiText = document.getElementById("transaksiText");
      if (transaksiText) {
        transaksiText.addEventListener("click", function (e) {
          window.location.href = "./transaksi.php";
        });
      }
      
      var customerText = document.getElementById("customerText");
      if (customerText) {
        customerText.addEventListener("click", function (e) {
          window.location.href = "./customer3.php";
        });
      }
      
      var frame1 = document.getElementById("frame1");
      if (frame1) {
        frame1.addEventListener("click", function (e) {
          window.location.href = "./dashboard1.php";
        });
      }
      
      var vectorIcon = document.getElementById("vectorIcon");
      if (vectorIcon) {
        vectorIcon.addEventListener("click", function (e) {
          window.location.href = "./ubah-barang.php";
        });
      }
      
      var fAQCustomer = document.getElementById("fAQCustomer");
      if (fAQCustomer) {
        fAQCustomer.addEventListener("click", function (e) {
          window.location.href = "./tambah-barang.php";
        });
      }
      </script>
  </body>
</php>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    
    h3 {
        color: #333;
        text-align: center;
        margin-top: 20px;
    }
    
    form {
        margin: 20px auto;
        width: 100%;
        padding: 50px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }
    
    table td {
        padding: 10px;
        border: 1px solid #ccc;
    }
    
    table th {
        padding: 10px;
        background-color: #333;
        color: #fff;
        border: 1px solid #ccc;
    }
    
    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    input[type="text"] {
        padding: 5px;
        width: 100%;
        box-sizing: border-box;
    }
    
    input[type="submit"] {
        padding: 8px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #555;
    }
    
    .edit,
    .hapus,
    .kembali {
        padding: 7.5px 10px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
    }
    
    .edit:hover,
    .hapus:hover,
    .kembali:hover {
        background-color: #555;
    }
    
    .edit {
        margin-right: 5px;
    }
    
    .kembali {
        margin-top: 1px;
    }
    
    .kembali:hover {
        background-color: #f2f2f2;
        color: #333;
    }

    .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            font-size: 14px;
            margin-right: 5px;
        }

        .pagination a.current {
            background-color: #555;
        }
</style>