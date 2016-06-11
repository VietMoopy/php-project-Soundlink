<?php

class MuUser extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct() {
        parent::__construct();
    }

    public function get($id){
        return $this->db->get_where('MuUser', array('id' => $id))->row();
    }

    public function get_all() {
        $query = $this->db->get('MuUser');
        return $query->result();
    }

    public function insert() {
        $this->title = 'CodeIgniter 101';
        $this->content = '<p>Say what you want about CI, it still rocks</p>';
        $this->date = time();

        $this->db->insert('MuUser', $this);
    }

    public function update($id) {
        $this->title = 'CodeIgniter 101';
        $this->content = '<p>Say what you want about CI, it still rocks</p>';
        $this->date = time();

        $this->db->update('MuUser', $this, array('id' => $id));
    }

    public function delete($id){
        $this->db->delete('MuUser', array('id' => $id)); 
    }
}