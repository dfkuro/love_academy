$(document).ready(function() {

  $('#catalogo_fabricantes').bootstrapTable({
    striped: true,
    search: false,
    url: $site_base + 'adminController/catalogo_fabricantes_obtener',
    onClickRow: function( row, $element, field) {
      $('#fabricante_seleccionado').html(row.name);
      cargarFamilias(row.id);
      $('#id_fabricante').val(row.id);
      $('#button_nueva_familia').removeAttr('disabled');
    },
    columns: [{
        field: 'id',
        title: 'ID',
        visible: false
    }, {
        field: 'name',
        title: 'Nombre',
        visible: true
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
          return '<button class="btn btn-primary btn-xs" alt="Editar" data-toggle="modal" data-target="#modal_editar_fabricante" onclick="editarFabricante('+row.id+', \''+row.name+'\')"><i class="fa fa-edit" alt="Editar"></i></button>';
        }
    }]
  });


  $('#catalogo_familias').bootstrapTable({
    striped: true,
    search: false,
    columns: [{
        field: 'id',
        title: 'ID',
        visible: false
    }, {
        field: 'name',
        title: 'Nombre',
        visible: true
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
          return '<button class="btn btn-primary btn-xs" alt="Editar" data-toggle="modal" data-target="#modal_editar_familia" onclick="editarFamilia('+row.id+', \''+row.name+'\')"><i class="fa fa-edit" alt="Editar"></i></button>';
        }
    }]
  });



  // Metodo para subir un nuevo fabricante
  $('#form_nuevo_fabricante').on('submit', function(event){
    event.preventDefault();

    // Debemos de comprobar que la validacion sea correcta
    //if( $('#form_nuevo_dispositivo').valid() ){
      // Enviamos los datos al controlador
      $.ajax({
        cache: false,
        method: "POST",
        url: $site_base + "adminController/catalogo_fabricantes_agregar",
        data: $(this).serializeArray()
      })
      .done(function( data ){
        if(data.response == "ok") {
          swal("Guardado", "El fabricante ha sido guardado.", "success");
          $('#modal_nuevo_fabricante').modal('hide');
          $('#catalogo_fabricantes').bootstrapTable('refresh');
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


  $('#form_editar_fabricante').on('submit', function(event){
    event.preventDefault();

    // Debemos de comprobar que la validacion sea correcta
    //if( $('#form_nuevo_dispositivo').valid() ){
      // Enviamos los datos al controlador
      $.ajax({
        cache: false,
        method: "POST",
        url: $site_base + "adminController/catalogo_fabricantes_editar",
        data: $(this).serializeArray()
      })
      .done(function( data ){
        if(data.response == "ok") {
          swal("Guardado", "El fabricante ha sido guardado.", "success");
          $('#modal_editar_fabricante').modal('hide');
          $('#catalogo_fabricantes').bootstrapTable('refresh');
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


  //  FAMILIAS

  $('#form_nueva_familia').on('submit', function(event){
    event.preventDefault();

    // Debemos de comprobar que la validacion sea correcta
    //if( $('#form_nuevo_dispositivo').valid() ){
      // Enviamos los datos al controlador
      $.ajax({
        cache: false,
        method: "POST",
        url: $site_base + "adminController/catalogo_familia_agregar",
        data: $(this).serializeArray()
      })
      .done(function( data ){
        if(data.response == "ok") {
          swal("Guardado", "La familia ha sido guardada.", "success");
          $('#modal_nnueva_familia').modal('hide');
          cargarFamilias($('#id_fabricante').val());
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


  $('#form_editar_familia').on('submit', function(event){
    event.preventDefault();

    // Debemos de comprobar que la validacion sea correcta
    //if( $('#form_nuevo_dispositivo').valid() ){
      // Enviamos los datos al controlador
      $.ajax({
        cache: false,
        method: "POST",
        url: $site_base + "adminController/catalogo_familia_editar",
        data: $(this).serializeArray()
      })
      .done(function( data ){
        if(data.response == "ok") {
          swal("Guardado", "La familia ha sido actualizada.", "success");
          $('#modal_editar_familia').modal('hide');
          cargarFamilias($('#id_fabricante').val());
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





  
});





function cargarFamilias( id_fabricante ) {

  $.ajax({
    url: $site_base + 'adminController/catalogo_familia_obtener',
    cache: false,
    method: "POST",
    data: {id: id_fabricante},
  })
  .done(function( data ) {
    $('#catalogo_familias').bootstrapTable('load', data);
  })
  .fail(function( data, textstatus, errorThrown ){
    console.log("error al enviar los datos. Data: " + data + " - status: " + textstatus + " - errorThrown: " + errorThrown);
    console.log(data.responseText);
  });
}


// Funciones de asignacion de datos en los formularios.
function editarFabricante( id, name ) {

  $('#form_editar_fabricante input[name="id"]').val( id );

  // $('#form_editar_fabricante select[name="marca"]').val( catalog_manufacturer_id );

  $('#form_editar_fabricante input[name="name"]').val( name );

}

function editarFamilia( id, name ) {

  $('#form_editar_familia input[name="id"]').val( id );
  // $('#form_editar_familia select[name="marca"]').val( catalog_manufacturer_id );
  $('#form_editar_familia input[name="name"]').val( name );

}