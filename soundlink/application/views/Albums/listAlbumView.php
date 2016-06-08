<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
		<title>Albums</title>
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
		<p class="lead">Welcome to Soundlink, a social network about music !
		</p>
		
		
		<FORM method='get' action='listAlbumView.php'>
		  <p>Name<br>
		    <input type="text" name="name"/><br>Release Date<br>
		    <input type="date" name="releaseDate"/><br>Genre<br>
		    <input type="text" name="genre"/><br>Artist<br>
		    <input type="text" name="artist"/><br>
		    <input type="submit" value="Ok" />
		  </p>
		  <?php
		     extract($_GET);
		     if(isset($_GET['name'])){
		     $name = $_GET['name'];
		     }
		     if(isset($_GET['releaseDate'])){
		     $releaseDat = $_GET['releaseDat'];
		     }
		     if(isset($_GET['genre'])){
		     $genre = $_GET['genre'];
		     }
		     if(isset($_GET['artist'])){
		     $artist = $_GET['artist'];
		     }
		     $link = new PDO("dwarves.iut-fbleau.fr/","navales","JwLy54NVALVQDRAn");
		     if(!$link){
		     die("<p>Connexion au serveur impossible</p>");
		     }
		     if(isset($artist)){
		     $real = $link->query("select idA from MuArtist where \"$artist\" = nomA");
		     }
		     if(isset($name) && isset($releasedate) && isset($genre) && isset($artist)){
		     $link->query("insert into MuAlbum(name,releasedate,genre,idArtist) 
					 values (\"$name\",\"$releaseDate\",\"$genre\",\"$real\")");
		     }
		     ?>
		</FORM>
		
		<table>
		  <thead>
		    <tr>
		      <th>Name</th>
		      <th>Release Date</th>
		      <th>Genre</th>
		      <th>Artist</th>
		      <th>Link</th>
		    </tr>
		  </thead>
		  <?php
		     $res = $link->query("select name, releaseDate, genre, nameA from MuArtist natural join MuAlbum");
		     if(!$res){
		     echo "Problème";
		     }
		     else{
		     foreach($res as $value){
		     echo "<tr>";
		     echo "<td>".$value["name"]."</td>";
		     echo "<td>".$value["releaseDate"]."</td>"
		     echo "<td>".$value["genre"]."</td>"
		     echo "<td>".$value["nameA"]."</td>"
		     }
		     }
		     ?>
		</table>

		<footer>
			<hr>
			<div class="text-center">
				<a href="<?php echo base_url()?>IndexController">Front Page</a>
			</div>
		</footer>
	</div>
</body>
</html>