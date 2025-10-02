<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestion de usuarios
        <small>Administrar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gestion de usuarios</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <!--agregar el boton del modal para crear usuario--->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar usuario</button>

         
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="box-body">
              <table id="example1" class="table table-bordered table-striped dt reponsive tablas" width="100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Foto</th>
                  <th>Perfil</th>
                  <th>Estado</th>
                  <th>Ultimo login</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>
                    <div class="btn-group"> 
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                  <td>X</td>
                  <td>X</td>
                  <td>  <div class="btn-group"> 
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                 
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                  <td>X</td>
                  <td>X</td>
                  <td>
                      <div class="btn-group"> 
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
               
               
                </tfoot>
              </table>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

      <!-- Modal -->
       <!--=====================================MODAL AGREGAR USUARIO======================================-->
    <div id="modalAgregarUsuario" class="modal fade" role="dialog">  
      <div class="modal-dialog">
        <div class="modal-content">
          <form role="form" method="post" enctype="multipart/form-data">
            <!--=====================================CABEZA DEL MODAL======================================-->
            <div class="modal-header" style="background:#3c8dbc; color:white">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Agregar usuario</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <!-- ENTRADA PARA EL NOMBRE -->
                <div class="form-group">              
                  <div class="input-group">              
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
                  </div>
                </div>
                <!-- ENTRADA PARA EL USUARIO -->
                <div class="form-group">              
                  <div class="input-group">            
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>
                  </div>
                </div>
                <!-- ENTRADA PARA LA CONTRASEÑA -->
                <div class="form-group">              
                  <div class="input-group">              
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
                  </div>
                </div>
                <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->
                <div class="form-group">              
                  <div class="input-group">              
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select class="form-control input-lg" name="nuevoPerfil">                  
                      <option value="">Selecionar perfil</option>
                      <option value="Administrador">Administrador</option>
                      <option value="Especial">Especial</option>
                      <option value="Vendedor">Vendedor</option>
                    </select>
                  </div>
                </div>
                <!-- ENTRADA PARA SUBIR FOTO -->
                <div class="form-group">              
                  <div class="panel">SUBIR FOTO</div>
                  <input type="file" class="nuevaFoto" name="nuevaFoto">
                  <p class="help-block">Peso máximo de la foto 2MB</p>
                  <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                </div>
              </div>
            </div>
            <!--=====================================PIE DEL MODAL ======================================-->
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-primary">Guardar usuario</button>
            </div>
<!--realiaciomos la instancias para crear usuario -->
      <?php
      $crearUsuario=new ControladorUsuarios();
      $crearUsuario -> crtCrearUsuario();
      ?>
          </form>
        </div>
      </div>
    </div>
  </div>



  