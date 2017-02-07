<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {


  function __construct() {
    parent::__construct();
    $user = $this->load->model('AdminModel');
  }

  function index(){
    if( $this->session->logged_in ){
      redirect('dashboard','refresh');
    } else {
      $this->load->view('admin/admin_login');
    }
  }

  function dashboard(){
    $scripts = array(
      'scripts' => array(
        'raphael' => "resources/admin/js/plugins/morris/raphael.min.js",
        'morris' => "resources/admin/js/plugins/morris/morris.min.js",
        'data' => "resources/admin/js/plugins/morris/morris-data.js"
      )
    );

    if( $this->session->logged_in ){
      $this->load->view('admin/admin_header');
      $this->load->view('admin/admin_menu');
      $this->load->view('admin/admin_dashboard');
      $this->load->view('admin/admin_footer', $scripts);
    } else {
      redirect('admin','refresh');
    }
  }


  public function login(){
    $user = $this->input->post('user');
    $password = $this->input->post('password');
    $user_data = $this->AdminModel->userValidation( $user, sha1($password) );

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
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('admin','refresh');
  }


}