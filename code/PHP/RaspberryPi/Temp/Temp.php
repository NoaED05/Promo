<!DOCTYPE html>
<html>
  <head>
    <title>RBP_T</title>
    <link rel="stylesheet" href="Temp.css"/>
    <meta http-equiv="refresh" content="10">
    
  </head>
  <body>
    <div class="container">
      <div class="tittel">
        <div class="Tittel">
          <h1>Temperaturen</h1>
        </div>
    <div class="Nav">
      <div class="topnav"> 
        <ul><a href="../../../HTML/raspberrypi.html">Hjem</a></ul>
        <ul><a class="active" href="Temp.php">Temperaturen</a></ul>
        <ul><a href="../Humidety/humidety.php">Fuktighet</a></ul>
        <ul><a href="../PSI/psi.php">Trykk</a></ul> 
      </div>
    </div>
      </div>
    <div class="content">
      <div class="P_T_L"><h2>
        <p> Nyestete Data fra Pizza</p>
        <?php 
        // kobler indexen til tablen
        include 'Pizza_pi/SELECT_Oversikt_T_L.php';
        ?>
      </h2></div>
    <div class="F_T_L"><h2>
      <p> Nyestete Data fra fiskesuppe</p>
      <?php 
      // kobler indexen til tablen
      include 'Fiskesuppe_pi/SELECT_Oversikt_F_T_L.php';
      ?>
      </h2></div>
    <div class="P_T"><h2>
      <p>Data Logg</p>
      <?php 
      // kobler indexen til tablen
      include 'Pizza_pi/SELECT_Oversikt_T.php';
      ?>
      </h2></div>
    <div class="F_L"><h2>
      <p>Data Logg</p>
      <?php 
      // kobler indexen til tablen
      include 'Fiskesuppe_pi/SELECT_Oversikt_F_T.php';
      ?>
    </h2></div>
      </div>      
      <div class="Footer"></div>
    </div>

  </body>
</html>
