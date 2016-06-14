<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css"
	rel="stylesheet" />
<title>Albums</title>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<ul class="nav nav-pills pull-right">
				<li><a href="<?php echo base_url().'AlbumController';?>">Albums</a></li>
				<li><a href="<?php echo base_url().'ArtistController';?>">Artists</a></li>
				<li><a href="<?php echo base_url().'InscriptionController';?>">Inscription</a></li>
				<li><a href="<?php echo base_url().'AboutController';?>">About</a></li>
			</ul>
			<h3>
				<a href="<?php echo base_url();?>">Soundlink</a>
			</h3>
		</div>
      <?php
          $query = $this->MuAlbum->get($id);
          $artist = $this->MuArtist->get($query->idArtist);
					echo "Name : ".$query->name."<br>";
					echo "ReleaseDate : ".$query->releaseDate."<br>";
					echo "Genre : ".$query->genre."<br>";
					if($query->globalRating != NULL)
						echo "GlobalRating : ".$query->globalRating."<br>";
					else
						echo "GlobalRating : ./5<br>";
					echo "Artiste : ".$artist->nameA."<br>";
      ?>  
		<form method='post' action=<?php current_url();?>>
			<h4>
        Note :
      </h4>
      <input type="radio" name="value" value="1" >One<br/>
      <input type="radio" name="value" value="2" >Two<br/>
      <input type="radio" name="value" value="3" checked>Three<br/>
      <input type="radio" name="value" value="4" >Four<br/>
      <input type="radio" name="value" value="5" >Five<br/>
			<input name="bouton" type="submit" value="Submit">
		</form>
		 <?php
				extract ( $_POST );
				if(isset($_POST['bouton'])){
				if (isset ($value)) {
					$idRating = $this->MuRating->checkRating($id,"user");
					if($idRating != null){
						$idRating = $idRating->idRating;
						$this->MuRating->update($value,$id);
						echo "Votre note a bien ete mise a jour";
					}
					else{
					$this->MuRating->insert($value,'user',$id);
					echo "Votre note a bien ete prise en compte";
				}
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