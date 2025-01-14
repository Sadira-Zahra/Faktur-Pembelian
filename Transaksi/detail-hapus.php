<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['No_Faktur'])) {
    $No_Faktur=$_GET['No_Faktur'];
}

if (isset($_GET['ID_Barang'])) {
    $ID_Barang=$_GET['ID_Barang'];
}

 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM detail
WHERE No_Faktur = '$No_Faktur' AND ID_Barang = '$ID_Barang'");
 
// Calculate new total price after deletion
$query = "SELECT SUM(Jumlah) AS Total_2 FROM detail WHERE No_Faktur = '$No_Faktur'";
$totalResult = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($totalResult);
$totalHargaBaru = $row['Total_2'];

// Update total price in nota table
mysqli_query($conn, "UPDATE faktur SET Total_2 = '$totalHargaBaru' WHERE No_Faktur = '$No_Faktur'");

// After delete redirect to Home, so that latest user list will be displayed.
if(isset($_GET['ID_Barang'])){
    $ID_Barang = $_GET['ID_Barang'];
    // Gunakan nilai $kodenota untuk keperluan selanjutnya
    header("Location: detail-transaksi.php?No_Faktur=$No_Faktur");
}
?>