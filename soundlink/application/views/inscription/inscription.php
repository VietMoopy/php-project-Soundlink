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
		<h4>Inscription</h4>
		<form method="post" action=<?php current_url();?>>
			<label>Username</label> <input type="text" name="username" id="username"> <br> <label>Mail</label>
			<input type="email" name="mail" id="mail"> <br> <label>Password</label> 
      <input type="password" name="pssword" id="pssword"> <br> <br> <br> <br>
			<input type="submit" value="Inscription">
			<?php
			extract($_POST);
			if(isset($username) && ($mail) && ($pssword)){
				$this->MuUser->insert($username,$mail,$pssword);
				echo '<br/>Inscription done';
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