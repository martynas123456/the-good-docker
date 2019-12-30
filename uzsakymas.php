<html>
<body style="height: 1000px; width: 1000px; background-color:lightblue;">
<?php
// define variables and set to empty values
$name = $surname = $phone = $email = $city = $adress = $time = $quantity = $payment = "";

$mailmessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["input_name"]);
  $surname = test_input($_POST["input_surname"]);
  $phone = test_input($_POST["input_phone"]);	
  $email = test_input($_POST["input_email"]);
  $city = test_input($_POST["input_city"]);
  $adress = test_input($_POST["input_adress"]);
  $time = test_input($_POST["input_time"]);
  $quantity = test_input($_POST["input_quantity"]);
  $payment = test_input($_POST["input_payment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$mailmessage = "
Vardas: $name \n
Pavardė: $surname
Telefonas: $phone
El. paštas: $email

Miestas: $city
Adresas: $adress
Laikas: $time
Kiekis: $quantity

Apmokėjimo būdas:$payment";
$mailmessage = wordwrap($mailmessage, 70);


?>
Užsakymas patvirtintas.

<?php mail("martynas.mockus@gmail.com","local ocean nr 2","gavai laiska is uzsakymas.php apie uzsakyma.\n info tokia: \n $mailmessage");?>
</body>
<script>

</script>
</html>