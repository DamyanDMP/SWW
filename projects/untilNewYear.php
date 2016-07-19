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
    <input type="submit" name="btn" value="press enter">
</form>
<?php
if(isset($_GET['btn'])){
    $date = new DateTime(date("j-m-Y H:i:s"));
    $str = (string)date("j-m-Y H:i:s");
    echo $str."<br>";

    $year = '2016';
    $month = '12';
    $day = '31';
    $hours = 00;
    $min = 00;
    $sek = 00;

    $end_date = new DateTime("$year-$month-$day $hours:$min:$sek");
    $interval = $date->diff($end_date);


    echo $interval->format('%a day(s)') . "<br>";
    echo "Hours until new year: " . $interval->format('%H') . "<br>";
    echo "Minutes until new year: " . $interval->format('%i') . "<br>";
    echo "Sekundi until new year: " . $interval->format('%s') . "<br>";
    echo "Days until new year: " . $interval->format('%a') . "<br>";
    echo "Months until new year: " . $interval->format('%m') . "<br>";

    $seconds = strtotime("2016-07-13 21:10:18") - time();
    echo $seconds;
    var_dump($seconds);
    $days = floor($seconds / 86400);
    $seconds %= 86400;

    $hours = floor($seconds / 3600);
    $seconds %= 3600;

    $minutes = floor($seconds / 60);
    $seconds %= 60;


    echo "$days days and $hours hours and $minutes minutes and $seconds seconds";

}
?>
</body>
</html>