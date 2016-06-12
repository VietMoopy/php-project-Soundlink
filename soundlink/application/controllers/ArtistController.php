<?php

class ArtistController extends CI_Controller
{
	
	private $titre_defaut;
	
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		$this->titre_defaut = 'ArtistList';
		$this->load->helper('url');
		$this->load->model('MuArtist');
	}
	
	    public function index()
    {
        $this->showArtistsList();
    }

    public function showArtistsList()
    {
        $this->load->view('artists/showArtistsList.php');
    }
    
    public function showArtist($id){
    	$data = array('id' => $id);
    	$this->load->view('artists/showArtist.php',$data);
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