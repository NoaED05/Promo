<?php
if(isset($_POST["leggtilN"])) 
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
    insert into Nettside(Link, Stikkord, Tittel) VALUES('$Link','$Stikkord','$Tittel');
    SET @nid := (last_insert_id());
    insert into Nettside_has_Forfatter(Nettside_Nettsideid, Forfatter_Forfatterid) VALUES(@nid,@fid);";
    // Akurate de samme som bok bare forskjelinge tabler



    if($kobling->multi_query($sql)) {
        //echo "Spørringen $sql ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
    
  
}

?>