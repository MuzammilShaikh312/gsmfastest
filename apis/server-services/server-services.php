<?php

include '../../database/connection.php';

$packages = [];

if (isset($_GET['name'])) {//please check it that value of name is send or not



    $name = $_GET['name'];//if value is sending then insert into the $name varaible
    

    $sql = "SELECT LogPackageId,  LogPackageTitle
            FROM    tbl_gf_log_packages
            WHERE LogPackageTitle = '$name'";

} else {

    $sql = "SELECT LogPackageId,  LogPackageTitle
            FROM   tbl_gf_log_packages";
}

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $packages[] = $row;
}

echo json_encode($packages);

?>