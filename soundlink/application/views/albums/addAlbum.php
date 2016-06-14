<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css"
	rel="stylesheet" />
<title>SoundLink</title>
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
		<h4>Add Album</h4>
		<form method="post" action=<?php current_url();?>>
			<label>Name</label> <input type="text" name="name" id="name"> <br> <label>ReleaseDate</label>
			<input type="date" name="releaseDate" id="releaseDate" placeholder="aaaa-mm-dd"> <br> <label>Genre</label>
			<input type="text" name="genre" id="genre"> <br> <label for='artiste'>Artist
			</label> <select name='artist' size='1' id='artist'>
    				  <?php
						$artists = $this->MuArtist->get_all();
						foreach ( $artists as $artist ) {
							echo "<option>" . $artist->nameA."</option>";
						}
						?>
			</select><br>
			<br> <br> <br> <input type="submit" value="Insert">
		<?php
		extract($_POST);
		if(isset($name) && ($releaseDate) && ($genre) && ($artist)){
			$this->MuAlbum->insert($name,$releaseDate,$genre,$artist);
			echo 'Insert done';
		}
		?>
		</form>
		<hr>
		<footer>
			<div class="text-center">
				<a href="<?php echo base_url();?>">Home</a>
			</div>
		</footer>
	</div>
</body>
</html>
