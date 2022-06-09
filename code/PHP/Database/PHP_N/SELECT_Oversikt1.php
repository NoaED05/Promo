
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



    $sql = "SELECT N.Nettsideid,N.Tittel,N.Link,N.Stikkord,F.Forfatterid,F.Fornavn,F.Etternavn
    FROM IKMOppgave.Nettside N, IKMOppgave.Forfatter F,IKMOppgave.Nettside_has_Forfatter NF
    WHERE N.Nettsideid=NF.Nettside_Nettsideid 
    AND NF.Forfatter_Forfatterid=F.Forfatterid";

$resultat = $kobling->query($sql);


echo "<table>"; // Starter tabellen
echo "<table border=\"1\" cellpadding=\"2\">";
echo "<tr>"; // Lager overskrifter
echo "<th>Forfatterid</th>";    
echo "<th>Nettsideid</th>";
echo "<th>Tittel</th>";
echo "<th>Link</th>";
echo "<th>Stikord</th>"; 
echo "<th>Fornavn</th>";
echo "<th>Etternavn</th>";




echo "</tr>"; 
while($rad = $resultat->fetch_assoc()) { //Henter Data fra resutalt ^

$FID = $rad["Forfatterid"];
$NID = $rad["Nettsideid"];
$Tittel = $rad["Tittel"];
$Link = $rad["Link"];
$Stikkord = $rad["Stikkord"];
$FF = $rad["Fornavn"];
$FE = $rad["Etternavn"];

echo "<tr>"; // Ender Width på table
    echo "<td style=\"width:90px\">$FID</td>";
    echo "<td style=\"width:90px\">$NID</td>"; 
    echo "<td style=\"width:130px\">$Tittel</td>"; 
    echo "<td style=\"width:622px\"><a href=\"$Link\">$Link</a></td>";;
    echo "<td style=\"width:100px\">$Stikkord</td>";
    echo "<td style=\"width:100px\">$FF</td>";
    echo "<td style=\"width:100px\">$FE</td>";
       
    echo "</tr>";
}

echo "</table>"; // Avslutter tabellen


?>


