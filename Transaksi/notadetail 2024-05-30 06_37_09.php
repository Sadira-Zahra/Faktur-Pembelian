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
<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "SELECT * from nota n ,pasien p, dokter d where n.kodepasien=p.kodepasien AND n.kodedokter=d.kodedokter AND kodenota = '$_GET[kodenota]'");
            $data = mysqli_fetch_array($query);
            
            
                ?>
  

<h3> KLINIK MELYAN </h3>

<form action="" method="post">
<table>
    <h4>DETAIL NOTA : <?php echo $data['kodenota'];?> </h4>
    <a class="kembali" href="nota.php">Kembali</a>
    <tr>
        <td> Kode Nota </td>
        <td> <?php echo $data['kodenota'];?></td>
    </tr>
    
    <tr>
        <td> Tanggal Nota </td>
        <td> <?php echo $data['tglnota'];?> </td>
    </tr>

    <tr>
        <td> Nama Pasien </td>
        <td> <?php echo $data['namapasien'];?> </td>
    </tr>

    <tr>
        <td> Nama Dokter </td>
        <td> <?php echo $data['namadokter'];?> </td>
    </tr>
    <tr>
        <td> Total Harga </td>
        <td> <?php echo $data['totalharga'];?> </td>
    </tr>
</form>
</table>

<html>
<body>
<h4> TABEL DETAIL NOTA</h4>
<a class="kembali" href="notadetailtambah.php?kodenota=<?php echo $data['kodenota'];?>">Tambah</a> |
                <a class="hapus" href="notacetak.php?kodenota=<?php echo $data['kodenota']; ?>">Cetak</a>
    <table width='100%' border=1>
    
    <tr style="background-color: green; color: white;" >
        <th><center>No</center></th>
        <th><center>Keterangan</center></th>
        <th><center>Harga / Tarif Satuan</center></th>
        <th><center>Kuantitas</center></th>
        <th><center>Subtotal</center></th>
        <th><center>Aksi</center></th>
       
    </tr>
   
    <tr>
        
    <?php
            include '../koneksi.php';
            
            $index = 1;
            $kodenota = $_GET['kodenota'];
            $query = mysqli_query($conn, "SELECT O.namaobat, O.tarifsatuan, DN.qty, N.kodenota, DN.kodeobat, DN.subtotal
            FROM Nota N
            JOIN DetailNota DN ON N.kodenota = DN.kodenota
            JOIN Obat O ON DN.kodeobat = O.kodeobat
            WHERE N.kodenota = '$kodenota'");
            
            $totalharga = 0; // Inisialisasi grand total

            
            while ($data = mysqli_fetch_array($query)) {
                $subtotal = $data['tarifsatuan'] * $data['qty'];
                $totalharga += $subtotal;
                
                $updateFakturQuery = "UPDATE nota SET totalharga = '$totalharga' WHERE kodenota = '$kodenota'";
                mysqli_query($conn, $updateFakturQuery);
                ?>
                
                <tr>
                
                <td><?php echo htmlspecialchars ($index++); ?></td>
                <td><?php echo $data['namaobat']    ;?></td>
                <td><?php echo $data['tarifsatuan'] ;?></td>
                <td><?php echo $data['qty'] ;?></td>
                <td><?php echo $subtotal;?></td>
                <td><a class="hapus" href="notadetailhapus.php?kodenota=<?php echo ($data['kodenota']); ?>&kodeobat=<?php echo ($data['kodeobat']); ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                | <a class="edit" href="notadetailedit.php?kodenota=<?php echo ($data['kodenota']); ?>">Edit</a>
                </td>
            </tr>
            
            <?php }
             ?>
              <tr>
        <td colspan="4" align="center"> <strong> TOTAL HARGA </strong> </td>
        <td> <?php echo $totalharga;?> </td>
        <td></td>
    </tr>
     </body>
     </html>