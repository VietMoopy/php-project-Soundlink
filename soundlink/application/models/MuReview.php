<?php

class MuReview extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct() {
        parent::__construct();
    }

    public function get($id){
        return $this->db->get_where('MuReview', array('id' => $id))->row();
    }

    public function get_all() {
        $query = $this->db->get('MuReview');
        return $query->result();
    }

    public function insert() {
        $this->title = 'CodeIgniter 101';
        $this->content = '<p>Say what you want about CI, it still rocks</p>';
        $this->date = time();

        $this->db->insert('MuReview', $this);
    }

    public function update($id) {
        $this->title = 'CodeIgniter 101';
        $this->content = '<p>Say what you want about CI, it still rocks</p>';
        $this->date = time();

        $this->db->update('MuReview', $this, array('id' => $id));
    }

    public function delete($id){
        $this->db->delete('MuReview', array('id' => $id)); 
    }
}