<?php
class MuRating extends CI_Model {
	public $idRating;
	public $ratingvalue;
	public $dateRating;
	public $username;
	public $idAlbum;
	public function __construct() {
		parent::__construct ();
	}
	public function get($id) {
		return $this->db->get_where ( 'MuRating', array (
				'id' => $id 
		) )->row ();
	}
	public function get_all() {
		$query = $this->db->get ( 'MuRating' );
		return $query->result ();
	}
	public function insert($value, $user, $idAlbum) {
		$fielddata ['ratingValue'] = $value;
		$datestring = '%Y-%m-%d';
		$fielddata ['dateRating'] = mdate ( $datestring );
		$fielddata ['username'] = $user;
		$fielddata ['idAlbum'] = $idAlbum;
		$this->db->insert ( 'MuRating', $fielddata );
	}
	public function checkRating($idAlbum, $user) {
		$this->db->select ( '*' );
		$this->db->where ( 'idAlbum', $idAlbum );
		$this->db->where ( 'username', $user );
		$this->db->from ( 'MuRating' );
		$query = $this->db->get ()->row();
		if ($query != NULL)
			return $query;
		else
			return null;
	}
	public function update($value,$id) {
		$fielddata ['ratingValue'] = $value;
		$datestring = '%Y-%m-%d';
		$fielddata ['dateRating'] = mdate ( $datestring );
		$this->db->where('id', $id);
		$this->db->update('MuRating', $fielddata);
	}
	public function delete($id) {
		$this->db->delete ( 'MuRating', array (
				'id' => $id 
		) );
	}
}