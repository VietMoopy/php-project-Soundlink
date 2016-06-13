<?php

class ResearchController extends CI_Controller
{
	
	private $titre_defaut;
	
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera ex�cut� chaque fois que ce contr�leur sera appel�.
		$this->titre_defaut = 'Research';
		$this->load->helper('url');
		$this->load->model('MuAlbum');
		$this->load->model('MuArtist');
	}
	
	    public function index()
    {
        $this->searchAlbum();
    }
	
		public function searchAlbum(){
			$data['boolean'] = 1;
			$this->load->view('search/searchAlbum',$data);
		}
  
    public function searchArtist(){
    	
      $this->load->view('search/searchArtist');
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