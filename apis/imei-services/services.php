<?php

include '../../database/connection.php';

$packages = [];
 
// Empty $where stores GET value or all table data
// If condition is true, $where stores GET value; otherwise all table data$where = "";
 
$where = "";

if (isset($_GET['name'])) {

    $name = $_GET['name'];

    $where = "WHERE PackageTitle = '$name'";
}

$sql = "SELECT PackageId, PackageTitle
        FROM tbl_gf_packages
        $where";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $packages[] = $row;
}

echo json_encode($packages);

?>