<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CountriesController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('CountriesModel');
  }


  public function get_countries(){

    $countries = $this->CountriesModel->getCountries();
    $select_countries = '';

    $select_countries .= '<option value="0">SELECT COUNTRY</option>';
    foreach ($countries as $key => $value) {
      $select_countries .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
    }

    return print($select_countries);
  }

  public function get_states( $id_country ){
    $states = $this->CountriesModel->getStates( $id_country );
    $select_states = '';

    $select_states .= '<option value="0">SELECT STATE</option>';
    foreach ($states as $key => $value) {
      $select_states .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
    }

    return print($select_states);
  }

  public function get_cities( $id_state ){
    $cities = $this->CountriesModel->getCities( $id_state );
    $select_cities = '';

    $select_cities .= '<option value="0">SELECT CITY</option>';
    foreach ($cities as $key => $value) {
      $select_cities .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
    }

    return print($select_cities);
  }

}