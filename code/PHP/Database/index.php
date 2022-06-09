<head>
    <title>database</title>
    <link rel="stylesheet" href="../../CSS/main.css"/>
  </head>
<div class="container">
  <div class="tittle">
    <div class="name">
      <h1>Database</h1>
    </div>
    <div class="topnav">
      <ul><a href="../../../index.html">Hjem</a></ul>
      <ul><a href="../../HTML/IKT.html">IKT</a></ul>
      <ul><a href="../../HTML/Teknologi.html">Teknologi</a></ul>
      <ul><a href="../../HTML/Media.html">Media</a></ul>
      <ul><a href="../../HTML/YFF.html">YFF</a></ul>
      <ul><a class="active" href="index.php">Database</a></ul>
      <ul><a href="../../HTML/raspberrypi.html">Raspberry Pi</a></ul>
      <ul><a href="../../HTML/binaer.html">Binaer</a></ul>

    </div>
  </div>
  <div class="content">
    <h2>Nettside kilder</h2>
    <?php
      include 'PHP_N/database.php'; // leger inn input
      include 'PHP_N/SELECT_Oversikt1.php'; // lager tabelen
    ?>
    <br>
    <br>
    <h2>Bok kilder</h2>
    <?php
      include 'PHP_B/database.php'; // leger inn input
      include 'PHP_B/SELECT_Oversikt1.php'; // lager tabelen
    ?>
  </div>
  <div class="footer"></div>
</div>


