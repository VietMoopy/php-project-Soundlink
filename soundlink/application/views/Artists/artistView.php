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
          $query = $this->MuAlbum->get(id);
					$artist = $this->db->query("select nameA from MuArtist where idArtist = $row->idArtist;")->row();
					echo "<tr>";
					echo "<td><a href=''>".$row->nameA."</a></td>";
					echo "<td><a href=''>".$row->birthDate."</a></td>";
					echo "<td><a href=''>".$row->description."</a></td>";
					echo "</tr>";
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