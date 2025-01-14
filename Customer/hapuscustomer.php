<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['NPWP_Customer'])) {
    $NPWP_Customer=$_GET['NPWP_Customer'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM customer WHERE NPWP_Customer='$NPWP_Customer'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:customer1.php");
?>