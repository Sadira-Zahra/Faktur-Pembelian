<?php
    include '../koneksi.php';
    $query = mysqli_query($conn, "SELECT * FROM faktur WHERE No_Faktur = '$_GET[No_Faktur]'");
    $data = mysqli_fetch_array($query);
?>
<?php   
    include '../koneksi.php';
    $No_Faktur = $_GET['No_Faktur'];
    $query_total = "SELECT Total_2 FROM faktur WHERE No_Faktur = '$No_Faktur'";
    $result_total = mysqli_query($conn, $query_total);
    $row_total = mysqli_fetch_assoc($result_total);
    $total_sebelumnya = $row_total['Total_2'];


if (isset($_POST['proses'])){
    
    
    $No_Faktur = $_POST['No_Faktur'];
    $kodeobat = $_POST['ID_Barang'];
    $potongan = $_POST['potongan'];
    $qty = $_POST['qty'];
    $jumlah = $_POST['jumlah'];
    
    $query_insert = "INSERT INTO detail (No_Faktur, ID_Barang, Qty, Potongan, Jumlah)  VALUES('$No_Faktur','$kodeobat','$qty','$potongan','$jumlah')";
    $result_insert = mysqli_query($conn, $query_insert);

        
        
        if ($result_insert) {
            // Mengupdate nilai total
            $total = $total_sebelumnya += $jumlah;
            $query_update_total = "UPDATE faktur SET Total_2 = '$total' WHERE No_Faktur = '$No_Faktur'";
            $result_update_total = mysqli_query($conn, $query_update_total);
        
        header("Location: detail-transaksi.php?No_Faktur=$No_Faktur");
        exit;
    }

    
}
?>
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
    <h4>FORM DETAIL TRANSAKSI : <?php echo $data['No_Faktur'];?></h4>

    <tr>
        <td> No_Faktur </td>
        <td> <input type="text" name="No_Faktur" value="<?php echo $data['No_Faktur'];?>" readonly> </td>
    </tr>

    <tr>
        <td> Tanggal</td>
        <td> <input type="date" name="Tanggal"> </td>
    </tr>
    
        <tr>
        <td> 
        Nama Barang
        <td><select name="ID_Barang" style="width:170px;">
        <option value="">--Pilih--</option>
        <?php
        include '../koneksi.php';
        $query=mysqli_query($conn, "SELECT * FROM barang");
        while ($data = mysqli_fetch_array($query)) {
            echo "<option value='$data[ID_Barang]' data-harga='$data[Harga_Satuan]'>$data[ID_Barang] - $data[Nama_Barang] - $data[Harga_Satuan]</option>";
        }
        ?>
            
            
        </td>
        </select>
        </td></tr>
        

    <tr>
        <td> Potongan </td>
        <td> <input type="number" name="potongan"> </td>
    </tr>
    <tr>
        <td> Qty </td>
        <td> <input type="number" name="qty"> </td>
    </tr>
    <tr>
    
        <td> Jumlah </td>
        <td> <input type="number" name="jumlah" readonly> </td>
    </tr>

    <tr>
        <td><a class="kembali" href="transaksi.php">Kembali</a></td>
        <td><input type="submit" name="proses" value="Simpan DetailNota"> </td>
    </tr>
</form>
<script>
            // Ambil elemen-elemen yang diperlukan
            var selectBarang = document.querySelector("select[name='ID_Barang']");
            var inputqty = document.querySelector("input[name='qty']");
            var inputTotal = document.querySelector("input[name='jumlah']");

            // Fungsi untuk menghitung total
            function hitungTotal() {
                var harga = selectBarang.options[selectBarang.selectedIndex].getAttribute("data-harga");
                var qty = inputqty.value;
                var total = harga * qty;
                inputTotal.value = total;
            }

            // Panggil fungsi hitungTotal saat nilai input berubah
            selectBarang.addEventListener("change", hitungTotal);
            inputqty.addEventListener("input", hitungTotal);

            
        </script>
</table>
</html>
