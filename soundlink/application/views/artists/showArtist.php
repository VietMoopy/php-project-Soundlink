<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css"
	rel="stylesheet" />
<title>Artist</title>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<ul class="nav nav-pills pull-right">
				<li><a href="<?php echo base_url().'AlbumController';?>">Albums</a></li>
				<li><a href="<?php echo base_url().'ArtistController';?>">Artists</a></li>
				<li><a href="<?php echo base_url().'ProfileController';?>">My profile</a></li>
				<li><a href="<?php echo base_url().'AboutConntroller';?>">About</a></li>
			</ul>
			<h3>
				<a href="<?php echo base_url();?>">Soundlink</a>
			</h3>
		</div>
		<table cellspacing=5>
			<thead>
				<tr>
					<th>Artist Name</th>
					<th>BirthDate</th>
					<th>Description</th>
				</tr>
			</thead>
		  	<?php
					$query = $this->MuArtist->get($id);
				
					echo "<tr>";
					echo "<td>".$query->nameA."</td>";
					echo "<td>".$query->birthDate."</td>";
					echo "<td>".$query->description."</td>";
					echo "</tr>";
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
