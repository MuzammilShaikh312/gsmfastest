<?php

include '../../database/connection.php';

$packages = [];

if (isset($_GET['name'])) {//please check it that value of category is send or not

    $name = $_GET['name'];//if value is sending then insert into the $category varaible

    $sql = "SELECT PackageId, PackageTitle
            FROM  tbl_gf_packages
            WHERE PackageTitle = '$name'";

} else {

    $sql = "SELECT PackageId, PackageTitle
            FROM  tbl_gf_packages";
}

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $packages[] = $row;
}

echo json_encode($packages);

?>