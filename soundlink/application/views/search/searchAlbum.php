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
      <h4>
				<input name ="bouton2" type="submit" value="Submit">
	  </form>
<form method='post' action=<?php current_url();?>>
        Genre :
      </h4>
      <input type="text" name="genre" id="genre"> <br>
      <br/><h4>
				<input name ="bouton1" type="submit" value="Submit">
</form>
<form method='post' action=<?php current_url();?>>
        Artist :
      </h4>
      </label> <select name='artist' size='1' id='artist'>
          <option>All</option>
    				  <?php
										$artists = $this->MuArtist->get_all ();
										foreach ( $artists as $artist ) {
											echo "<option>" . $artist->nameA . "</option>";
										}
										?>
	<option value=1 selected>All</option>
			</select><br> <br /> <br /> <input name ="bouton" type="submit" value="Submit">
    </form>
	    <?php
				extract ( $_POST );
				if(isset($_POST['bouton2'])){
						if (isset ( $name ) && $name != "") {
					redirect ("AlbumController/showAlbumsList/$name/name" );
				}
				}
				if(isset($_POST['bouton1'])){
						if (isset ( $genre ) && $genre != "") {
							redirect ("AlbumController/showAlbumsList/$genre/genre" );
						}
				}
			if(isset($_POST['bouton'])){
						if (isset ( $artist ) && $artist != "") {
					redirect ("AlbumController/showAlbumsList/$artist/artist" );
				}
		}
				?>
		<footer>
			<hr>
			<div class="text-center">
				<a href="<?php echo base_url()?>IndexController">Front Page</a>
			</div>
		</footer>
	</div>
</body>
</html>