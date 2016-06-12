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
		<table>
			<thead>
				<tr>
					<th>Artist Name</th>
					<th>BirthDate</th>
					<th>Description</th>
				</tr>
			</thead>
		  	<?php
					$query = $this->MuArtist->get($id);?>
			<tr>
				<td>
				<?php
					echo $query->nameA;?>
				</td><td>
				<?php	
					echo $query->birthDate;?>
				</td><td>
				<?php
					echo $query->description;?>
				</td></tr>
		</table>
		<br/><br/>
		Albums :<br/>
		
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Release Date</th>
					<th>Genre</th>
					<th>Artist</th>
				</tr>
			</thead>
		  <?php
				if (! isset ( $name ) && ! isset ( $releasedate ) && ! isset ( $genre ) && ! isset ( $artist ))
					$query = $this->MuArtist->get_albums();
				foreach($query as $row) {
					echo "<tr>";
					echo "<td><a href='".base_url().'AlbumController/showAlbum/'.$row->idAlbum.'\'>'.$row->name."</a></td>";
					echo "<td>".$row->releaseDate."</td>";
					echo "<td>".$row->genre."</td>";
					echo "</tr>";
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
