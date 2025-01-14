<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from perusahaan where NPWP_Perusahaan= '$_GET[NPWP_Perusahaan]'");
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
<form action="" method="post">
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
        <td><input type="submit" name="proses" value="Ubah Perusahaan">|<a class="kembali" href="perusahaan1.php">kembali</a> </td>
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
    header("location:perusahaan1.php");
}
?>