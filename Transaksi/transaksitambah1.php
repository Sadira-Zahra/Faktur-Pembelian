<html>
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
        width: 80%;
        background-color: #fff;
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
</style>
<h3> SHOP AND DRIVE </h3>

<form action="" method="post">
<table>
    <h4>TAMBAH TRANSAKSI</h4>
    <tr>
        <td> No Faktur </td>
        <td> <input type="string" name="No_Faktur"> </td>
    </tr>

    <tr>
        <td> KM Terakhir</td>
        <td> <input type="number" name="KM_Terakhir"> </td>
    </tr>

     <tr>
        <td> Tanggal</td>
        <td> <input type="date" name="Tanggal"> </td>
    </tr>

     <tr>
        <td> Total 1</td>
        <td> <input type="number" name="Total_1"> </td>
    </tr>

     <tr>
        <td> Total 2</td>
        <td> <input type="number" name="Total_2"> </td>
    </tr>

    <tr>
        <td> Voucher</td>
        <td> <input type="number" name="Voucher"> </td>
    </tr>


        <tr><td> 
        NPWP Perusahaan
        <td><select name="NPWP_Perusahaan" style="width:170px;">
        <option value="">--Pilih--</option>
        <?php
        include '../koneksi.php';
        $query=mysqli_query($conn, "SELECT * FROM perusahaan");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          
            <option value="<?php echo $data['NPWP_Perusahaan'];?>" >
            <?php echo $data['Nama_Perusahaan'];?></option>
        <?php
        }
        ?></td>
        </select>
        </td></tr>

        <tr>
        <td> 
        Nama Customer
        <td><select name="ID_Customer" style="width:170px;">
        <option value="">--Pilih--</option>
        <?php
        include '../koneksi.php';
        $query=mysqli_query($conn, "SELECT * FROM customer");
       
        while ($data = mysqli_fetch_array($query)) {
        ?>
            
            <option value="<?php echo $data['ID_Customer'];?>" >
            <?php echo $data['Nama_Customer'];?></option>
        <?php
        }
        ?></td>
        </select>
        </td></tr>

    <tr>
        <td><a class="kembali" href="transaksi1.php">Kembali</a></td>
        <td><input type="submit" name="proses" value="Simpan Nota"> </td>
    </tr>
</form>
</table>
</html>
<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
  
    $No_Faktur = $_POST['No_Faktur'];
    $KM_Terakhir = $_POST['KM_Terakhir'];
    $Tanggal = $_POST['Tanggal'];
    $Total_1 = $_POST['Total_1'];
    $Total_2 = $_POST['Total_2'];
    $Voucher = $_POST['Voucher'];
    $NPWP_Perusahaan = $_POST['NPWP_Perusahaan'];
    $ID_Customer = $_POST['ID_Customer'];

    
    
    mysqli_query($conn, "INSERT INTO faktur VALUES ('$No_Faktur','$KM_Terakhir','$Tanggal','$Total_1','$Total_2','$Voucher','$NPWP_Perusahaan','$ID_Customer')");
    
        // Gunakan nilai $kodenota untuk keperluan selanjutnya
        echo "<script>window.location.href = 'transaksi1.php?No_Faktur=".$No_Faktur."';</script>";

    
}
?>