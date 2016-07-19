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
    <input type="submit" name="btn">
</form>
<?php
if(isset($_GET['btn'])){
    $name = $_GET['name'];
    $names = explode(",", $name);
    var_dump($names);
    $counter = 1;
    $result = array_count_values($names);
    arsort($result);
    var_dump($result);
    foreach ($result as $key => $val) {
        //echo "fruits[" . $key . "] = " . $val;
        echo $counter . ". " . $key . " - " . $val . ":time(s)! <br>";
        $counter++;
    }
        /*foreach($names as $num){
            $count = trim($names[$counter]);
            echo $counter . ". position is: " . $count . " - " . $result[$names[$counter]] . ":time(s)! <br>";
            $counter++;
        }*/
}
?>
</body>
</html>