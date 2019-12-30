<html>
<body>
<?php
// define variables and set to empty values

echo $mailmessage;
$mailmessage = "pirmas";
echo $mailmessage;


$mailmessage = "antras";
echo $mailmessage;
mail("martynas.mockus@gmail.com","Local Ocean Uzsakymas","Užsakymas patvirtintas. \n $mailmessage");
?>
</body>
<html>