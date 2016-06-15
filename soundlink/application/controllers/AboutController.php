<?php

class AboutController extends CI_Controller
{
	
	private $titre_defaut;
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		$this->titre_defaut = 'soundlink';
		$this->load->helper('url');
    $this->load->model('MuUser');
	}
	
	    public function index()
    {
        $this->showAbout();
    }
	
	public function showAbout(){
    	$this->load->view('about/showAbout.html');
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