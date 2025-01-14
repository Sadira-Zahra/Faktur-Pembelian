<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['ID_Barang'])) {
    $ID_Barang=$_GET['ID_Barang'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM barang WHERE ID_Barang='$ID_Barang'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:barang1.php");
?>