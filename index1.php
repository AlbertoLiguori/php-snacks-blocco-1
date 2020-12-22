<!-- Esercizio 2 - PHP Loops
repo: php-snacks-blocco-1
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

  //Array delle squadre
  $teams = [
    "Acqua S.Bernardo Cantù",
    "Allianz Pallacanestro Trieste",
    "A|X Armani Exchange Milano",
    "Banco di Sardegna Sassari",
    "Carpegna Prosciutto Pesaro",
    "De'Longhi Treviso",
    "Dolomiti Energia Trentino",
    "Fortitudo Lavoropiù Bologna",
    "Germani Brescia",
    "Happy Casa Brindisi",
    "Openjobmetis Varese",
    "Umana Reyer Venezia",
    "UNAHOTELS Reggio Emilia",
    "Vanoli Basket Cremona"
  ];

  //Array delle partite
  $matches=[];

  //Elabora la lista delle Partite
  //OVVERO  ad ogni ciclo genera un array composto da due squadre che viene a sua volta inserito nell'array matches
  for($i=0; $i < 14; $i += 2 ){

    $matches[] = [$teams[$i], $teams[$i + 1]];

    // OPPPURE
    // $matches[] = [$teams[$i], $teams[$i + 1], rand(1, 100), rand(1, 100) ];

  };

  //Stampa della lista delle partite con i risultati
  for($i = 0; $i < 7; $i++){

    echo "<h5> partita $i : </h5>";
    echo "<p>" .$matches[$i][0] ." : <strong>" . rand(1, 100) ."</strong></p>";
    echo "<p>" .$matches[$i][1] ." : <strong>". rand(1, 100) ."</strong></p>";

  };

?>
