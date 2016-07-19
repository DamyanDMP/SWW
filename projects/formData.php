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
    <input type="text" name="age" placeholder="age">
    <select name="gender" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    <input type="submit" name="btn">
</form>
<?php
if(isset($_GET['btn'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $long1 = strlen($name);
    $long2 = strlen($age);
    if($long1 > 0 || $long2 > 0){
      print "My name is " . $name . ", " . $age . " old. " . $gender;
    }
}
?>
</body>
</html>