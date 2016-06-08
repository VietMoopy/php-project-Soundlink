<?php

class IndexController extends CI_Controller
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
        $this->accueil();
    }
	
	public function accueil()
	{
		$this->load->view('index/indexView');
	}

    //  Cette page accepte une variable $_GET facultative
    public function albums($pseudo = '')
    {
        $this->load->view('albums/showAlbums');
    }

    //  Cette page accepte deux variables $_GET facultatives
    public function manger($plat = '', $boisson = '')
    {
        echo 'Voici votre menu : <br />';
        echo $plat . '<br />';
        echo $boisson . '<br />';
        echo 'Bon appétit !';
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