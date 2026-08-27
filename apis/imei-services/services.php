<?php

include '../../database/connection.php';

$packages = [];
 
// Empty $where stores GET value or all table data
// If condition is true, $where stores GET value; otherwise all table data$where = "";
 
$where = "";
 
//please check it that value of name is send or not
if (isset($_GET['name'])) { 

   //if value is sending then insert into the $name varaible
    $name = $_GET['name'];

    //if condition is true than insert $name value into $where variable
    $where = "WHERE PackageTitle = '$name'";
}
 
//If (if condition) is wrong than this query will be gave us entire values of columns PackageId and PackageTitle
$sql = "SELECT PackageId, PackageTitle
        FROM tbl_gf_packages
        $where";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $packages[] = $row;
}

echo json_encode($packages);

?>