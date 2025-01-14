<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from perusahaan where NPWP_Perusahaan= '$_GET[NPWP_Perusahaan]'");
            $data = mysqli_fetch_array($query);
            
                ?>
  
  <html>

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
          src="../image/image-1@2x.png"
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
              src="../image/frame6.svg"
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
        <img class="frame-icon59" alt="" src="../image/frame-31.svg" />
      </div>
      <section class="ubah-perusahaan-inner" style="height:900px">
        
          <div class="firm-name-label">
            <div class="ubah-perusahaan-wrapper">
              
            </div>
            <form action="" method="post" style="width:900px">
<table>
    <h4>UBAH PERUSAHAAN</h4>
    <tr>
        <td> Nama Perusahaan </td>
        <td> <input type="text" name="Nama_Perusahaan" value="<?php echo $data['Nama_Perusahaan'];?>"> </td>
    </tr>

    <tr>
        <td> NPWP Perusahaan </td>
        <td> <input type="number" name="NPWP_Perusahaan" value="<?php echo $data['NPWP_Perusahaan'];?>" readonly> </td>
    </tr>

    <tr>
        <td> Alamat Perusahaan </td>
        <td> <input type="text" name="Alamat_Perusahaan" value="<?php echo $data['Alamat_Perusahaan'];?>"> </td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah Perusahaan">|<a class="kembali" href="perusahaan.php">kembali</a> </td>
    </tr>
</form>
</table>

</html>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
    $Nama_Perusahaan = $_POST['Nama_Perusahaan'];
    $NPWP_Perusahaan = $_POST['NPWP_Perusahaan'];
    $Alamat_Perusahaan = $_POST['Alamat_Perusahaan'];

    
    
    mysqli_query($conn, "update perusahaan set 
                            Nama_Perusahaan='$Nama_Perusahaan',Alamat_Perusahaan='$Alamat_Perusahaan' where NPWP_Perusahaan='$NPWP_Perusahaan'");
    header("location:perusahaan.php");
}
?>


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


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 20px;
    }

    h3 {
        color: #333;
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
      margin-left:190px;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
    }

    h4 {
        text-align: center;
        color: #666;
        font-size: 18px;
        margin-bottom: 10px;
    }

    tr {
        line-height: 2;
    }

    td:first-child {
        text-align: right;
        padding-right: 10px;
        color: #666;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 14px;
    }

    input[type="submit"] {
        padding: 8px 15px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 14px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .kembali {
        
        padding: 10px 10px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        font-size: 14px;
    }

    .kembali:hover {
        background-color: #555;
    }
</style>
