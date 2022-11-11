<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST['submit'])){
    $payment_method = $_POST['payment_method'];
    echo "payment: " . $payment_method . "<br/>";

    $email=$_POST['email'];
    echo "email: ". $email . "<br/>";

    $item=$_POST['item'];
    echo "items: ". $item . "<br/>";

    $Brand=$_POST['brand'];
    echo "Brand: ". $Brand . "<br/>";

    $Select_Currency=$_POST['currency'];
    echo "Currency: ". $Select_Currency . "<br/>";

    $Amount=$_POST['amount'];
    echo "Amount: ". $Amount . "<br/>";


}



?>
</body>
</html>