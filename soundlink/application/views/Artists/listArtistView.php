<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
		<title>Artists</title>
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
		  <p>Pseudo<br>
		    <input type="text" name="name"/><br>Birthdate<br>
		    <input type="date" name="birthDate"/><br>Description<br>
		    <textarea name="description" rows="5" cols="25"/><br>
		    <input type="submit" value="Ok" />
		  </p>
		  <?php
		     extract($_GET);
		     if(isset($_GET['name'])){
		     $name = $_GET['name'];
		     }
		     if(isset($_GET['birthDate'])){
		     $birthDate = $_GET['birthDate'];
		     }
		     if(isset($_GET['description'])){
		     $description = $_GET['description'];
		     }
		     $link = new PDO("dwarves.iut-fbleau.fr/","navales","JwLy54NVALVQDRAn");
		     if(!$link){
		     die("<p>Connexion au serveur impossible</p>");
		     }
		     if(isset($name) && isset($birthDate) && isset($description)){
		     $link->query("insert into MuArtist(name,birthDate,description) 
					 values (\"$name\",\"$birthDate\",\"$description\")");
		     }
		     ?>
		</FORM>
		
		<table>
		  <thead>
		    <tr>
		      <th>Name</th>
		      <th>Birthdate</th>
		      <th>Description</th>
		      <th>Link</th>
		    </tr>
		  </thead>
		  <?php
		     $res = $link->query("select name, birthDate, description from MuArtist");
		     if(!$res){
		     echo "Problème";
		     }
		     else{
		     foreach($res as $value){
		     echo "<tr>";
		     echo "<td>".$value["name"]."</td>";
		     echo "<td>".$value["birthDate"]."</td>";
		     echo "<td>".$value["description"]."</td>";
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