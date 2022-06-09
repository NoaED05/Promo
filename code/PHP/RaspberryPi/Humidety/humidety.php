<!DOCTYPE html>
<html>
  <head>
    <title>RPB_F</title>
    <link rel="stylesheet" href="humidety.css"/>
    <meta http-equiv="refresh" content="10">
  </head>
  <body>
    <div class="container">
      <div class="tittel">
        <div class="Tittel">
          <h1>Fuktighet</h1>
        </div>
    <div class="Nav">
      <div class="topnav"> 
        <ul><a href="../../../HTML/raspberrypi.html">Hjem</a></ul>
        <ul><a href="../Temp/Temp.php">Temperaturen</a></ul>
        <ul><a class="active" href="../humidity.php">Fuktighet</a></ul>
        <ul><a href="../PSI/psi.php">Trykk</a></ul> 
      </div>
    </div>
      </div>
      <div class="content"><h2>
      <p>Nyestete Data</p>
      <?php 
      // kobler indexen til tablen
      include 'Pizza pi/SELECT_Oversikt_H_L.php';
      ?>
      <br>
      <br>
      <p>Data Logg</p>
      <?php 
      // kobler indexen til tablen
      include 'Pizza pi/SELECT_Oversikt_H.php';
      ?>
      </h2></div>
      <div class="Footer"></div>
    </div>
  </body>
</html>
