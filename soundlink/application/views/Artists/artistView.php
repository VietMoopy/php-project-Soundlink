<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
		<title>Artist</title>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<ul class="nav nav-pills pull-right">
					<li> <a href="<?php echo base_url().'albums';?>">List of albums</a></li>
					<li> <a href="">About</a></li>
				</ul>
				<h3 class="muted">Soundlink
			</h3>
		</div>
      <?php
        $link = new PDO("dwarves.iut-fbleau.fr/","navales","JwLy54NVALVQDRAn");
		    if(!$link){
		      die("<p>Connexion au serveur impossible</p>");
		    }
        if(!isset($_GET['idA'])){
          echo "Unfound Artist";
        }
        else{
          $idA = $_GET['idA'];
          $res = $link->prepare("select nameA, birthDate, description from MuArtist where idArtist = :idA ");
          $res->bindParam(':idA', $idA);
          $res->execute();
		      if(!$res){
		      echo "Problème";
		      }
          echo "<h1>".$res["nameA"]."</h1><br/>";
          echo "<h5>".$res["birthDate"]."</h5><br/>";
          echo "<p>".$res["description"]."</p><br/>";
          
          $idA = $_GET['idA'];
          $res = $link->prepare("select name, releaseDate from MuArtist natural join MuAlbum where idArtist = :idA ");
          $res->bindParam(':idA', $idA);
          $res->execute();
          
          foreach($res as $value){
          echo "<h1>".$value["name"]."</h1>"." ";
          echo "<h5>".$value["releaseDate"]."</h5><br/>";
          }
        }
      ?>      
    <footer>
			<hr>
			<div class="text-center">
				<a href="<?php echo base_url()?>IndexController">Front Page</a>
			</div>
		</footer>
	</div>
</body>
</html>