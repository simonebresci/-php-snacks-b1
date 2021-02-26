<?php





// PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle
// partite di basket di un’ipotetica tappa del calendario. Ogni array della partita
// avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
// e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55 - 60
echo "PHP SNACK 1 <br> <br>";

$matches = [
  // Match 1
  [
    "teamHome" => "Olimpia Milano",
    "teamHomePoints" => "44",
    "teamGuest" => "Cantu",
    "teamGuestPoints" => "33",
  ],
  // Match 2
  [
    "teamHome" => "Los Angeles Lakers",
    "teamHomePoints" => "21",
    "teamGuest" => "Chicago Bulls",
    "teamGuestPoints" => "18",
  ],
  // Match 3
  [
    "teamHome" => "Pistoia Basket",
    "teamHomePoints" => "78",
    "teamGuest" => "Reggiana",
    "teamGuestPoints" => "11",
  ],
];

echo "<b> match 1 </b> <br>";
var_dump($matches[0]["teamHome"]);
echo "<br>";
var_dump($matches[0]["teamHomePoints"]);
echo "<br>";
var_dump($matches[0]["teamGuest"]);
echo "<br>";
var_dump($matches[0]["teamGuestPoints"]);
echo "<br> <br>";

for($i = 0; $i < count($matches);$i++){
  echo "*** MATCH N." . strval($i + 1)  . " ***";
  echo "<br>";
  echo $matches[$i]["teamHome"] .
       " - ".
       $matches[$i]["teamGuest"] .
       " | " .
       $matches[$i]["teamHomePoints"] .
       " - ".
      $matches[$i]["teamGuestPoints"];

  echo "<br> </br>";
}
echo "<br> <br>";

echo "<b> Print_r matches</b> <br>";
print_r($matches);
echo "<br> <br>";
echo "<b> var_dump matches</b> <br>";
var_dump($matches);


// ********************************************************************************
// PHP Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”



// echo "PHP SNACK 2 <br> <br>";
// echo "http://localhost/?name=name&mail=mail&age=age <br> <br>";
//
// //Prendi parametro dal $_GET
// echo "<b>GET CONTIENE: </b> <br> <br>";
// var_dump($_GET);
// echo "<br> <br>";
//
// echo $_GET['mail'];


// Non chiudere php se è ultimo elemento
