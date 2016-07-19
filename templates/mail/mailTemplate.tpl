<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php
$to = "damian1599@abv.bg";
$subject = "HTML email";

$message = "
<html><head><title></title></head>
<body>
<p>This email contains HTML Tags!</p>
<table>
    <tr>
        <th>First name</th>
        <th>Last name</th>
    </tr>
    <tr>
        <td>Damyan</td>
        <td>Pazvanski</td>
    </tr>
</table>
</body>
<html>";
$header = "From: damyan.pazvanski@gmail.com";

mail("damian1599@abv.bg","subject","message","From: damyan.pazvanski@gmail.com");
echo"Sended!!";
?>

</body>
</html>