<?php

class LacFormModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  /**
   * [experienceNew Almacenamos en la base de datos la informacion para el nuevo evento del profesor]
   * @param  [type] $data_experience [Contiene todos los datos que estan siendo agregados para el evento del profesor]
   * @return [type]                  [description]
   */
  function experienceNew( $data_experience ) {

    $this->db->trans_start();
    $response = array();

    // Vamos a separar la informacion del programa del evento que ha sido enviada por el profesor
    $event_program = $data_experience['program'];
    unset($data_experience['program']);

    // Insertamos los datos a nuestra tabla
    $this->db->insert('experience', $data_experience);
    // Recuperamos el ultimo id insertado de la ultima query
    $response['id'] = $this->db->insert_id();


    /*
      Realizaremos un bucle para la insercion de datos que esten en nuestro programa
      de actividades del evento.
     */
    foreach ($event_program as $key => $value) {

      // Creamos un array con los datos que van a ser integrados en la tabla 'program_dates'
      $program_dates = array(
        'date'          => $key,
        'status'        => 1,
        'experience_id' => $response['id']
      );

      // Realizaremos un insercion de la fecha que contiene las actividades
      $this->db->insert('program_dates', $program_dates);
      $program_dates_id = $this->db->insert_id();

      // Por cada uno de los dias que se encuentren registrados, realizaremos un recorrido
      // con el cual obtendremos el horario de actividades para ese dia
      foreach ($event_program[$key] as $key2 => $value2) {

        // Creamos un array con todas las actividades que son enviadas por el profesor para ser almacenadas
        $program_schedule = array(
          'hour_ini'          => $value2['hour_ini'],
          'hour_end'          => $value2['hour_end'],
          'activity'          => $value2['activity'],
          'status'            => 1,
          'program_dates_id'  => $program_dates_id
        );

        // Insertamos las actividades en la base de datos.
        $this->db->insert('program_schedule', $program_schedule);

      }
    }
    

    $this->db->trans_complete();


    if($this->db->trans_status() === FALSE){
      $response['response'] = 'error';
      $response['error'] = $this->db->error();
      return $response;
    }else {
      $response['response'] = 'ok';
      $response['error'] = '';
      return $response;
    }

  }

  function experienceEdit( $data_experience ) {

    $this->db->trans_start();
    $response = array();
    $id_experience =  $data_experience['id'];
    unset($data_experience['id']);
    
    $this->db->where('id', $id_experience);
    $this->db->update('experience', $data_experience);

    $this->db->trans_complete();

    if($this->db->trans_status() === FALSE){
      $response['response'] = 'error';
      $response['error'] = $this->db->error();
      return $response;
    }else {
      $response['response'] = 'ok';
      $response['error'] = '';
      return $response;
    }

  }



}