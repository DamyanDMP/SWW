<html>
<head>
    <title>
        Valuta
    </title>
</head>
<style>
</style>
<body>
<form action="" method="get">
    Enter Amount:<input id="amount" name="amount" type="text">
    <input type="radio" name="usd" >USD
    <input type="radio" name="eur" >EUR
    <input type="radio" name="bgn" >BGN<br>
    Compound interest amount <input type="text" name="procent"><br>
    <select name="months">
        <option value="6">6 month</option>
        <option value="12">1 year</option>
        <option value="24">2 years</option>
        <option value="60">5 years</option>
    </select>
    <input type="submit" name="btn" value="Submit">
</form>
<?php
  if(isset($_GET['btn'])){
      if($_GET['amount'] !== "" && $_GET['procent'] !== ""){
          $first = $_GET['amount'];
          $procent = $_GET['procent'];
          $period = $_GET['months'];

          if(isset($_GET['usd'])){
              for($i = 0; $i <= $period; $i++){
                  $procenta = ($first/100) * $procent;
                  $kraino = $first + $procenta;
                  $first = $kraino;
              }
              $kraino = round($first, 2, PHP_ROUND_HALF_DOWN);
              echo"Amount will be: " . $kraino . "USD";
              die;
          }
          else if(isset($_GET['eur'])){
              for($i = 0; $i <= $period; $i++){
                  $procenta = ($first/100) * $procent;
                  $kraino = $first + $procenta;
                  $first = $kraino;
              }
              $kraino = round($first, 2, PHP_ROUND_HALF_DOWN);
              echo"Amount will be: " . $kraino . "EUR";
              die;
          }
          else if(isset($_GET['bgn'])){
              for($i = 0; $i <= $period; $i++){
                  $procenta = ($first/100) * $procent;
                  $kraino = $first + $procenta;
                  $first = $kraino;
              }
              $kraino = round($first, 2, PHP_ROUND_HALF_DOWN);
              echo"Amount will be: " . $kraino . "BGN";
              die;
          }
      }
  }
?>
</body>
</html>