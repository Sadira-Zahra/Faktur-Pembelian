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
<h3> ZAINUDDIN RENTAL </h3>

<form action="" method="post">
<table>
    <h4>FORM PELANGGAN</h4>
    <tr>
        <td> ID Pelanggan </td>
        <td> <input type="text" name="idpelanggan"> </td>
    </tr>
    <tr>
        <td> Nama Pelanggan </td>
        <td> <input type="text" name="namapelanggan"> </td>
    </tr>

    <tr>
        <td> Alamat Pelanggan </td>
        <td> <input type="text" name="alamatpelanggan"> </td>
    </tr>

    <tr>
        <td><a class="kembali" href="pelanggan.php">Kembali</a></td>
        <td><input type="submit" name="proses" value="Simpan Obat"> </td>
    </tr>

</table>

</form>
</html>
<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
  
    $idpelanggan = $_POST['idpelanggan'];
    $namapelanggan = $_POST['namapelanggan'];
    $alamatpelanggan = $_POST['alamatpelanggan'];
    
    mysqli_query($conn, "INSERT INTO pelanggan VALUES('$idpelanggan','$namapelanggan','$alamatpelanggan')");
    header("location:pelanggan.php");
}
?>