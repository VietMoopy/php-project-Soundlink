<?php

class AlbumController extends CI_Controller
{
	
	private $titre_defaut;
	
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera ex�cut� chaque fois que ce contr�leur sera appel�.
		$this->titre_defaut = 'AlbumsList';
		$this->load->helper('url');
		$this->load->model('MuAlbum');
		$this->load->model('MuArtist');
		$this->load->model('MuRating');
	}
	
	    public function index()
    {
        $this->showAlbumsList();
    }

    public function showAlbumsList($arg='',$type='')
    {
    	$data['arg'] = $arg;
    	$data['type'] = $type;
        $this->load->view('albums/showAlbumsList.php',$data);
    }
    
    public function showAlbum($id)
    {
    	$data['id'] = $id;
    	$this->load->view('albums/showAlbum.php',$data);
    }
    
    public function addAlbum(){
    	$this->load->view('albums/addAlbum.php');
    }
    
	
	/*	public function _output($output)
	{
		var_dump($output);
	}*/
	
	/*public function maintenance()
	{
		//echo "C'est la maintenance.";
		show_404(); // Affiche la page d'erreur 404
	}
	
	public function _remap($method)
	{
		$this->maintenance();
	}*/
}