    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=base_url('resources/admin/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('resources/admin/js/bootstrap.min.js')?>"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="<?=base_url('assets/admin_files/js/plugins/morris/raphael.min.js')?>"></script>
    <script src="<?=base_url('assets/admin_files/js/plugins/morris/morris.min.js')?>"></script>
    <script src="<?=base_url('assets/admin_files/js/plugins/morris/morris-data.js')?>"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEMVDpT-6Gyi5ffVx-mO77q9pbzDkTp3Y&callback=initMap" async defer></script> -->

    <!-- Tablas  -->
    <script src="<?=base_url('vendor/wenzhixin/bootstrap-table/dist/bootstrap-table.min.js')?>"></script>
    <!-- <script src="<?=base_url('vendor/wenzhixin/bootstrap-table/dist/bootstrap-table-locale-all.min.js')?>"></script> -->
    <script src="<?=base_url('vendor/wenzhixin/bootstrap-table/dist/locale/bootstrap-table-es-MX.min.js')?>"></script>

    <!-- Sweet alert -->
    <script src="<?=base_url('resources/admin/plugins/sweetalert2/sweetalert2.min.js')?>"></script>

    <!-- Dynamic load of files -->
    <?php
      //var_dump($scripts);
      if(isset($scripts)) {
        foreach ($scripts as $key => $ruta_script) {
          if( $key == 'mapa' ){
            print('<script src="' . $ruta_script . '" async defer></script>');
          } else {
            print('<script type="text/ecmascript" src="'. site_url($ruta_script) .'"></script>');  
          }
          
        }
      }
    ?>

</body>

</html>