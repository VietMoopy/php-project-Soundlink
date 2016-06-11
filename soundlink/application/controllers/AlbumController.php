<?php

class AlbumController extends CI_Controller
{
	
	private $titre_defaut;
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		$this->titre_defaut = 'Mon super site';
		$this->load->helper('url');
	}
	
	    public function index()
    {
        $this->showAlbumList();
    }

    public function showAlbumList()
    {
        $this->load->view('albums/showAlbums.php');
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