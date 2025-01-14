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
        margin-bottom:10px;
    }
    
    .edit:hover,
    .hapus:hover,
    .kembali:hover {
        background-color: #555;
    }
    
    .edit {
        margin-right: 5px;
        margin-bottom:10px;
    }
    
    .kembali {
        margin-top: 1px;
    }
    
    .kembali:hover {
        background-color: #f2f2f2;
        color: #333;
    }
</style>

<?php
    include '../koneksi.php';
    $query = mysqli_query($conn, "SELECT * FROM faktur f, perusahaan p, customer c WHERE f.ID_Customer=c.ID_Customer AND p.NPWP_Perusahaan=f.NPWP_Perusahaan AND No_Faktur = '$_GET[No_Faktur]'");
    $data = mysqli_fetch_array($query);
?>

<h3> KLINIK MELYAN </h3>

<form action="" method="post">
    <table>
        <h4>DETAIL TRANSAKSI: <?php echo htmlspecialchars($data['No_Faktur']);?> </h4>
        <a class="kembali" href="transaksi.php">Kembali</a>
        <tr>
            <td> No Faktur </td>
            <td> <?php echo htmlspecialchars($data['No_Faktur']);?></td>
        </tr>
        <tr>
            <td> KM_Terakhir </td>
            <td> <?php echo htmlspecialchars($data['KM_Terakhir']);?> </td>
        </tr>
        <tr>
            <td> Tanggal </td>
            <td> <?php echo htmlspecialchars($data['Tanggal']);?> </td>
        </tr>
        <tr>
            <td> Total  </td>
            <td> <?php echo htmlspecialchars($data['Total_2']);?> </td>
        </tr>
        <tr>
            <td> Voucher </td>
            <td> <?php echo htmlspecialchars($data['Voucher']);?> </td>
        </tr>
        <tr>
            <td> NPWP Perusahaan </td>
            <td> <?php echo htmlspecialchars($data['NPWP_Perusahaan']);?> </td>
        </tr>
        <tr>
            <td> ID Customer </td>
            <td> <?php echo htmlspecialchars($data['ID_Customer']);?> </td>
        </tr>
    </table>
</form>

<html>
<body>
    <h4> TABEL DETAIL NOTA</h4>
    <a class="kembali" href="detail-tambah.php?No_Faktur=<?php echo htmlspecialchars($data['No_Faktur']);?>">Tambah</a> |
    <a class="hapus" href="cetak-transaksi.php?No_Faktur=<?php echo htmlspecialchars($data['No_Faktur']); ?>">Cetak</a>
    <table width='100%' border=1>
        <tr style="background-color: green; color: white;">
            <th><center>No</center></th>
            <th><center>Nama_Barang</center></th>
            <th><center>Qty</center></th>
            <th><center>Harga_Satuan</center></th>
            <th><center>Jumlah_Kotor</center></th>
            <th><center>Potongan</center></th>
            <th><center>Jumlah</center></th>
            <th><center>Aksi</center></th>
        </tr>
        <?php
            include '../koneksi.php';

            $index = 1;
            $No_Faktur = $_GET['No_Faktur'];
            $query = mysqli_query($conn, "SELECT b.Nama_Barang, d.Qty, b.Harga_Satuan, d.Potongan, d.Id_Barang
            FROM faktur f
            JOIN detail d ON f.No_Faktur = d.No_Faktur
            JOIN barang b ON b.Id_Barang = d.Id_Barang
            WHERE f.No_Faktur = '$No_Faktur'");

            $grand_total = 0; // Inisialisasi grand total
            $jumlah_kotor = 0;
            while ($data = mysqli_fetch_array($query)) {
                $harga_satuan = floatval($data['Harga_Satuan']);
                $qty = intval($data['Qty']);
                $potongan = floatval($data['Potongan']);
                
                $jumlah_kotor = $harga_satuan * $qty;
                $jumlah = $jumlah_kotor - $potongan;
                $grand_total += $jumlah;

                // Update total transaksi
                $updateFakturQuery = "UPDATE faktur SET Total_2 = '$grand_total' WHERE No_Faktur = '$No_Faktur'";
                mysqli_query($conn, $updateFakturQuery);
        ?>
            <tr>
                <td><?php echo htmlspecialchars($index++); ?></td>
                <td><?php echo htmlspecialchars($data['Nama_Barang']); ?></td>
                <td><?php echo htmlspecialchars($data['Qty']); ?></td>
                <td><?php echo htmlspecialchars($data['Harga_Satuan']); ?></td>
                <td><?php echo htmlspecialchars($jumlah_kotor); ?></td>
                <td><?php echo htmlspecialchars($data['Potongan']); ?></td>
                <td><?php echo htmlspecialchars($jumlah); ?></td>
                <td>
                    <a class="hapus" href="detail-hapus.php?No_Faktur=<?php echo htmlspecialchars($No_Faktur); ?>&ID_Barang=<?php echo htmlspecialchars($data['Id_Barang']); ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    | <a class="edit" href="detail-edit.php?No_Faktur=<?php echo htmlspecialchars($No_Faktur); ?>&ID_Barang=<?php echo htmlspecialchars($data['Id_Barang']); ?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="6" align="center"> <strong> TOTAL </strong> </td>
            <td> <?php echo htmlspecialchars($grand_total); ?> </td>
            <td></td>
        </tr>
    </table>
</body>
</html>
