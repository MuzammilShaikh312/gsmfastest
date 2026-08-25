<?php

include '../../database/connection.php';

$packages = [];

if (isset($_GET['category'])) {//Check karo ke URL mein category naam ki value bheji gayi hai ya nahi.


    $category = $_GET['category'];//agar value bheji gayi hai to usko $category wale variable mein rekh do


    $sql = "SELECT CategoryId,  Category
            FROM   tbl_gf_package_category
            WHERE Category = '$category'";

} else {

    $sql = "SELECT CategoryId, Category
            FROM   tbl_gf_package_category";
}

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $packages[] = $row;
}

echo json_encode($packages);

?>