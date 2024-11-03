<?php
$servername = 'localhost';
$username = 'root';
$password = '';

$conn = new PDO('mysql:host=localhost;dbname=repas', $username, $password);

   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     $nom = $_GET['nom']; 
     if(isset($_GET['midi'])){
      $sql = "INSERT INTO midi (nom) VALUES ('$nom')"; 
      $conn->query($sql); 
    }
     if(isset($_GET['soir'])){
      $sql = ("INSERT INTO soir (nom) VALUES ('$nom') "); 
      $conn->query($sql);
     }
     echo "Le nouveau plat a bien été ajouté ! ";
     echo "<a href=index.php>Retour</a>"; 
     exit;
  }
?>
