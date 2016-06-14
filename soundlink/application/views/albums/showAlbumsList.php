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
		<p class="lead">Albums List</p>
		<a href="<?php echo base_url().'AlbumController/addAlbum';?>">Add an album</a>
		<br/><br/>
		<a href="<?php echo base_url().'ResearchController/searchAlbum';?>">Find an album</a>
		<br/><br/>
		<table>
			<thead>
				<tr>
					<th>Name</th>
				</tr>
			</thead>
		  <?php
		  if(isset($type)){
				if($type == 'genre'){
					$arg = str_replace('%20', ' ', $arg);
					$query = $this->MuAlbum->get_from_genre($arg);
					foreach($query as $row) {
						echo "<tr>";
						echo "<td><a href='".base_url().'AlbumController/showAlbum/'.$row->idAlbum.'\'>'.$row->name."</a></td>";
						echo "</tr>";
					}
				}
				else if($type == 'artist'){
					$arg = str_replace('%20', ' ', $arg);
					$query = $this->MuAlbum->get_from_artist($arg);
					foreach($query as $row) {
						echo "<tr>";
						echo "<td><a href='".base_url().'AlbumController/showAlbum/'.$row->idAlbum.'\'>'.$row->name."</a></td>";
						echo "</tr>";
					}
				}
				else{
					$query = $this->MuAlbum->get_all();
					foreach($query as $row) {
						echo "<tr>";
						echo "<td><a href='".base_url().'AlbumController/showAlbum/'.$row->idAlbum.'\'>'.$row->name."</a></td>";
						echo "</tr>";
					}
				}
		  }
/*
				if(!isset($name)){
					$name = null;
				}
				if(!isset($note)){
					$note = null;
				}
				if(!isset($date)){
					$date = null;
				}
				if(!isset($genre)){
					$genre = null;
				}
				if(!isset($artist)){
					$artist = null;
				}
				//$query = $this->MuAlbum->get_per($name,$note,$date,$genre,$artist);
				$query = $this->MuAlbum->get_all();
				foreach($query as $row) {
					echo "<tr>";
					echo "<td><a href='".base_url().'AlbumController/showAlbum/'.$row->idAlbum.'\'>'.$row->name."</a></td>";
					echo "</tr>";
				}
				
>>>>>>> origin/master*/
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