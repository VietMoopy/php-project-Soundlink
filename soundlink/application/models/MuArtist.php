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
  
    public function get_perName($name){
      $this->db->select('nameA');
      $this->db->from('MuArtist');
      if(isset($name)){
        $this->db->where('nameA',$name);
      }
      return $this->db->get();
    }

    public function insert($name,$birth,$desc) {
    	$fielddata['nameA'] = $name;
    	$fielddata['birthDate'] = $birth;
    	$fielddata['description'] = $desc;
    	
    	$this->db->insert('MuArtist', $fielddata);
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