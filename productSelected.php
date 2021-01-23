<?php
session_start();
if (isset($_POST)) {
    if ($_POST['selected'] == 'cart') {
        if (isset($_SESSION['cart'])) {
            for ($i=0;$i<sizeof($_SESSION['cart']); ++$i) {
                if ($_SESSION['cart'][$i]['productID'] == $_POST['product']['productID']) {
                    $_SESSION['cart'][$i] = $_POST['product'];
                    echo json_encode(array("add to cart" => "success"));
                    return;
                }
            }
            $_SESSION['cart'][sizeof($_SESSION['cart'])] = $_POST['product'];
        } else {
            $_SESSION['cart'] = array();
            $_SESSION['cart'][0] = $_POST['product'];
        }
        echo json_encode(array("add to cart" => "success"));
    } else if ($_POST['selected'] == 'wishlist') {
        if (isset($_SESSION['wishlist'])) {
            for ($i=0;$i<sizeof($_SESSION['wishlist']); ++$i) {
                if ($_SESSION['wishlist'][$i]['productID'] == $_POST['product']['productID']) {
                    $_SESSION['wishlist'][$i] = $_POST['product'];
                    echo json_encode(array("add to wishlist" => "success"));
                    return;
                }
            }
            $_SESSION['wishlist'][sizeof($_SESSION['wishlist'])] = $_POST['product'];
        } else {
            $_SESSION['wishlist'] = array();
            $_SESSION['wishlist'][0] = $_POST['product'];
        }
        echo json_encode(array("add to wishlist" => "success"));
    }
} else {
    echo json_encode(array("data" => "not received"));
}
?>