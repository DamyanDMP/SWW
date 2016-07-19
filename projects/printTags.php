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
    $counter = 1;
        foreach($names as $every){
            $trim = (trim($every));
            echo $counter . ". " . $trim . "<br>";
            ++$counter;
        }
}
?>
</body>
</html>