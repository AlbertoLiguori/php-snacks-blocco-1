<!-- PHP Snack 2:
Passare come parametri GET name, mail e age everificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

  //Prende il nome
  $name = $_GET["name"];

  //Prende la mail
  $mail = $_GET["mail"];

  // Prende l'età
  $age = $_GET["age"];

  //Verifica che i dati siano stati presi correttamente
  // var_dump($name);
  // var_dump($mail);
  // var_dump($age);

  // Se i requisiti sono soddisfatti Accesso effettutato altrimenti Accesso negato
  if ( ( strlen($name) > 3 ) && ( strpos($mail, '@') ) && ( is_numeric($age) ) ){
    echo "<h5> Accesso effettuato </h5>";
  }else{
    echo "<h5> Accesso negato </h5>";
  };

?>
