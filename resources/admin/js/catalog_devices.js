$(document).ready(function() {




  // TABLAS DE ADMIN


  $('#catalog_devices').bootstrapTable({
    striped: true,
    search: true,
    url: $site_base + 'adminController/get_catalog_devices',
    columns: [{
        field: 'id',
        title: 'ID',
        visible: false
    }, {
        field: 'catalog_manufacturer_id',
        title: 'id manufacturer',
        visible: false
    }, {
        field: 'marca',
        title: 'Marca'
    }, {
        field: 'name',
        title: 'Nombre'
    }, {
        field: 'description',
        title: 'Descripcion'
    }, {
        field: 'min_points',
        title: 'Puntos minimos'
    }, {
        field: 'max_points',
        title: 'Puntos maximos'
    }, {
        field: 'type',
        title: 'Tipo'
    }, {
        field: 'modelo',
        title: 'Modelo'
    }, {
        field: 'status',
        title: 'Status',
        align: 'center',
        formatter: function( value, row ) {
          var status = '';
          if( value == 0 ){
            status = 'Inactivo';
          } else {
            status = 'Activo';
          }
          return status;
        }
    }, {
        field: '',
        title: '',
        align: 'center',
        formatter: function( value, row ){
          return '<button class="btn btn-primary btn-xs" alt="Editar" data-toggle="modal" data-target="#modal_editar_dispositivo" onclick="editarDispositivo('+row.id+', \''+row.catalog_manufacturer_id+'\', \''+row.name+'\', \''+row.description+'\', \''+row.min_points+'\', \''+row.max_points+'\', \''+row.type+'\', \''+row.modelo+'\', \''+row.status+'\')"><i class="fa fa-edit" alt="Editar"></i></button> | <button class="btn btn-danger btn-xs" onclick="eliminarCarrera(\''+row.id+'\', \''+row.nombre+'\')" alt="Eliminar"><i class="fa fa-trash" alt="Editar"></i></button>';
        }
    }, {
      field: '',
      title: '',
      align: 'center',  
      visible: false,
      formatter: function( value, row, index ){
        return '<button class="btn btn-primary btn-xs" alt="Editar" onclick="mostrarPanel( \'#panel_semestres\', \''+row.nombre+'\', '+row.id+')"><i class="fa fa-edit" alt="Editar"> Semestres</i></button>';
      }
    }]
  });








  // $('#modal_alumno_nuevo').on('shown.bs.modal', function() {
  //   var validator = $( "#form_alumno_nuevo" ).validate();
  //   $('#form_alumno_nuevo')[0].reset();
  //   validator.resetForm();
  // });

  // Validacoines para el formulario de nuevo docente
  // $('#form_alumno_nuevo').validate({
  //   rules: {
  //     nombre: {
  //       required: true
  //     },
  //     apellido_paterno: {
  //       required:true
  //     },
  //     apellido_materno: {
  //       required: true
  //     },
  //     fecha_nacimiento: {
  //       required: true
  //     },
  //     curp: {
  //       required: true
  //     },
  //     direccion: {
  //       required: true
  //     },
  //     email: {
  //       required: true,
  //       email: true
  //     },
  //     telefono: {
  //       required: true,
  //       number: true
  //     }
  //   }
  // });


  // Submit para subir un nuevo alumno a la base de datos
  $('#form_nuevo_dispositivo').on('submit', function(event){
    event.preventDefault();

    // Debemos de comprobar que la validacion sea correcta
    //if( $('#form_nuevo_dispositivo').valid() ){
      // Enviamos los datos al controlador
      $.ajax({
        cache: false,
        method: "POST",
        url: $site_base + "adminController/set_catalog_device",
        data: $(this).serializeArray()
      })
      .done(function( data ){
        if(data.response == "ok") {
          swal("Guardado", "El dispositivo a sido guardado.", "success");
          $('#modal_nuevo_dispositivo').modal('hide');
          $('#form_nuevo_dispositivo').bootstrapTable('refresh');
        } else {
          console.log(data.error);
        }
      })
      .fail(function( data, textstatus, errorThrown ){
        console.log("error al enviar los datos. Data: " + data + " - status: " + textstatus + " - errorThrown: " + errorThrown);
        console.log(data.responseText);
      });
    //}

  });


  // Submit para subir un nuevo alumno a la base de datos
  $('#form_dispositivo_editar').on('submit', function(event){
    event.preventDefault();

    // Debemos de comprobar que la validacion sea correcta
    if( $('#form_dispositivo_editar').valid() ){
      // Enviamos los datos al controlador
      $.ajax({
        cache: false,
        method: "POST",
        url: $site_base + "adminController/edit_catalog_device",
        data: $(this).serializeArray()
      })
      .done(function( data ){
        if(data.response == "ok") {
          swal("Guardado", "Los datos del dispositivo han sido actualizados.", "success");
          $('#modal_alumno_editar').modal('hide');
          tabla_alumnos.bootstrapTable('refresh');
        } else {
          console.log(data.error);
        }
      })
      .fail(function( data, textstatus, errorThrown ){
        console.log("error al enviar los datos. Data: " + data + " - status: " + textstatus + " - errorThrown: " + errorThrown);
        console.log(data.responseText);
      });
    }

  });



});
  
  

function editarDispositivo( id, catalog_manufacturer_id, name, description, min_points, max_points, type, modelo, status) {

  $('#form_editar_dispositivo input[name="id"]').val( id );

  $('#form_editar_dispositivo select[name="marca"]').val( catalog_manufacturer_id );

  $('#form_editar_dispositivo input[name="name"]').val( name );
  $('#form_editar_dispositivo textarea[name="description"]').val( description );
  $('#form_editar_dispositivo input[name="min_points"]').val( min_points );
  $('#form_editar_dispositivo input[name="max_points"]').val( max_points );
  $('#form_editar_dispositivo input[name="type"]').val( type );
  $('#form_editar_dispositivo input[name="modelo"]').val( modelo );
  $('#form_editar_dispositivo input[name="status"]').val( status );

}