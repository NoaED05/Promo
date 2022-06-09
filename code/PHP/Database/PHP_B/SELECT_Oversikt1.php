<?php

   // Tilkoblingsinformasjon	
   $tjener = "localhost";
   $brukernavn = "root";
   $passord = "root";
   $database = "IKMOppgave";
   $port = "8889";

   // Opprette en kobling
   $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);

   $kobling->set_charset("utf8");


$sql = "SELECT B.Bokid,B.Tittel,B.Link,B.Stikkord,F.Forfatterid,F.Fornavn,F.Etternavn
FROM IKMOppgave.Bok B, IKMOppgave.Forfatter F,IKMOppgave.Bok_has_Forfatter BF
WHERE B.Bokid=BF.Bok_Bokid 
AND BF.Forfatter_Forfatterid=F.Forfatterid";



$resultat = $kobling->query($sql);


echo "<table>"; // Starter tabellen
echo "<table border=\"1\" cellpadding=\"2\">";
echo "<tr>"; // Lager  overskrifter
echo "<th>Forfatterid</th>";
echo "<th>Bokid</th>";
echo "<th>Tittel</th>";
echo "<th>Link</th>";
echo "<th>Stikord</th>"; 
echo "<th>Fornavn</th>";
echo "<th>Etternavn</th>";



echo "</tr>";

while($rad = $resultat->fetch_assoc()) {
$FID = $rad["Forfatterid"];
$BID = $rad["Bokid"];
$Tittel = $rad["Tittel"];
$Link = $rad["Link"];
$Stikkord = $rad["Stikkord"];
$FF = $rad["Fornavn"];
$FE = $rad["Etternavn"];

echo "<tr>"; // Ender Width på table
    echo "<td style=\"width:90px\">$FID</td>";
    echo "<td style=\"width:90px\">$BID</td>"; 
    echo "<td style=\"width:130px\">$Tittel</td>"; 
    echo "<td style=\"width:622px\"><a href=\"$Link\">$Link</a></td>";
    echo "<td style=\"width:100px\">$Stikkord</td>";
    echo "<td style=\"width:100px\">$FF</td>";
    echo "<td style=\"width:100px\">$FE</td>";
       
    echo "</tr>";
}

echo "</table>"; // Avslutter tabellen
echo "<br>"

?>


