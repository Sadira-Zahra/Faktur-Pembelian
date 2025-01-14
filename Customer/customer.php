<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/customer3.css" />
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
    <div class="customer38">
      <header class="rectangle-parent634">
        <div class="frame-child1096"></div>
        <img
          class="image-1-icon16"
          loading="lazy"
          alt=""
          src="../image/image-1@2x.png"
        />

        <div class="frame-wrapper167">
          <div class="customer-data-parent">
            <div class="customer-data">
              <div class="selamat-datang15">Selamat Datang!</div>
            </div>
            <img
              class="frame-icon71"
              loading="lazy"
              alt=""
              src="../image/frame6.svg"
              id="frame"
            />
          </div>
        </div>
      </header>
      <button class="customer-child">
        <div class="user-avatar-parent">
          
          
           
           
        </div>
      </button>
      
      <section class="action-label1" style="background-color: #c3d0ff;top: 46px; width: 70%; left: 415px;">

<form>

<h4>TABEL CUSTOMER</h4>
<a class="kembali" href="tambah-customer.php">Tambah Customer </a>|<a class="kembali" href="../home.php">Kembali</a>
<table border="1" align="center" width="100%">
    <tr bgcolor="green">
        <th>Nama Customer</th>
        <th>ID Customer</th>
        <th>NPWP Customer</th>
        <th>Alamat Customer</th>
        <th>No pol</th>
        <th style="width: 150px;">Aksi</th>
  
    </tr>
    <tr>
        <?php
            include '../koneksi.php';
            $limit = 10; // Jumlah baris per halaman
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;
        
            $query = mysqli_query($conn, "SELECT * FROM customer LIMIT $start, $limit");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['Nama_Customer']   ;?></td>
                <td><?php echo $data['ID_Customer'] ;?></td>
                <td><?php echo $data['NPWP_Customer'] ;?></td>
                <td><?php echo $data['Alamat_Customer'] ;?></td>
                <td><?php echo $data['No_Pol'] ;?></td>
                <td>
        <a class="edit" href="ubah-customer.php?NPWP_Customer=<?php echo $data['NPWP_Customer'];?>" >Edit</a> |
        <a class="hapus" href="hapuscustomer.php?NPWP_Customer=<?php echo $data['NPWP_Customer']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>        
      </td>
            </tr>
            </tr>
            <?php } ?>

</table>

        <div class="pagination">
            <?php
            $query_total = mysqli_query($conn, "SELECT COUNT(*) as total FROM customer");
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

        <div class="action-label-child"></div>
          <a href="ubah-customer.php" class="frame-child1097"></a>
          
      </section>
      
     
      <div class="customer-option" style="top:100px;height:950px;background-color: var(--color-cornflowerblue-400)">
        <div class="rectangle-parent637">
          <div class="frame-child1099"></div>
          <div class="f-a-q-header">
            <div class="frame-parent430">
              <div class="frame-parent431">
                <div class="photo-by-oleg-ivanov-container">
                  <img
                    class="photo-by-oleg-ivanov5"
                    loading="lazy"
                    alt=""
                    src="../image/photo-by-oleg-ivanov@2x.png"
                    id="photoByOlegIvanov"
                  />

                  <div class="frame-wrapper168">
                    <div class="sadira-zahra-container">
                      <div class="sadira-zahra4" id="sadiraZahraText">
                        Sadira Zahra
                      </div>
                      <div class="frame-wrapper169">
                        <div class="frame-parent432">
                          <div class="frame-wrapper170">
                            <img
                              class="frame-icon75"
                              alt=""
                              src="../image/frame-11.svg"
                            />
                          </div>
                          <div class="online4">Online</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="f-a-q-title-parent">
                  <div class="f-a-q-title"></div>
                  <img
                    class="frame-icon76"
                    alt=""
                    src="../image/frame-21.svg"
                  />

                  <input class="search1" placeholder="Search" type="text" />
                </div>
              </div>
              <div class="dashboard-wrapper4">
                <div class="dashboard57" id="dashboardText">
                  <a href="../dashboard1.php" class="dashboard58" style="text-decoration:none;color:white" >Dashboard</a>
                  <p class="blank-line8">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-wrapper171">
            <div class="faq-container">
              <div class="faq7">FAQ</div>
              <b class="tentang-kami28">Tentang Kami</b>
              <div class="company-label">
                <a href="../Perusahaan/perusahaan.php" class="perusahaan6" id="perusahaanText" style="text-decoration:none;color:white" >Perusahaan</a>
              </div>
              <a href="../Transaksi/transaksi.php" class="transaksi7" id="transaksiText" style="text-decoration:none;color:white">Transaksi</a>
            </div>
          </div>
          <div class="frame-parent433">
            <input class="frame-child1100" placeholder="Customer" type="text" />

            <div class="barang-wrapper1">
              <a href="../Barang/barang.php"  class="barang27" id="barangText" style="text-decoration:none;color:white">Barang</a>
            </div>
          </div>
        </div>
      </div>
      
        <div  class="dashboard-title-child"></div>
        <a href="ubah-customer.php">

          <img class="vector-icon88" alt="" src="../image/vector6.svg" />
        </a>

        
          <img class="frame-icon77" alt="" src="../image/frame-42.svg" />
        
      </section>
    </div>

    <script>
      var frame = document.getElementById("frame");
      if (frame) {
        frame.addEventListener("click", function (e) {
          window.location.href = "./profile.php";
        });
      }
      
      var frame = document.getElementById("frame");
      if (frame) {
        frame.addEventListener("click", function (e) {
          window.location.href = "./tambah-customer.php";
        });
      }
      
      var vectorIcon = document.getElementById("vectorIcon");
      if (vectorIcon) {
        vectorIcon.addEventListener("click", function (e) {
          window.location.href = "./ubah-customer.php";
        });
      }
      
      var frame1 = document.getElementById("frame1");
      if (frame1) {
        frame1.addEventListener("click", function (e) {
          window.location.href = "./dashboard1.php";
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
      
      var dashboardText = document.getElementById("dashboardText");
      if (dashboardText) {
        dashboardText.addEventListener("click", function (e) {
          window.location.href = "./dashboard1.php";
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
      
      var barangText = document.getElementById("barangText");
      if (barangText) {
        barangText.addEventListener("click", function (e) {
          window.location.href = "./barang2.php";
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
        margin: 100px auto;
        width: 80%;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
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
