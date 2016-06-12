<?php

class AlbumController extends CI_Controller
{
	
	private $titre_defaut;
	
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		$this->titre_defaut = 'AlbumsList';
		$this->load->helper('url');
		$this->load->model('MuAlbum');
		$this->load->model('MuArtist');
	}
	
	    public function index()
    {
        $this->showAlbumsList();
    }

    public function showAlbumsList()
    {
        $this->load->view('albums/showAlbumsList.php');
    }
    
    public function showAlbum($id)
    {
    	$data = array('id' => $id);
    	$this->load->view('albums/showAlbum.php',$data);
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