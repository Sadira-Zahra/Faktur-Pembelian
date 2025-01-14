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
    <h4>TAMBAH CUSTOMER</h4>
    <tr>
        <td> Nama Customer </td>
        <td> <input type="text" name="Nama_Customer"> </td>
    </tr>

    <tr>
        <td> ID Customer </td>
        <td> <input type="number" name="ID_Customer"> </td>
    </tr>

    <tr>
        <td> NPWP Customer </td>
        <td> <input type="number" name="NPWP_Customer"> </td>
    </tr>

    <tr>
        <td> Alamat Customer </td>
        <td> <input type="text" name="Alamat_Customer"> </td>
    </tr>

    <tr>
        <td> No Pol </td>
        <td> <input type="string" name="No_Pol"> </td>
    </tr>

    <tr>
        <td><a class="kembali" href="customer1.php">Kembali</a></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>

</table>

</form>
</html>
<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
  
    $Nama_Customer = $_POST['Nama_Customer'];
    $ID_Customer = $_POST['ID_Customer'];
    $NPWP_Customer = $_POST['NPWP_Customer'];
    $Alamat_Customer = $_POST['Alamat_Customer'];
    $No_Pol = $_POST['No_Pol'];
    
    mysqli_query($conn, "INSERT INTO customer VALUES('$Nama_Customer','$ID_Customer','$NPWP_Customer', '$Alamat_Customer', '$No_Pol')");
    header("location:customer1.php");
}
?>