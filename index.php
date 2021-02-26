<?php
// PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle
// partite di basket di un’ipotetica tappa del calendario. Ogni array della partita
// avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
// e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55 - 60
echo "<b>PHP SNACK 1 </b> <br> <br>";

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

// Print matches value
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



echo "*************************************************************************";
// PHP Snack 2:
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


echo "<br> <b>PHP SNACK 2 </b> <br> <br>";
// echo "http://localhost/?name=name&mail=mail&age=age <br> <br>";

//
echo "Nome : " . $_GET['name'] . "<br>";
echo "Email: " . $_GET['mail'] . "<br>";
echo "Età  : " . $_GET['age'] . "<br>";

$accessOk = true;

// Check n.1
if (strlen($_GET['name']) < 3){
  $accessOk = false;
  echo "Accesso negato: Lunghezza nome minore di 3 caratteri <br>";
}

// Check n.2
if (strpos(($_GET['mail']),"@") === false
    || strpos(($_GET['mail']),".") === false ){
  $accessOk = false;
  echo "Accesso negato: mail non contiene @ e/o il carattere punto <br>";
}

// Check n.3
if (!is_numeric(($_GET['age']))){
  $accessOk = false;
  echo "Accesso negato: età non è un numero <br>";
}
// Non chiudere php se è ultimo elemento

// Print result
echo "<br><br>";
if ($accessoOK){
  echo "Accesso riuscito";
}else{
  echo "ACCESSO NEGATO";
}
