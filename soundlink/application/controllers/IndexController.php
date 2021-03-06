<?php

class IndexController extends CI_Controller
{
	
	private $titre_defaut;
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		$this->titre_defaut = 'soundlink';
		$this->load->helper('url');
	}
	
	    public function index()
    {
        $this->accueil();
    }
	
	public function accueil()
	{
		$this->load->view('index/index.html');
	}

    //  Cette page accepte une variable $_GET facultative
    public function albums()
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