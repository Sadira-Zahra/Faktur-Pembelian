<!DOCTYPE html>
<html>
<head>
    <title>SHOP AND DRIVE</title>
    <style>
        .image-1-icon12 {
            height: 60px;
            width: 120px;
            position: relative;
            object-fit: cover;
            z-index: 1;
            right: -550px;
            top: -65px;
        }

        .image-barcode {
            height: 80px;
            width: 250px;
            object-fit: cover;
            z-index: 1;
            position: absolute;
            right: 170px;
            top: 50px;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 210mm;
            margin: auto;
            padding: 20mm;
            border: 1px solid #000;
            box-sizing: border-box;
            background-color: #fff;
        }

        h1, h2 {
            font-size: 24px;
            text-align: center;
            margin: 0;
        }

        .transaction-details, .customer-details {
            margin-bottom: 20px;
        }

        .transaction-details p, .customer-details p {
            margin: 5px 0;
        }

        .teks-sejajar {
            display: flex;
            justify-content: space-between;
        }

        .teks-sejajar p {
            margin: 5px 0;
        }

        .medicine-list table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .medicine-list th, .medicine-list td {
            padding: 8px;
            border: 1px solid #000;
            text-align: center;
        }

        .medicine-list th {
            background-color: #f0f0f0;
        }

        .total-amount {
            text-align: right;
            margin-top: 20px;
        }

        .ttd, .ttd1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
        }

        .ttd1 {
            margin-top: 20px;
        }

        .kanan {
            margin-left: auto;
        }

        .kanann {
            margin-left: 150px;
        }

        .kanan2 {
            margin-left: 80px;
        }
    </style>
</head>
<body>
    <div class="container">
    <p><strong>FAKTUR ***REPRINT***</ strong></p>
    <p><strong>PENGUSAHA KENA PAJAK</ strong></p>
    <img class="image-1-icon12" loading="lazy" alt="" src="../image/image-1@2x.png" />
        <div class="transaction-details"> 
        <img class="image-barcode" alt="" src="../image/barcode.png" />     
        <p><strong>SHOP AND DRIVE</strong></p>
            <img class="image" alt="" src="./image/barcode.png" />
            <div class="teks-sejajar">
                <p>_________________________________</p>
                <p class="kanan"><strong>Nota Biaya Periksa / Obat / Tindakan</strong></p>
            </div>
            <div class="teks-sejajar">
                <p>Jl. Jambu No.21 Depok</p>
                <p class="kanan">
                    <?php
                        include '../koneksi.php';
                        $No_Faktur = $_GET['No_Faktur'];
                        $query = mysqli_query($conn, "SELECT * FROM faktur WHERE No_Faktur = '$No_Faktur'");
                        if ($data = mysqli_fetch_array($query)) {
                            echo htmlspecialchars($data['No_Faktur']);
                        }
                    ?>
                </p>
            </div>
            <p>776655</p>
            <p>================================================================</p>
        </div>

        <div class="customer-details">
            <?php
                $query = mysqli_query($conn, "SELECT * FROM faktur f
                                              JOIN perusahaan p ON f.NPWP_Perusahaan = p.NPWP_Perusahaan
                                              JOIN customer c ON f.ID_Customer = c.ID_Customer
                                              WHERE No_Faktur = '$No_Faktur'");
                if ($data = mysqli_fetch_array($query)) {
            ?>
            <div class="teks-sejajar">
                <p>Customer:</p>
                <p><?php echo htmlspecialchars($data['Nama_Customer']); ?></p>
                <p class="kanan">Jenis Kelamin:</p>
                <p><?php echo isset($data['Jenis_Kelamin']) ? htmlspecialchars($data['Jenis_Kelamin']) : 'N/A'; ?></p>
            </div>
            <div class="teks-sejajar">
                <p>Alamat:</p>
                <p><?php echo htmlspecialchars($data['Alamat_Customer']); ?></p>
                <p class="kanan">Umur:</p>
                <p><?php echo isset($data['Umur']) ? htmlspecialchars($data['Umur']) : 'N/A'; ?></p>
            </div>
            <div class="teks-sejajar">
                <p>Perusahaan:</p>
                <p><?php echo htmlspecialchars($data['Nama_Perusahaan']); ?></p>
                <p class="kanan">Tanggal:</p>
                <p><?php echo isset($data['Tanggal']) ? htmlspecialchars($data['Tanggal']) : 'N/A'; ?></p>
            </div>
            <?php } ?>
        </div>

        <div class="medicine-list">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Keterangan</th>
                        <th>Tarif Satuan</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $index = 1;
                        $query = mysqli_query($conn, "SELECT b.Nama_Barang, b.Harga_Satuan, d.Qty, d.Jumlah
                                                      FROM faktur f
                                                      JOIN detail d ON f.No_Faktur = d.No_Faktur
                                                      JOIN barang b ON b.ID_Barang = d.ID_Barang
                                                      WHERE f.No_Faktur = '$No_Faktur'");
                        $totalharga = 0; // Inisialisasi grand total

                        while ($data = mysqli_fetch_array($query)) {
                            $subtotal = $data['Harga_Satuan'] * $data['Qty'];
                            $totalharga += $subtotal;
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($index++); ?></td>
                        <td><?php echo htmlspecialchars($data['Nama_Barang']); ?></td>
                        <td><?php echo htmlspecialchars($data['Harga_Satuan']); ?></td>
                        <td><?php echo htmlspecialchars($data['Qty']); ?></td>
                        <td><?php echo htmlspecialchars($subtotal); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="total-amount">
            <p><strong>Total: <?php echo "Rp." . htmlspecialchars($totalharga); ?></strong></p>
        </div>

        <div class="ttd">
            <p><strong>Pasien</strong></p>
            <p class="kanann"><strong>Dokter</strong></p>
        </div>

        <div class="ttd1">
            <?php
                $query = mysqli_query($conn, "SELECT * FROM faktur f
                                              JOIN customer c ON f.ID_Customer = c.ID_Customer
                                              JOIN perusahaan p ON f.NPWP_Perusahaan = p.NPWP_Perusahaan
                                              WHERE No_Faktur = '$No_Faktur'");
                if ($data = mysqli_fetch_array($query)) {
                    echo htmlspecialchars($data['Nama_Customer']);
            ?>
            <p class="kanann"><?php echo htmlspecialchars($data['Nama_Perusahaan']); ?></p>
            <?php } ?>
        </div>

        <div class="ttd1">
            <p><strong>_____________</strong></p>
            <p class="kanan2"><strong>_____________</strong></p>
            <a class="kanan" href="nota.php">Kembali</a>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>
