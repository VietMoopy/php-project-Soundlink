<?php

class MuArtist extends CI_Model {

    public $idAlbum;
    public $name;
    public $birthDate;
    public $description;

    public function __construct() {
        parent::__construct();
    }

    public function get($id){
        return $this->db->get_where('MuArtist', array('idArtist' => $id))->row();
    }

    public function get_all() {
        $query = $this->db->get('MuArtist');
        return $query->result();
    }

    public function insert($name,$birth,$desc) {
        $this->name = $name;
        $this->birthDate = $birth;
        $this->description = $desc;

        $this->db->insert('MuArtist', $this);
    }

    public function update($id) {
        $this->name = $name;
        $this->birthDate = $birth;
        $this->description = $desc;

        $this->db->update('MuArtist', $this, array('id' => $id));
    }

    public function delete($id){
        $this->db->delete('MuArtist', array('id' => $id)); 
    }
}