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
$liste_plats_midi = array("plat1", "plat2", "plat3", "plat4", "plat5", "plat6", "plat7", "plat8", "plat9", "plat10", "plat11");
$liste_plats_soir = array("plat1", "plat2", "plat3", "plat4", "plat5", "plat6", "plat7", "plat8", "plat9");  
?>

  <form action="" method="get">
  <ul>
    <li>
      <label for="name">Nom du plat:</label>
      <input type="text" id="name" name="nom" />
    </li>
    <li>
    <fieldset>
  <legend>Repas du : </legend>
  <div>
    <input type="checkbox" id="midi" name="midi" checked />
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

<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     $nom = $_GET['nom']; 
     $repas1 = $_GET['midi']; 
     $repas2 = $_GET['soir']; 
     echo $nom, $repas1, $repas2; 
     exit;
  }
?>


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
    for ($i = 1; $i <= 7; $i++) {
        echo "<td>$liste_plats_midi[$i]</td>"; 
}?>
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
    for ($i = 1; $i <= 7; $i++) {
        echo "<td>$liste_plats_soir[$i]</td>"; 
}?>
  </tr>
</tbody>
</table>
</body>
</html>
