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
				<li><a href="<?php echo base_url().'ProfileController';?>">My
						profile</a></li>
				<li><a href="<?php echo base_url().'AboutConntroller';?>">About</a></li>
			</ul>
			<h3>
				<a href="<?php echo base_url();?>">Soundlink</a>
			</h3>
		</div>
		<h4>Add Artist</h4>
		<form method="post" action=<?php current_url();?>>
			<label>Name</label> <input type="text" name="name" id="name"> <br> <label>BirthDate</label>
			<input type="date" name="birthDate" id="birthDate"
				placeholder="aaaa-mm-dd"> <br> <label>Description</label> <input
				type="text" name="description" id="description"> <br> <br> <br> <br>
			<input type="submit" value="Insert">
			<?php
			extract($_POST);
			if(isset($name) && ($birthDate) && ($description)){
				$this->MuArtist->insert($name,$birthDate,$description);
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
