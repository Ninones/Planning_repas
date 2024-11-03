<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
    <title>Planning des repas</title>
</head>
<body>
<?php 
$liste_plats_midi = array();
$liste_plats_soir = array();  
?>
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $conn = new PDO('mysql:host=localhost;dbname=repas', $username, $password);
    foreach ($conn->query('SELECT * FROM midi') as $row){
      array_push($liste_plats_midi, $row[1]); 
    }
    foreach ($conn->query('SELECT * FROM soir') as $row){
      array_push($liste_plats_soir, $row[1]); 
    }
        ?>

  <form action="form.php" method="get">
  <ul>
    <li>
      <label for="name">Nom du plat:</label>
      <input type="text" id="name" name="nom" />
    </li>
    <li>
    <fieldset>
  <legend>Repas du : </legend>
  <div>
    <input type="checkbox" id="midi" name="midi"/>
    <label for="midi">Midi</label>
  </div>

  <div>
    <input type="checkbox" id="soir" name="soir" />
    <label for="soir">Soir</label>
  </div>
</fieldset>
    </li>
  </ul>
  <input type="submit" name="submit" /> 
</form>



<table>
<caption> Planning de la semaine </caption>
<thead>
  <tr>
    <td>Lundi</td>
    <td>Mardi</td>
    <td>Mercredi</td>
    <td>Jeudi</td>
    <td>Vendredi</td>
    <td>Samedi</td>
    <td>Dimanche</td>
  </tr>
</thead>

<tbody>
  <tr>
    <td>Midi</td>
    <td>Midi</td>
    <td>Midi</td>
    <td>Midi</td>
    <td>Midi</td>
    <td>Midi</td>
    <td>Midi</td>
  </tr>
  <tr>
  <?php shuffle($liste_plats_midi); 
    for ($i = 0; $i <= 5; $i++) {
        echo "<td>$liste_plats_midi[$i]</td>"; 
}?>
  <td>Frites - saumon</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Soir</td>
    <td>Soir</td>
    <td>Soir</td>
    <td>Soir</td>
    <td>Soir</td>
    <td>Soir</td>
    <td>Soir</td>
  </tr>
  <tr>
  <?php shuffle($liste_plats_soir); 
    for ($i = 0; $i <= 6; $i++) {
        echo "<td>$liste_plats_soir[$i]</td>"; 
}?>
  </tr>
</tbody>
</table>

</body>
</html>
