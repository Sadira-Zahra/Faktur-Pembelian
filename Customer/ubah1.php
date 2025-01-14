<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from customer where NPWP_Customer= '$_GET[NPWP_Customer]'");
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
    <h4>UBAH CUSTOMER</h4>
    <tr>
        <td> Nama Customer </td>
        <td> <input type="text" name="Nama_Customer" value="<?php echo $data['Nama_Customer'];?>"> </td>
    </tr>

    <tr>
        <td> ID Customer </td>
        <td> <input type="number" name="ID_Customer" value="<?php echo $data['ID_Customer'];?>"> </td>
    </tr>

    <tr>
        <td> NPWP Customer </td>
        <td> <input type="number" name="NPWP_Customer" value="<?php echo $data['NPWP_Customer'];?>" readonly> </td>
    </tr>

    <tr>
        <td> Alamat Customer </td>
        <td> <input type="text" name="Alamat_Customer" value="<?php echo $data['Alamat_Customer'];?>"> </td>
    </tr>

    <tr>
        <td> No Pol </td>
        <td> <input type="string" name="No_Pol" value="<?php echo $data['No_Pol'];?>"> </td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah Customer">|<a class="kembali" href="customer1.php">kembali</a> </td>
    </tr>
</form>
</table>

</html>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
    $Nama_Customer = $_POST['Nama_Customer'];
    $ID_Customer = $_POST['ID_Customer'];
    $NPWP_Customer = $_POST['NPWP_Customer'];
    $Alamat_Customer = $_POST['Alamat_Customer'];
    $No_Pol = $_POST['No_Pol'];

    
    
    mysqli_query($conn, "update customer set 
                            Nama_Customer='$Nama_Customer',ID_Customer='$ID_Customer',Alamat_Customer='$Alamat_Customer',No_Pol='$No_Pol' where NPWP_Customer='$NPWP_Customer'");
    echo '<script>window.location.href = "customer1.php";</script>';
}
?>