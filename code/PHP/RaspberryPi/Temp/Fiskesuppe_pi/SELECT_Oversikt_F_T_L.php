<?php
 // Tilkoblingsinformasjon
 $tjener = "piasvg.mysql.database.azure.com";
 $brukernavn = "fiskesuppe";
 $passord = "Fishsoup2002";
 $database = "fiskesuppe";

 // Opprette en kobling

 $kobling = new mysqli ($tjener, $brukernavn, $passord, $database);

  // Sjekk om koblingen virker
  if ($kobling->connect_error) {
    die ("Noe gikk galt: " . $kobling->connect_error) ;
  } 

  //Gjør en sql spørring.
  $sql = "SELECT * FROM fiskesuppe.data ORDER BY DataNR DESC LIMIT 1;";

  $resultat = $kobling->query($sql);

  echo "<table>"; // Starter tabellen
echo "<table border=\"1\" cellpadding=\"2\">";
echo "<th>Temperatur</th>";    
echo "<th>Dato</th>"; 

  //Henter dataen fra databasen
  while ($rad = $resultat->fetch_assoc()) {
    $temp = $rad["Temperature"];
    $tid = date('d-m-y H:i:s', $rad["Time"]);


 //Henter data fra databasen og vises på nettsiden.(Temperatur, Tid, Fuktighet og Lys)

 echo "<tr>"; // endre stærelsen
 echo "<td style=\"width:90px\">$temp</td>";
 echo "<td style=\"width:90px\">$tid </td>";
    
 echo "</tr>";
}

echo "</table>"; // Avslutter tabellen