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
<!--<form method="get">-->
<!--    <input type="text" name="num1">-->
<!--    <input type="submit" name="btn">-->
<!--    <div name="result" id="result"></div>-->
<!--</form>-->
<?php
if(isset($_GET['btn'])){
    $start_date = date('Y-m-d', strtotime('2016-07-01'));
    $end_date = date('Y-m-d', strtotime('2016-07-31'));
    $end_date1 = date('Y-m-d', strtotime('2016-07-31 + 6 days'));

function getWeekDates($date, $start_date, $end_date)
{
    $week =  date('W', strtotime($date));
    echo$week."<br>";
    $year =  date('Y', strtotime($date));
    echo"{$year}-W{$week}+1"."<br>";
    echo $start_date;

    $from = date("Y-m-d", strtotime("{$year}-W{$week}+1")); //Returns the date of monday in week
    if($from < $start_date) $from = $start_date;
    $to = date("Y-m-d", strtotime("{$year}-W{$week}-6"));   //Returns the date of sunday in week
    if($to > $end_date) $to = $end_date;
    echo "Sunday is:-->".$from;//Output : Start Date-->2012-09-03 End Date-->2012-09-09
}
for($date = $start_date; $date <= $end_date1; $date = date('Y-m-d', strtotime($date. ' + 7 days')))
{
    echo getWeekDates($date, $start_date, $end_date);
    echo "<br>";
}
}
?>
</body>
</html>