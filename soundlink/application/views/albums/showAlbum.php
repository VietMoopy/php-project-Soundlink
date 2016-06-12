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
				<li><a href="<?php echo base_url().'AboutConntroller';?>">About</a></li>
			</ul>
			<h3>
				<a href="<?php echo base_url();?>">Soundlink</a>
			</h3>
		</div>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Release</th>
					<th>Rating</th>
					<th>Artist</th>
				</tr>
			</thead>
		<?php
					$query = $this->MuAlbum->get($id);?>
			<tr>
				<td>
				<?php
					echo $query->name."<br/>";?>
				</td><td>
				<?php	
					echo $query->releaseDate."<br/>";?>
				</td><td>
				<?php
					if($query->globalRating != NULL)
						echo "GlobalRating : ".$query->globalRating."<br>";
					else
						echo "GlobalRating : -/5<br>";
					echo "<td><a href='".base_url().'ArtistController/showArtist/'.$query->idArtist.'\'>'.$query->idArtist."</a></td>";?>
				</td></tr>
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