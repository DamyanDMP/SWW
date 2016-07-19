<html>
<head>
    <title></title>
</head>
<style>
    input, button{
        display: inline-block;
    }
    span{
        border:2px solid black;
        margin-right: 1px;
        float: left;
    }
    div{
        width: 80%;
    }
    td,th{
        border: 1px solid black;
    }
</style>
<body>
<form method="get">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="number" placeholder="phone number">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="address" placeholder="address">
    <input type="submit" name="btn">
</form>
<?php
if(isset($_GET['btn'])){
    $name = $_GET['name'];
    $number = $_GET['number'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $color = "orange";
    echo"<table>";
    echo"<tr><th style='background: $color'>Name:</th><td>$name</td></tr>";
    echo"<tr><th style='background: $color'>Phone number:</th><td>$number</td></tr>";
    echo"<tr><th style='background: $color'>Age:</th><td>$age</td></tr>";
    echo"<tr><th style='background: $color'>Address:</th><td>$address</td></tr>";
    echo"</table>";
}
?>
</body>
</html>