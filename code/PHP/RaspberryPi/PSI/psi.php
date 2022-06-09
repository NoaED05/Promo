<!DOCTYPE html>
<html>
  <head>
    <title>RPB_T</title>
    <link rel="stylesheet" href="psi.css"/>
    <meta http-equiv="refresh" content="10">
  </head>
  <body>
    <div class="container">
      <div class="tittel">
        <div class="Tittel">
          <h1>Trykk</h1>
        </div>
    <div class="Nav">
      <div class="topnav"> 
        <ul><a href="../../../HTML/raspberrypi.html">Hjem</a></ul>
        <ul><a href="../Temp/Temp.php">Temperaturen</a></ul>
        <ul><a href="../Humidety/humidety.php">Fuktighet</a></ul>
        <ul><a class="active" href="psi.php">Trykk</a></ul> 
      </div>
    </div>
      </div>
      <div class="content"><h2>
        <p>Nyestete Data</p>
      <?php 
      // kobler indexen til tablen
      include 'Pizza pi/SELECT_Oversikt_P_L.php';
      ?>
      <br>
      <br>
      <p>Data Logg</p>
      <?php 
      // kobler indexen til tablen
      include 'Pizza pi/SELECT_Oversikt_P.php';
      ?>
      </h2></div>
      <div class="Footer"></div>
    </div>
  </body>
</html>
