<div>
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('success')) {
      echo "
      <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
      <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
  </div>";
    } ?>
</div>
<!-- php $validación = \Config\Services::validación(); Esto carga automáticamente el archivo Config\Validation que contiene configuraciones para incluir múltiples conjuntos de reglas -->
<?php $validation = \Config\Services::validation(); ?>

<section class="p-3">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-center pt-3 pb-3">
                    <h1>Listado de Mensajes</h1>
                </div>
                <div>
                    <a href="<?php echo base_url('/administrarMensajesLeidos') ?>" class="btn btn-info">
                        Mensajes Leídos
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mensaje</th>
                            <th scope="col">Leer</th>
                            <th scope="col">Marcar Leido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!$mensajes) { ?>
                            <p>No hay mensajes Cargados</p>
                        <?php } else { ?>
                            <?php foreach($mensajes as $row){ ?>
                                <tr>
                                    <td><?php echo $row['id'];  ?></td>
                                    <td><?php echo $row['nombre'];  ?></td>
                                    <td><?php echo $row['email'];  ?></td>
                                    <td><?php echo $row['mensaje'];  ?></td>
                                    <td>
                                        <a href="#" class="btn btn-success">Ver Mensaje</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Marcar Leído</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>