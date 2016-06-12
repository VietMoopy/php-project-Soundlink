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
				<li><a href="<?php echo base_url().'artists';?>">Artists</a></li>
				<li><a href="<?php echo base_url().'profile';?>">My profile</a></li>
				<li><a href="<?php echo base_url().'about';?>">About</a></li>
			</ul>
			<h3>
				<a href="<?php echo base_url();?>">Soundlink</a>
			</h3>
		</div>
		<p class="lead">Albums List</p>


		<!-- <FORM method='get' action='listAlbumView.php'>
			<p>
				Name<br> <input type="text" name="name" /><br> Release Date<br> <input
					type="date" name="releaseDate" /><br> Genre<br> <input type="text"
					name="genre" /><br> Artist<br> <input type="text" name="artist" /><br>
				<input type="submit" value="Ok" />
			</p>
		  <?php
				extract ( $_POST );
				if (isset ( $_POST ['name'] )) {
					$name = $_POST ['name'];
				}
				if (isset ( $_POST ['releaseDate'] )) {
					$releaseDate = $_POST ['releaseDate'];
				}
				if (isset ( $_POST ['genre'] )) {
					$genre = $_POST ['genre'];
				}
				if (isset ( $_POST ['artist'] )) {
					$artist = $_POST ['artist'];
				}
				if (isset ( $artist )) {
					$this->db->query ( "select idA from MuArtist where \"$artist\" = nomA" );
				}
				if (isset ( $name ) && isset ( $releasedate ) && isset ( $genre ) && isset ( $artist )) {
					$this->db->query ( "insert into MuAlbum(name,releaseDate,genre,idArtist) 
					 values (\"$name\",\"$releaseDate\",\"$genre\",\"$real\")" );
				}
				?>
		</FORM>*/ -->

		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>ReleaseDate</th>
					<th>Artist</th>
					<th>Genre</th>
				</tr>
			</thead>
		  <?php
				if (! isset ( $name ) && ! isset ( $releasedate ) && ! isset ( $genre ) && ! isset ( $artist ))
					$query = $this->MuAlbum->get_all();
				foreach($query as $row) {
					$artist = $this->db->query("SELECT nameA FROM MuArtist WHERE idArtist = $row->idArtist;")->row();
					echo "<tr>";
					echo "<th>".$row->idAlbum ."</th>";
					echo "<th>".$row->name ."</th>";
					echo "<th>".$row->releaseDate."</th>";
					echo "<th>".$artist->nameA."</th>";
					echo "<th>".$row->genre."</th>";
					echo "</tr>";
				}
				?>
		</table>
		<hr>
		<footer>
			<div class="text-center">
				<a href="<?php echo base_url()?>IndexController">Front Page</a>
			</div>
		</footer>
	</div>
</body>
</html>