

<div id="page-wrapper">

    <div class="container-fluid"  style="min-height: 720px;">

        <div class="row">
            <div class="col-xs-12">
                <h3 class="text-center">Dispositivos</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
            </div>
        </div>

        <br>

        <!-- Page Heading -->
        <div class="row">
            
            <div class="col-lg-12">
                

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-mobile fa-fw fa-2x"></i> Catalogo de dispositivos. <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#modal_nuevo_dispositivo"><i class="fa fa-plus fa-fw "></i>Nuevo dispositvo</button></h3>

                    </div>

                    <div class="panel-body">
                        
                        <table id="catalog_devices"></table>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->




<!-- Modals section -->

<div class="modal fade" id="modal_nuevo_dispositivo" tabindex="-1" role="dialog" aria-labelledby="modal_nuevo_dispositivo">
  <div class="modal-dialog modal-md"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar nuevo dispositivo</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1">

            <!-- edit form column -->
            <div class="personal-info">

              <form class="form-horizontal" role="form" id="form_nuevo_dispositivo">

                

                <div class="form-group">
                  <label class="col-lg-4 control-label" for="marca">Marca:</label>
                  <div class="col-lg-8">
                    <select class="form-control" id="marca" name="catalog_manufacturer_id">
                      <option value="1">Samsung</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Nombre:</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="name" type="text" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Description:</label>
                  <div class="col-lg-8">
                    <textarea class="form-control" rows="3" id="comment" name="description"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Min de puntos:</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="min_points" type="number">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Maximo de puntos:</label>
                  <div class="col-lg-8">
                    <input class="form-control"  name="max_points" type="number" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Tipo:</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="type" type="text" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Modelo:</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="modelo" type="text" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Imagen:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="file" name="image" accept="image/*">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label class="col-lg-4 control-label"></label>
                  <div class="col--8">
                    <input type="submit" class="btn btn-primary" value="Guardar Cambios">
                  </div>
                </div>

              </form>

            </div>

          </div>
        </div>

      </div>
      
    </div>
  </div>
</div>



<div class="modal fade" id="modal_editar_dispositivo" tabindex="-1" role="dialog" aria-labelledby="modal_editar_dispositivo">
  <div class="modal-dialog modal-md"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar nuevo dispositivo</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1">

            <!-- edit form column -->
            <div class="personal-info">

              <form class="form-horizontal" role="form" id="form_dispositivo_editar">

                

                <div class="form-group">
                  <label class="col-lg-4 control-label" for="marca">Marca:</label>
                  <div class="col-lg-8">
                    <select class="form-control" id="marca" name="catalog_manufacturer_id">
                      <option value="1">Samsung</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Nombre:</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="name" type="text" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Description:</label>
                  <div class="col-lg-8">
                    <textarea class="form-control" rows="3" id="comment" name="description"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Min de puntos:</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="min_points" type="number">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Maximo de puntos:</label>
                  <div class="col-lg-8">
                    <input class="form-control"  name="max_points" type="number" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Tipo:</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="type" type="text" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Modelo:</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="modelo" type="text" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label">Imagen:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="file" name="image" accept="image/*">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label class="col-lg-4 control-label"></label>
                  <div class="col--8">
                    <input type="submit" class="btn btn-primary" value="Guardar Cambios">
                  </div>
                </div>

              </form>

            </div>

          </div>
        </div>

      </div>
      
    </div>
  </div>
</div>