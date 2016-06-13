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
				<li><a href="<?php echo base_url().'ProfileController';?>">My
						profile</a></li>
				<li><a href="<?php echo base_url().'AboutController';?>">About</a></li>
			</ul>
			<h3>
				<a href="<?php echo base_url();?>">Soundlink</a>
			</h3>
		</div>
		<form method='post' action=<?php current_url();?>>
			<h4>Note :</h4>
			<input type="radio" name="note" value="null" checked>No minimum<br />
			<input type="radio" name="note" value="1" checked>One or plus<br /> <input
				type="radio" name="note" value="2" checked>Two or plus<br /> <input
				type="radio" name="note" value="3" checked>Three or plus<br /> <input
				type="radio" name="note" value="4" checked>Four or plus<br /> <input
				type="radio" name="note" value="5" checked>Five or plus<br /> <br>
			<h4>Min Date :</h4>
			<input type="date" name="minDate" /> <br />
			<h4>Genre :</h4>
			<input type="text" name="genre" id="genre"> <br> <br />
			<h4>Artist :</h4>
			<select name='artist'>
    				  <?php
										$artists = $this->MuArtist->get_all ();
										foreach ( $artists as $artist ) {
											echo "<option>" . $artist->nameA . "</option>";
										}
										?>
	<option value=1 selected>All</option>

			</select><br> <br /> <br /> <input name ="bouton" type="submit" value="Submit">
    <?php
				extract ( $_POST );
				if(isset($_POST['bouton'])){
				if (isset ( $genre ) && $genre != "") {
					redirect ( base_url () . "AlbumController/showAlbumsList/$genre/genre" );
				}
				switch ($_POST ['artist']) {
					case 1 :
						break;
					default :
					redirect ( base_url () . "AlbumController/showAlbumsList/$artist/artist" );
						break;
				}
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