<?php

class MuRating extends CI_Model {

    public $idRating;
    public $ratingvalue;
    public $dateRating;
    public $username;
    public $idAlbum;

    public function __construct() {
        parent::__construct();
    }

    public function get($id){
        return $this->db->get_where('MuRating', array('id' => $id))->row();
    }

    public function get_all() {
        $query = $this->db->get('MuRating');
        return $query->result();
    }

    public function insert() {
        $this->title = 'CodeIgniter 101';
        $this->content = '<p>Say what you want about CI, it still rocks</p>';
        $this->date = time();

        $this->db->insert('MuRating', $this);
    }

    public function update($id) {
        $this->title = 'CodeIgniter 101';
        $this->content = '<p>Say what you want about CI, it still rocks</p>';
        $this->date = time();

        $this->db->update('MuRating', $this, array('id' => $id));
    }

    public function delete($id){
        $this->db->delete('MuRating', array('id' => $id)); 
    }
}