<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LacController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('RegisterModel');
		$this->load->model('LacModel');
		$this->load->library('upload');
		$this->load->helper('file');
	}

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

	}

	public function home(){

		$data = array(
			'teachers_healers' => $this->get_teachers_healers( 0, 3 ),
		);

		$this->load->view('base_template/header');
		$this->load->view('base_template/base', $data);
		$this->load->view('base_template/footer');
	}

	public function maqueta(){
		$this->load->view('base_template/header');
		$this->load->view('base_template/maqueta');
		$this->load->view('base_template/footer');
	}

	public function teacher_profile( $id_teacher ){

		$data = array(
			'teacher_info' => $this->get_teachers_healers( $id_teacher )[0],
		);

		$this->load->view('base_template/header');
		$this->load->view('lac/lac_dfk001', $data);
		$this->load->view('base_template/footer');
	}

	public function session(){
		$this->load->view('base_template/header');
		$this->load->view('lac/session');
		$this->load->view('base_template/footer');
	}


	public function registration() {
		$this->load->view('base_template/header');
		$this->load->view('lac/select_type_registration');
		$this->load->view('base_template/footer');		
	}

	public function profile_registration(){

		$css = array(
			'css' => array(
				'cropper_css' => "resources/js/plugins/crop/cropper.min.css",
  			'datetimepicker' => "vendor/eonasdan/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css",
			)
		);

		$scripts = array(
		  'scripts' => array(
		  	'validate' => "resources/js/plugins/validation/jquery.validate.min.js",
		  	'validate_methods' => "resources/js/plugins/validation/additional-methods.min.js",
		  	'moment' => "vendor/moment/moment/min/moment.min.js",
		  	'datetimepicker' => "vendor/eonasdan/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js",
		  	'cropper_js' => "resources/js/plugins/crop/cropper.min.js",
		  	//'validates_messages' => "resources/js/plugins/validation/localization/messages_eu.min.js",
		    'tablas' => "resources/js/profile_registration.js"
		  )
		);

		$this->load->view('base_template/header', $css);
		$this->load->view('lac/profile_registration');
		$this->load->view('base_template/footer', $scripts);
	}


	public function teacher_registration(){

		$css = array(
			'css' => array(
				'datetimepicker' => "vendor/eonasdan/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css",
				'cropper_css' => "resources/js/plugins/crop/cropper.min.css",
			)
		);

		$scripts = array(
		  'scripts' => array(
		  	'moment' => "vendor/moment/moment/min/moment.min.js",
		  	'datetimepicker' => "vendor/eonasdan/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js",
		  	'cropper' => "resources/js/plugins/crop/cropper.min.js",
		  	'validate' => "resources/js/plugins/validation/jquery.validate.min.js",
		  	'validate_methods' => "resources/js/plugins/validation/additional-methods.min.js",
		    'script' => "resources/js/teacher_registration.js",
		  )
		);

		$this->load->view('base_template/header', $css);
		$this->load->view('lac/teacher_registration');
		$this->load->view('base_template/footer', $scripts);
	}

	public function profile(){
		if( $this->session->logged_in ) {
			$this->load->view('base_template/header');
			$this->load->view('lac/profile');
			$this->load->view('base_template/footer');
		} else {
			$this->home();
		}
	}

	public function th_profile( $id_th ) {

		$data = array(
			'th_info' => $this->get_teachers_healers( 0, 3 )[0],
		);


		$this->load->view('base_template/header');
		$this->load->view('lac/th_profile', $data);
		$this->load->view('base_template/footer');
	}

	//////////////////////////////////////////////////

  public function experiences(){

  	$data = array(
  		'workshops' => $this->get_experiencies_workshops(),
  	);

		$this->load->view('base_template/header');
		$this->load->view('lac/experiences', $data);
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

  	$scripts = array(
  	  'scripts' => array(
  	    'tablas' => "resources/js/lac_login.js"
  	  )

  	);

		$this->load->view('base_template/header');
		$this->load->view('lac/login');
		$this->load->view('base_template/footer', $scripts);
	}

  public function workshop( $id_experience ){

  	$data = array(
  		'data_experience' => $this->data_experience($id_experience, 'workshop')[0]
  	);

		$this->load->view('base_template/header');
		$this->load->view('lac/workshop', $data);
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


	/*====================================
	=            Forms routes            =
	====================================*/
	
  public function experience_form(){

  	$css = array(
  		'css' => array(
  			'datetimepicker' => "vendor/eonasdan/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css",
  		)
  	);

  	$scripts = array(
  	  'scripts' => array(
  	  	'validate' => "resources/js/plugins/validation/jquery.validate.min.js",
  	  	'validate_methods' => "resources/js/plugins/validation/additional-methods.min.js",
  	  	//'validates_messages' => "resources/js/plugins/validation/localization/messages_eu.min.js",
  	  	'moment' => "vendor/moment/moment/min/moment.min.js",
  	  	'datetimepicker' => "vendor/eonasdan/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js",
  	    'script' => "resources/js/experience_form.js"
  	  )
  	);

  	if( $this->session->logged_in && $this->session->logged_in == 'teacher' ){
  		$this->load->view('base_template/header', $css);
  		$this->load->view('lac/experience_form');
  		$this->load->view('base_template/footer', $scripts);
  	} else {
  		$this->home();
  	}

	}	


	  public function session_form(){

	  	$css = array(
	  		'css' => array(
	  			'cropper_css' => "resources/js/plugins/crop//cropper.min.css",
	  		)
	  	);

	  	$scripts = array(
	  	  'scripts' => array(
	  	  	'validate' => "resources/js/plugins/validation/jquery.validate.min.js",
	  	  	'validate_methods' => "resources/js/plugins/validation/additional-methods.min.js",
	  	  	'cropper_js' => "resources/js/plugins/crop//cropper.min.js",
	  	  	//'validates_messages' => "resources/js/plugins/validation/localization/messages_eu.min.js",
	  	    //'tablas' => "resources/js/profile_registration.js"
	  	  )
	  	);

	  	if( $this->session->logged_in && $this->session->logged_in == 'teacher' ){
	  		$this->load->view('base_template/header');
	  		$this->load->view('lac/session_form');
	  		$this->load->view('base_template/footer', $scripts);
	  	} else {
	  		$this->home();
	  	}

		}

		public function workshop_form() {
			$scripts = array(
			  'scripts' => array(
			  	'validate' => "resources/js/plugins/validation/jquery.validate.min.js",
			  	'validate_methods' => "resources/js/plugins/validation/additional-methods.min.js",
			  	//'validates_messages' => "resources/js/plugins/validation/localization/messages_eu.min.js",
			    'tablas' => "resources/js/workshop_form.js"
			  )
			);

			if( $this->session->logged_in && $this->session->logged_in == 'teacher' ){
				$this->load->view('base_template/header');
				$this->load->view('lac/session_form');
				$this->load->view('base_template/footer', $scripts);
			} else {
				$this->home();
			}			
		}

		public function new_event() {

			$scripts = array(
			  'scripts' => array(
			  	'validate' => "resources/js/plugins/validation/jquery.validate.min.js",
			  	'validate_methods' => "resources/js/plugins/validation/additional-methods.min.js",
			  	//'validates_messages' => "resources/js/plugins/validation/localization/messages_eu.min.js",
			    'tablas' => "resources/js/new_event.js"
			  )
			);

			if( $this->session->logged_in && $this->session->logged_in == 'teacher' ){
				$this->load->view('base_template/header');
				$this->load->view('lac/new_event');
				$this->load->view('base_template/footer', $scripts);
			} else {
				$this->home();
			}
		}
	
	/*=====  End of Forms routes  ======*/
	



	/*=====================================================================
	=            Funciones de login para el usuario y maestro.            =
	=====================================================================*/

	/**
	 * [admin_validate Realiza el proceso de validacionde credenciales del usuario]
	 * @return [type] [description]
	 */
	/*public function user_validation(){

	  $user = $this->input->post('email');
	  $password = $this->input->post('password');
	  $user_data = $this->LacModel->userValidation( $user, $password );

	  if( $user_data == 'error' ) {

	    $response = array(
	      'response' => 'error',
	    );

	  } else {
	    $this->session->set_userdata($user_data);
	    $response = array(
	      'response' => 'ok',
	      'userdata' => $user_data
	    );
	  }

	  return $this->output->set_content_type('application/json')->set_output(json_encode($response));

	}*/

	/*=====  End of Funciones de login para el usuario y maestro.  ======*/


	/*==========================================
	=            Funciones de login            =
	==========================================*/

	public function user_validation(){
	  $email = $this->input->post('email');
	  $password = $this->input->post('password');
	  $user_data = $this->LacModel->userValidation( $email, sha1($password) );

	  if( $user_data == 'error' ) {

	    $response = array(
	      'response' => 'error',
	      'email' => $email,
	      'password' => $password,
	    );

	  } else {
	    $this->session->set_userdata($user_data);
	    $response = array(
	      'response' => 'ok',
	      'userdata' => $user_data
	    );
	  }

	  return $this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function user_logout() {
	  $this->session->sess_destroy();
	  redirect('home','refresh');
	}

	/*=====  End of Funciones de login  ======*/



	/*===============================================================
	=            Funciones para ingresar nuevos usuarios            =
	===============================================================*/

	public function register_user(){

		if( $this->input->post('password') == $this->input->post('confirm_password')){
			$data_user = array(
				'display_name' => $this->input->post('display_name'),
				'bio' => $this->input->post('bio'),
				'name' => $this->input->post('name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'password' => $this->input->post('password'),
				'city' => $this->input->post('city'),
				'country' => $this->input->post('country'),
				'phone' => $this->input->post('phone'),
				'birthdate' => $this->input->post('birth_year'). '-' .$this->input->post('birth_month'). '-' .$this->input->post('birth_day'),
				'hour_birth' => $this->input->post('hour_hour'). ':' .$this->input->post('birth_minute'),
				'skype' => $this->input->post('skype'),
				'description' => $this->input->post('description'),
				'status' => $this->input->post('status'),
				'avatar' => $this->input->post('avatar'),
				'language_id' => $this->input->post('language_id'),
				'interest_id' => $this->input->post('interest_id'),
				'facebook' => $this->input->post('facebook'),
				'instagram' => $this->input->post('instagram'),
				'twitter' => $this->input->post('twitter'),
				'heard_about' => $this->input->post('heard_about'),
				'cities_id' => $this->input->post('cities_id'),
				'password	' => sha1($this->input->post('password'))
			);

			$response_insert = $this->RegisterModel->registerUser( $data_user );


			if( $response_insert['response'] == 'ok' ){

				if( isset( $_POST['avatar'] ) ){

					//$filename = $this->input->post('filename');
					$img = $this->input->post('avatar');
					$img = str_replace('data:image/png;base64,', '', $img);
					$img = str_replace(' ', '+', $img);
					$data = base64_decode($img);



				/*if( isset($_FILES['avatar']['name']) && !empty($_FILES['avatar']['name']) ){
					$config = array(
					  'upload_path' => "love_academy_files/users/avatars/",
					  'allowed_types' => "jpg|png|jpeg",
					  'overwrite' => TRUE,
					  'file_name' => 'avatar_user_'.$response_insert['id'],
					  'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
					  'max_height' => "512",
					  'max_width' => "512"
					);*/

					//$this->upload->initialize($config);

					//if ( $this->upload->do_upload('avatar') ) {

						if(file_put_contents('love_academy_files/users/avatars/' . 'avatar_user_'.$response_insert['id'].'.jpg' , $data)){



							$nuevos_datos = array();
							$nuevos_datos['id'] = $response_insert['id'];
							//$nuevos_datos['avatar'] = 'avatar_teacher_'.$response_insert['id'].$this->upload->data('file_ext');
							$nuevos_datos['avatar'] = 'avatar_user_'.$response_insert['id'].'.jpg';
							
							$edicion_usuario = $this->RegisterModel->editUser( $nuevos_datos );
							$response['response'] = $edicion_usuario['response'];
							$response['image'] = 'subida';
							
							return $this->output
							    ->set_content_type('application/json')
							    ->set_output(json_encode($response));
				    
				  } else {
				    $response['response'] = 'errorupload';
				    $response['error'] = $this->upload->display_errors();
				    return $this->output
				        ->set_content_type('application/json')
				        ->set_output(json_encode($response));
				  }

				} else {

				}
				return $this->output->set_content_type('application/json')->set_output(json_encode($data_user));
			}

		} else {
			$response = array(
				'error' => "The password not mach.<br>",
			);
			return $this->output->set_content_type('application/json')->set_output(json_encode($response));
		}

		

		// $response = $this->AdminModel->registerUser( $this->input->post() );

	}

	/*=====  End of Funciones para ingresar nuevos usuarios  ======*/


/*=============================================================
=            Function to add new teacher or healer            =
=============================================================*/

public function register_teacher(){

	if( $this->input->post('password') == $this->input->post('confirm_password')){
		$data_user = array(
			'bio' => $this->input->post('bio'),
			'name' => $this->input->post('name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'gender' => $this->input->post('gender'),
			'city' => $this->input->post('city'),
			'country' => $this->input->post('country'),
			'phone' => $this->input->post('phone'),
			'birthdate' => $this->input->post('birth_date'),
			'hour_birth' => $this->input->post('birth_hour'),
			'skype' => $this->input->post('skype'),
			'description' => $this->input->post('description'),
			'status' => $this->input->post('status'),
			'avatar' => 'avatar_user_default.jpg',
			'language_id' => $this->input->post('language'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
			'twitter' => $this->input->post('twitter'),
			'cities_id' => $this->input->post('cities_id'),
			'password	' => sha1($this->input->post('password')),
			'categories' => implode (", ", $this->input->post('categories')),
		);




		$response_insert = $this->RegisterModel->registerTeacher( $data_user );


		if( $response_insert['response'] == 'ok' ){
			//if( isset($_FILES['avatar']['name']) && !empty($_FILES['avatar']['name']) ){
			if( isset( $_POST['avatar'] ) ){

				//$filename = $this->input->post('filename');
				$img = $this->input->post('avatar');
				$img = str_replace('data:image/png;base64,', '', $img);
				$img = str_replace(' ', '+', $img);
				$data = base64_decode($img);	

				/*$config = array(
				  'upload_path' => "love_academy_files/users/avatars/",
				  'allowed_types' => "jpg|png|jpeg",
				  'overwrite' => TRUE,
				  'file_name' => 'avatar_teacher_'.$response_insert['id'],
				  'max_size' => "2048", 
				  'max_height' => "512",
				  'max_width' => "512"
				);*/

				//$this->upload->initialize($config);

				//if ( $this->upload->do_upload('avatar') ) {

				if(file_put_contents('love_academy_files/users/avatars/' . 'avatar_teacher_'.$response_insert['id'].'.jpg' , $data)){
					$nuevos_datos = array();
					$nuevos_datos['id'] = $response_insert['id'];
					//$nuevos_datos['avatar'] = 'avatar_teacher_'.$response_insert['id'].$this->upload->data('file_ext');
					$nuevos_datos['avatar'] = 'avatar_teacher_'.$response_insert['id'].'.jpg';
					
					$edicion_usuario = $this->RegisterModel->editTeacher( $nuevos_datos );
					$response['response'] = $edicion_usuario['response'];
					$response['image'] = 'subida';
					
					return $this->output
					    ->set_content_type('application/json')
					    ->set_output(json_encode($response));

			  } else {
			    $response['response'] = 'errorupload';
			    // $response['error'] = $this->upload->display_errors();
			    $response['error'] = 'Error al subir la imagen';
			    return $this->output
			        ->set_content_type('application/json')
			        ->set_output(json_encode($response));
			  }

			} 

			return $this->output->set_content_type('application/json')->set_output(json_encode($data_user));
		}

	} else {
		$response = array(
			'error' => "The password not mach.<br>",
		);
		return $this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	

	// $response = $this->AdminModel->registerUser( $this->input->post() );

}

/*=====  End of Function to add new teacher or healer  ======*/



/*============================================================
=            Section for data retrieve, show data            =
============================================================*/

function get_teachers_healers( $id_th = 0, $limit = 1) {
	$users = $this->LacModel->getTeachersHealers( $id_th, $limit);
	return $users;
}

function get_experiencies_workshops( $limit = 4 ){
	$workshops = $this->LacModel->getExperienciesWorkshop( $limit );
	return $workshops;
}

function data_experience( $id_experience){
	$workshop = $this->LacModel->dataExperience( $id_experience );
	return $workshop;
}

/*=====  End of Section for data retrieve, show data  ======*/



	public function test(){
		//$this->session->sess_destroy();
		$this->output->set_content_type('application/json')->set_output(json_encode($this->session));
	}

}
