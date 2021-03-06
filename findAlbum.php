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
				<li><a href="<?php echo base_url().'albums';?>">List of albums</a></li>
				<li><a href="">About</a></li>
			</ul>
			<h3 class="muted">Soundlink</h3>
		</div>
		<p class="lead">Welcome to Soundlink, a social network about music !</p>

  <FORM method='get' action='listAlbumView.php'>
			<p>
				Name<br> 
        <input type="text" name="name" /><br>Release Date<br>
        <input type="date" name="releaseDate" /><br>Genre<br> 
        <input type="text" name="genre" /><br>Artist<br> 
        <input type="text" name="artist" /><br>
				<input type="submit" value="Ok" />
			</p>
		  <?php
				extract ( $_GET );
				if (isset ( $_GET ['name'] )) {
					$name = $_GET ['name'];
				}
				if (isset ( $_GET ['releaseDate'] )) {
					$releaseDate = $_GET ['releaseDate'];
				}
				if (isset ( $_GET ['genre'] )) {
					$genre = $_GET ['genre'];
				}
				if (isset ( $_GET ['artist'] )) {
					$artist = $_GET ['artist'];
				}
				if (isset ( $artist )) {
					$this->db->query ( "select idA from MuArtist where \"$artist\" = nomA" );
				}
				if (isset ( $name ) && isset ( $releasedate ) && isset ( $genre ) && isset ( $artist )) {
					$this->db->query ( "insert into MuAlbum(name,releaseDate,genre,idArtist) 
					 values (\"$name\",\"$releaseDate\",\"$genre\",\"$real\")" );
				}
				?>
		</FORM>
    <p>
      Recherche  
    </p>
    <form method='get' action='findAlbum.php'>
      One or plus
      <input type="radio" name="note" value="1" checked>
      Two or plus
      <input type="radio" name="note" value="2" checked>
      Three or plus
      <input type="radio" name="note" value="3" checked>
      Four or plus
      <input type="radio" name="note" value="4" checked>
      Five or plus
      <input type="radio" name="note" value="5" checked>
      <br>Minimum Date<br>
      <input type="date" name="minDate" />
      <br/>Genre<br/>
      <SELECT name='genre'>
      <?php
        $reqGenre = "select distinct genre from MuAlbum";
        $stmt = $this->db->query($reqGenre);
        $stmt->setFetchMode(PDO::FETCH_CLASS,"MuAlbum");
        if (! $stmt) {
					echo "Problème";
				}
        while($row = $stmt->setFetchMode(PDO::FETCH_ASSOC)){
          echo "<option value=".$row['genre'].">".$row['genre'];
        }
      ?>
      </SELECT>
      <br/>Artist<br/>
      <SELECT name='artist'>
      <?php
        $reqArtist = "select distinct nameA from MuAlbum natural join MuArtist";
        $stmt = $this->db->query($reqArtist);
        $stmt->setFetchMode(PDO::FETCH_CLASS,"MuAlbum");
        if (! $stmt) {
					echo "Problème";
				}
        while($row = $stmt->setFetchMode(PDO::FETCH_ASSOC)){
          echo "<option value=".$row['nameA'].">".$row['nameA'];
        }
      ?>
      </SELECT>
      <br/><br/>
      <input type="submit" value="Submit">
    </form>
    <br/><br/>
    <table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Release Date</th>
					<th>Genre</th>
					<th>Artist</th>
					<th>Link</th>
				</tr>
			</thead>
		  <?php
				$sql = "SELECT * FROM MuAlbum";
				$stmt = $this->db->query ( $sql );
				$stmt->setFetchMode ( PDO::FETCH_CLASS, "MuAlbum" );
				if (! $stmt) {
					echo "Problème";
				} else {
					while ( $row = $stmt->setFetchMode ( PDO::FETCH_ASSOC ) ) {
						
						echo "<tr>";
						echo "<td>" . $row ["name"] . "</td>";
						echo "<td>" . $row ["releaseDate"] . "</td>";
						echo "<td>" . $row ["genre"] . "</td>";
						echo "<td>" . $row ["nameA"] . "</td>";
					}
				}
				?>
		</table>
  
</body>
</html>