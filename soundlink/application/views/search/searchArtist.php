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
    <form method='post' action=<?php current_url();?>>
			<h4>
        Name :
      </h4>
			<input type="text" name="name"/><br/>
			<input type="submit" value="Submit">
    <?php
		extract($_POST);
		if(isset ($name)){
      echo $this->db->query("SELECT * FROM MuArtist WHERE nameA = \"$name\";")->row()->nameA;
			echo 'Insert done';
		}
		?>
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