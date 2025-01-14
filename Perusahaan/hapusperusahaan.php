<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['NPWP_Perusahaan'])) {
    $NPWP_Perusahaan=$_GET['NPWP_Perusahaan'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM perusahaan WHERE NPWP_Perusahaan='$NPWP_Perusahaan'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:perusahaan.php");
?>