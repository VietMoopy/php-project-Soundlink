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
	}
	
	    public function index()
    {
        $this->showAlbumList();
    }

    public function showAlbumList()
    {
        $this->load->view('albums/showListAlbums.php');
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