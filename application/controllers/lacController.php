<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lacController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('base_template/header');
		$this->load->view('base_template/base');
		$this->load->view('base_template/footer');
	}

	public function maqueta(){
		$this->load->view('base_template/header');
		$this->load->view('base_template/maqueta');
		$this->load->view('base_template/footer');
	}

	public function dfk001(){
		$this->load->view('base_template/header');
		$this->load->view('lac/lac_dfk001');
		$this->load->view('base_template/footer');	
	}

	public function session(){
		$this->load->view('base_template/header');
		$this->load->view('lac/session');
		$this->load->view('base_template/footer');
	}

	public function profile_registration(){
		$this->load->view('base_template/header');
		$this->load->view('lac/profile_registration');
		$this->load->view('base_template/footer');
	}

	public function teacher_registration(){
		$this->load->view('base_template/header');
		$this->load->view('lac/teacher_registration');
		$this->load->view('base_template/footer');
	}

	public function profile(){
		$this->load->view('base_template/header');
		$this->load->view('lac/profile');
		$this->load->view('base_template/footer');
	}

	//////////////////////////////////////////////////

  public function experiences(){
		$this->load->view('base_template/header');
		$this->load->view('lac/experiences');
		$this->load->view('base_template/footer');
	}

  public function teachers_healears(){
		$this->load->view('base_template/header');
		$this->load->view('lac/teachers_healears');
		$this->load->view('base_template/footer');
	}  
    
  public function jobs(){
		$this->load->view('base_template/header');
		$this->load->view('lac/jobs');
		$this->load->view('base_template/footer');
	}    
    
  public function login(){
		$this->load->view('base_template/header');
		$this->load->view('lac/login');
		$this->load->view('base_template/footer');
	}    
    
  public function workshop(){
		$this->load->view('base_template/header');
		$this->load->view('lac/workshop');
		$this->load->view('base_template/footer');
	}  
    
  public function talk(){
		$this->load->view('base_template/header');
		$this->load->view('lac/talk');
		$this->load->view('base_template/footer');
	}  
    
  public function terms_conditions(){
		$this->load->view('base_template/header');
		$this->load->view('lac/terms_conditions');
		$this->load->view('base_template/footer');
	} 
    
  public function knowledge(){
		$this->load->view('base_template/header');
		$this->load->view('lac/knowledge');
		$this->load->view('base_template/footer');
	}  
    
  public function question_of_love(){
		$this->load->view('base_template/header');
		$this->load->view('lac/question_of_love');
		$this->load->view('base_template/footer');
	}
    
  public function the_art_of_sexual_kung_fu(){
		$this->load->view('base_template/header');
		$this->load->view('lac/the_art_of_sexual_kung_fu');
		$this->load->view('base_template/footer');
	}


}
