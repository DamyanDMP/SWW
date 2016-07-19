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
</style>
<body>
<form method="get">
    <input type="text" name="num1">
    <input type="submit" name="btn">
    <div name="result" id="result"></div>
</form>
<?php
if(isset($_GET['btn'])){
    $num1 = $_GET['num1'];
    //$last = $string[strlen($num1)-1];
    echo"<div>";
    for($i = 102; $i<$num1; $i++){
        $last = substr($i, -1);
        $first = substr($i, 0, 1);
        $medium = substr($i, 1, 1);
        if($last !== $first && $last !== $medium){
           echo"<span>" . $i . "</span>";
        }
    }
    echo"</div>";

}
?>
</body>
</html>