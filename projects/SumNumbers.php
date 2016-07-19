<html>
<head>
    <title></title>
</head>
<style>
    input, button{
        display: inline-block;
    }
</style>
<body>
<form method="get">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="submit" name="btn">
    <div name="result" id="result"></div>
</form>
<?php
if(isset($_GET['btn'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 + $num2;
    $chislo1 = strlen($num1);
    $chislo2 = strlen($num2);
      if($chislo1 > "" || $chislo2 > ""){
          print"The sum is: " . $sum;
      }
}
?>
</body>
</html>