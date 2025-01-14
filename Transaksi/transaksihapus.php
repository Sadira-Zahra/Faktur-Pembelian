<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['No_Faktur'])) {
    $No_Faktur=$_GET['No_Faktur'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM faktur WHERE No_Faktur='$No_Faktur'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:transaksi.php");
?>