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
				<li><a href="<?php echo base_url().'ProfileController';?>">My profile</a></li>
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
      <input type="radio" name="note" value="1" >One<br/>
      <input type="radio" name="note" value="2" >Two<br/>
      <input type="radio" name="note" value="3" checked>Three<br/>
      <input type="radio" name="note" value="4" >Four<br/>
      <input type="radio" name="note" value="5" >Five<br/>
			<input type="submit" value="Submit">
		</form>
    <footer>
			<hr>
			<div class="text-center">
				<a href="<?php echo base_url()?>IndexController">Front Page</a>
			</div>
		</footer>
	</div>
</body>
</html>