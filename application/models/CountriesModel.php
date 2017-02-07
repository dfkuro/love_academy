<?php

class CountriesModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  function getCountries() {
    $countries = $this->db->get('countries');
    return $countries->result_array();
  }


  function getStates( $country_id ){
    $this->db->where('country_id', $country_id);
    $countries = $this->db->get('states');
    return $countries->result_array();
  }

  function getCities( $state_id ){
    $this->db->where('state_id', $state_id);
    $cities = $this->db->get('cities');
    return $cities->result_array();
  }

}