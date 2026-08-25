<?php

include '../../database/connection.php';

$packages = [];

if (isset($_GET['category'])) {

    $category = $_GET['category'];

    $sql = "SELECT CategoryId,  Category
            FROM  tbl_gf_package_category
            WHERE Category = '$category'";

} else {

    $sql = "SELECT CategoryId, Category
            FROM  tbl_gf_package_category";
}

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $packages[] = $row;
}

echo json_encode($packages);

?>