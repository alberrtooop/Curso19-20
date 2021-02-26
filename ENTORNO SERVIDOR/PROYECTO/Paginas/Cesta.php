<?php


session_start();
$_SESSION['cart'] = 0;

session_destroy();

/*
include('includes/config.php');
if (isset($_POST['submit'])) {
    if (!empty($_SESSION['cart'])) {
        foreach ($_POST['quantity'] as $key => $val) {
            if ($val == 0) {
                unset($_SESSION['cart'][$key]);
            } else {
                $_SESSION['cart'][$key]['quantity'] = $val;
            }
        }
        echo "<script>alert('Your Cart hasbeen Updated');</script>";
    }
}
// Code for Remove a Product from Cart
if (isset($_POST['remove_code'])) {

    if (!empty($_SESSION['cart'])) {
        foreach ($_POST['remove_code'] as $key) {

            unset($_SESSION['cart'][$key]);
        }
        echo "<script>alert('Your Cart has been Updated');</script>";
    }
}
// code for insert product in order table


if (isset($_POST['ordersubmit'])) {

    if (strlen($_SESSION['login']) == 0) {
        header('location:login.php');
    } else {

        $quantity = $_POST['quantity'];
        $pdd = $_SESSION['pid'];
        $value = array_combine($pdd, $quantity);


        foreach ($value as $qty => $val34) {



            mysqli_query($con, "insert into orders(userId,productId,quantity) values('" . $_SESSION['id'] . "','$qty','$val34')");
            header('location:payment-method.php');
        }
    }
}
*/
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/EstiloLog.css">
    <link rel="stylesheet" href="../CSS/Cesta.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Registro</title>
</head>

<body>
    <?php include "../Templates/header.php"; ?>
    <div class="FormCentrado">
        <div class="section-log-in">
            <h2 class="logon-view__section-title">
                <span>CESTA DE LA COMPRA</span>
            </h2>
            <?php
            if(!empty($_SESSION['cart'])){
	        ?>
            <table>
                <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price Per unit</th>
                        <th>Shipping Charge</th>
                        <th>Grandtotal</th>
                    </tr>
                </thead><!-- /thead -->
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div>
                                <span class="">
                                    <a href="index.php">Continue Shopping</a>
                                    <input type="submit" name="submit">
                                </span>
                            </div><!-- /.shopping-cart-btn -->
                        </td>
                    </tr>
                </tfoot>
            </table>
            <?php
            }else{
                echo "<div class='CarritoMedio'> El carrito esta vacio </div>";}
            ?>
        </div>
    </div>
</body>

</html>