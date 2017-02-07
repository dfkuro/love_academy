<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LacFormController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('LacFormModel');
    $this->load->library('upload');
    $this->load->helper('file');
  }


  
  /**
   * [experience_new Crea la logica antes de enviar los datos a la BD]
   * @return [type] [description]
   */
  public function experience_new() {

    // Creamos un array con contenido especifico
    $data_experience = array(
      'event_name'              => $this->input->post('event_name'),
      'event_date'              => $this->input->post('event_date'),
      'event_hour'              => $this->input->post('event_hour'),
      'event_duration'          => $this->input->post('event_duration'),
      'event_cost'              => $this->input->post('event_cost'),
      'event_video'             => $this->input->post('event_video'),
      'event_short_description' => $this->input->post('event_short_description'),
      'event_description'       => $this->input->post('event_description'),
      'event_type_description'  => $this->input->post('event_type_description'),
      'event_property'          => $this->input->post('event_property'),
      'event_address'           => $this->input->post('event_address'),
      'event_map'               => $this->input->post('event_map'),
      'event_capacity'          => $this->input->post('event_capacity'),
      'event_category'          => $this->input->post('event_category'),
      'event_schedule'          => $this->input->post('event_schedule'),
      'event_promo_description' => $this->input->post('event_promo_description'),
      'event_type_promo'        => $this->input->post('event_type_promo'),
      'event_tag'               => $this->input->post('event_tag'),
      'event_video_source'      => $this->input->post('event_video_source'),
      'event_video_link'        => $this->input->post('event_video_link'),
      'event_tag'               => $this->input->post('event_tag'),
      'teacher_id'              => $this->session->id,
      'program'                 => $this->input->post('program')
    );


    return $this->output->set_content_type('application/json')->set_output(json_encode($data_experience));

    /*
      Enviamos los datos a nuestro modelo para el proceso de guardado en las tablas, es necesario
      guardar todos los datos previamente para que tengamos acceso al id del ultimo evento almacenado,
      con este dato podemos crear los nombres de carpetas y los de imagenes para teneer un control
      de los archivos del profesor para su evento.

     */
    $response_insert_event = $this->LacFormModel->experienceNew( $data_experience );

    // Esperamos la respuesta y en funcion a ello ello damos lla siguiente respuesta.
    if( $response_insert_event['response']  == 'ok' ){
      $config = array(
        'upload_path' => 'love_academy_files/users/'.$response_insert_event['id'].'/experience/'.$this->clean_text($data_experience['event_name']).'/',
        'allowed_types' => "jpg|png|jpeg",
        'overwrite' => TRUE,
        'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'max_width' => "512",
        'max_height' => "512",
      );

      // Array with the images that will be upload to de database
      $data_image = array();

      // El id del ultimo evento creado del profesor
      $data_image['id'] = $response_insert_event['id'];

      // Si no existe la carpeta
      if( !is_dir($config['upload_path']) ){
        // Creamos la carpeta que contendra todos los elementos de imagenes o descargas que estaran disponibles para el usuario.
        mkdir($config['upload_path'], 0777, true);
      }

      // Verificamos si el profesor a subido una imagen que sera usada para el banner del evento.
      if( isset($_FILES['event_banner']['name']) && !empty($_FILES['event_banner']['name']) ){
        //$data_experience['event_banner'] = 'users/' . $this->session->display_name . '/1/experience/' . 'images/event_banner.jpg';
        $config['file_name'] = 'event_banner_'.$response_insert_event['id'];
        $config['max_width'] = "800";
        $config['max_height'] = "350";

        $this->upload->initialize($config);

        // Si el banner es subido correctamente, almacenaremos el nombre del archivo
        if ( $this->upload->do_upload('event_banner') ) {
          $data_image['event_banner'] = $config['file_name'].$this->upload->data('file_ext');
        } else {
          $response_insert_event['event_banner_error'] = $this->upload->display_errors();
          $response_insert_event['upload_path'] = $config['upload_path'];
        }
      }


      // Verificamos que la imagen del evento haya sido subida por el profesor
      if( isset($_FILES['event_image']['name']) && !empty($_FILES['event_image']['name']) ){
        //$data_experience['event_image'] = 'users/' . $this->session->display_name . '/1/experience/' . 'images/event_image.jpg';
        $config['file_name'] = 'event_image_'.$response_insert_event['id'];
        $config['max_width'] = "512";
        $config['max_height'] = "512";

        $this->upload->initialize($config);

        if ( $this->upload->do_upload('event_image') ) {
          $data_image['event_image'] = $config['file_name'].$this->upload->data('file_ext');
        } else {
          $response_insert_event['event_image_error'] = $this->upload->display_errors();
          $response_insert_event['upload_path'] = $config['upload_path'];
        }
      }

      // Verificamos si existe una imagen promocional para el evento.
      if( isset($_FILES['event_image_promotion']['name']) && !empty($_FILES['event_image_promotion']['name']) ){

        //$data_experience['event_image_promo'] = 'users/' . $this->session->display_name . '/1/experience/' . 'images/event_image_promo.jpg';
        $config['file_name'] = 'event_image_promotion_'.$response_insert_event['id'];
        $config['max_width'] = "512";
        $config['max_height'] = "512";

        $this->upload->initialize($config);

        if ( $this->upload->do_upload('event_image_promotion') ) {
          $data_image['event_image_promotion'] = $config['file_name'].$this->upload->data('file_ext');
        } else {
          $response_insert_event['event_image_promotion_error'] = $this->upload->display_errors();
          $response_insert_event['upload_path'] = $config['upload_path'];

        }
      }
    }

    $this->LacFormModel->experienceEdit( $data_image );


    return $this->output->set_content_type('application/json')->set_output(json_encode($response_insert_event));

  }


  public function experience_edit( $data_experience ) {
    $response = $this->LacFormModel->experienceEdit( $data_experience );
    $this->output->set_content_type('application/json')->set_output(json_encode($response));
  }

  function clean_text($string) {
     $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
     return preg_replace('/[^A-Za-z0-9\_]/', '', $string); // Removes special chars.
  }

}
