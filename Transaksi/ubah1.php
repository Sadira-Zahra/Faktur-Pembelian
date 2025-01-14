<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from faktur where No_Faktur = '$_GET[No_Faktur]'");
            $data = mysqli_fetch_array($query);
            
                ?>
  
  <html>
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
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
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
<h3>SHOP AND DRIVE</h3>
<form action="" method="post">
<table>
    <h4>UBAH TRANSAKSI</h4>
    <tr>
        <td> No Faktur</td>
        <td> <input type="text" name="No_Faktur" value="<?php echo $data['No_Faktur'];?>" readonly> </td>
    </tr>

    <tr>
        <td> KM Terakhir </td>
        <td> <input type="number" name="KM_Terakhir" value="<?php echo $data['KM_Terakhir'];?>"> </td>
    </tr>

    <tr>
        <td> Tanggal </td>
        <td> <input type="date" name="Tanggal" value="<?php echo $data['Tanggal'];?>"> </td>
    </tr>

    <tr>
        <td> Total 1 </td>
        <td> <input type="text" name="Total_1" value="<?php echo $data['Total_1'];?>"> </td>
    </tr>

    <tr>
        <td> Total 2 </td>
        <td> <input type="text" name="Total_2" value="<?php echo $data['Total_2'];?>"> </td>
    </tr>

    <tr>
        <td> Voucher </td>
        <td> <input type="text" name="Voucher" value="<?php echo $data['Voucher'];?>"> </td>
    </tr>
    

    <tr><td> 
        Nama Perusahaan
        <td><select name="NPWP_Perusahaan" style="width:170px;">
        <?php
        include '../koneksi.php';
        $ambilperusahaan=mysqli_query($conn, "SELECT * FROM perusahaan");
        while ($perusahaan = mysqli_fetch_array($ambilperusahaan)) {
            $selected = ($data['NPWP_Perusahaan'] == $perusahaan['NPWP_Perusahaan']) ? 'selected' : '';
            echo "<option value='$perusahaan[NPWP_Perusahaan]' $selected>$perusahaan[Nama_Perusahaan]</option>";
        }
        ?></td>
        </select>
        </td></tr>

        <tr><td> 
        Nama Customer
        <td><select name="ID_Customer" style="width:170px;">
        <?php
        include '../koneksi.php';
        $ambilcustomer=mysqli_query($conn, "SELECT * FROM customer");
        while ($customer = mysqli_fetch_array($ambilcustomer)) {
            $selected = ($data['ID_Customer'] == $customer['ID_Customer']) ? 'selected' : '';
            echo "<option value='$customer[ID_Customer]' $selected>$customer[Nama_Customer]</option>";
        }
        ?></td>
        </select>
        </td></tr>

    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah Transaksi"><a class="kembali" href="transaksi1.php">Kembali</a> </td>
    </tr>
    </table>
</form>

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
    
    
    mysqli_query($conn, "UPDATE faktur set KM_Terakhir='$KM_Terakhir',Tanggal='$Tanggal',Total_1='$Total_1',Total_2='$Total_2',
                            Voucher='$Voucher',NPWP_Perusahaan='$NPWP_Perusahaan',ID_Customer='$ID_Customer' where No_Faktur='$No_Faktur'");
    echo '<script>window.location.href = "transaksi1.php";</script>';
}
