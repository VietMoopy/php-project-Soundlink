<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css"
	rel="stylesheet" />
<title>Artists</title>
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
		<p class="lead">Artists List</p>
		<a href="<?php echo base_url().'ArtistController/addArtist';?>">Add an
			artist</a> <br /> <br /> <a
			href="<?php echo base_url().'ResearchController/searchArtist';?>">Find
			an artist</a> <br /> <br />
		<table>
			<thead>
				<tr>
					<th>Artist Name</th>
				</tr>
			</thead>
		  <?php
				if ($name != '') {
					$query = $this->MuArtist->get_from_name ( $name );
					foreach ( $query as $row ) {
						echo "<tr>";
						echo "<td><a href='" . base_url () . 'ArtistController/showArtist/' . $row->idArtist . '\'>' . $row->nameA . "</a></td>";
						echo "</tr>";
					}
				} else {
					$query = $this->MuArtist->get_all ();
					foreach ( $query as $row ) {
						echo "<tr>";
						echo "<td><a href='" . base_url () . 'ArtistController/showArtist/' . $row->idArtist . '\'>' . $row->nameA . "</a></td>";
						echo "</tr>";
					}
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