<?php
session_start();
include 'includes/dbconnection.php';

if (isset($_GET)) {
    if (isset($_GET['data']) && $_GET['data'] != "") {
        $data = $_GET['data'];
        $stmt = "SELECT ProductCategory,ProductSubCategory FROM products WHERE ProductSubCategory LIKE '%" . $data . "%' OR ProductDescription like '%" . $data . "%' OR ProductCategory LIKE '%" . $data . "%' GROUP BY ProductCategory,ProductSubCategory;";
        $query = mysqli_query($conn,$stmt);
        $suggestions = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $res = array();
        foreach ($suggestions as $suggestion) {
            $res[] = $suggestion;
        }
        echo json_encode($res);
        return;
    } else {
        echo json_encode(array("error"=>"Given data is empty"));
        return;
    }
} else {
    echo json_encode(array("error"=>"Empty POST call"));
    return;
}