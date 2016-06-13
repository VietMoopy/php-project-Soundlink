<?php

class MuAlbum extends CI_Model {

    public $idAlbum;
    public $name;
    public $releaseDate;
    public $genre;
    public $globalrating;
    public $idArtist;

    public function __construct() {
        parent::__construct();
    }

    public function get($id){
        return $this->db->get_where('MuAlbum', array('idAlbum' => $id))->row();
    }
  
    public function get_per($idA,$genre){
      $this->db->select('name','genre','idArtist');
      $this->db->from('MuAlbum');
      if(isset($idA)){
        $this->db->where('idArtist', $idA);
      }
      if(isset($genre)){
        $this->db->where('genre', $genre);
      }
      return $this->db->get();
    }
    
    public function get_from_genre($genre){
    	return $this->db->get_where('MuAlbum', array('genre' => $genre))->result();
    }
    
    public function get_from_artist($artist){
    	$idArtist = $this->db->get_where('MuArtist',array('nameA' => $artist))->row()->idArtist;
    	return $this->db->get_where('MuAlbum', array('idArtist' => $idArtist))->result();
    }

    public function get_all() {
        $query = $this->db->get('MuAlbum');
        return $query->result();
    }

    public function insert($name,$date,$genre,$artist) {
    	$fielddata['name'] = $name;
    	$fielddata['releaseDate'] = $date;
    	$fielddata['genre'] = $genre;
    	$fielddata['globalRating'] = NULL;
    	$fielddata['idArtist'] = $this->db->get_where('MuArtist', array('nameA' => $artist))->row()->idArtist;
    	echo $fielddata['idArtist'];
        $this->db->insert('MuAlbum', $fielddata);
    }

    public function update($name,$date,$genre) {
        $this->name = $name;
        $this->releaseDate = $date;
        $this->genre = $genre;

        $this->db->update('MuAlbum', $this, array('id' => $id));
    }

    public function delete($id){
        $this->db->delete('MuAlbum', array('id' => $id)); 
    }
}