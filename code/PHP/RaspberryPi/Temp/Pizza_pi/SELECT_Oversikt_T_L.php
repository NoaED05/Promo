<?php

// Tilkoblingsinformasjon	
    $tjener = "piasvg.mysql.database.azure.com";
    $brukernavn = "pizza";
    $passord = "Pizaz16075";
    $database = "pizza";
    $port = "3306";

// Opprette en kobling
$kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);


// Sjekk om koblingen virker
//  if ($kobling->connect_error) {
// die("Noe gikk galt: " . $kobling->connect_error);
// }    
// else {
//   echo "Koblingen virker"; }

//Angi UTF-8 som tegnsett
$kobling->set_charset("utf8");




$sql = $sql = 'SELECT RBP.id, RBP.romNummer, CAST(RBP.Temperatur AS DECIMAL(3,1)) AS Temperatur, RBP.dato FROM RBP ORDER BY dato DESC LIMIT 1 ;';

$resultat = $kobling->query($sql);

echo "<table>"; // Starter tabellen
echo "<table border=\"1\" cellpadding=\"2\">";
echo "<th>Rom</th>";    
echo "<th>Temperatur</th>"; 
echo "<th>Dato</th>";

 
 

echo "</tr>";
// gir tabelen id-er
while($rad = $resultat->fetch_assoc()) {
    $RN = $rad["romNummer"];
    $TEMPL = $rad["Temperatur"];
    $dt = $rad["dato"];
    
    
 
 
 echo "<tr>"; // endre stærelsen
 echo "<td style=\"width:90px\">$RN</td>";
 echo "<td style=\"width:90px\">$TEMPL °C</td>";
 echo "<td style=\"width:120px\">$dt</td>";
    
 echo "</tr>";
}

echo "</table>"; // Avslutter tabellen


?>
