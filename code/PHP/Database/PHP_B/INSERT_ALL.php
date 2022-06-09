<?php
if(isset($_POST["leggtilB"])) 
 {
   // Tilkoblingsinformasjon	
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "IKMOppgave";
    $port = "8889";

      // Opprette en kobling
      $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);

    // Sjekk om koblingen virker
   if ($kobling->connect_error) {
   die("Noe gikk galt: " . $kobling->connect_error);
 }
 
    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");


    // Lagrer skjemafeltene i enklere navn
    $FF = $_POST["Fornavn"];
    $FE = $_POST["Etternavn"];
    $Tittel = $_POST["Tittel"];
    $Link = $_POST["Link"];
    $Stikkord = $_POST["Stikkord"];
    
    $sql = "insert into forfatter(Fornavn, Etternavn) VALUES('$FF','$FE');
    SET @fid := (last_insert_id());
    insert into Bok(Link, Stikkord, Tittel) VALUES('$Link','$Stikkord','$Tittel');
    SET @bid := (last_insert_id());
    insert into Bok_has_Forfatter(Bok_Bokid, Forfatter_Forfatterid) VALUES(@bid,@fid);";// SQL koden legger in valuesene fra form
    // Så vi databasen lagen en id til forfatter og til bok fordi jeg har auto incroment på
    // Etter dette tar sql koden det den site forfatter id som ble laget og bok is som ble lagret og insert den i bok_has_forfater
    //for å koble de sammen
    
    if($kobling->multi_query($sql)) {
        //echo "Spørringen $sql ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
    // trengte å bytte til en multi_query for at dette sule fungerer
  
}
 
?>