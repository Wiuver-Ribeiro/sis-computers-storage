<?php $render('header'); ?>

<?php
if (isset($_SESSION['success'])) {
  echo $_SESSION['success'];
  unset($_SESSION['success']);
  $_session['success'] = '';
}


?>

<div class="container" style="margin-top:80px;">
  <h2 class="text-center mt-2">Cadastrar PA/Cidade:</h2>
  <div class="col">
    <form method="POST" action="<?php echo $base . '/add/city/'; ?>">
      <div class="row">
        <div class="col">
          <label for="marca"><strong>PA:</strong></label>
          <input type="text" class="form-control" placeholder="Número do PA:" name="numberPA" autocomplete="off">
        </div>
        <div class="col">
          <label for="modelo"><strong>Cidade:</strong></label>
          <input type="text" class="form-control" placeholder="Nome da cidade:" name="cityName" autocomplete="off">
        </div>
      </div>
      <button type="submit" class="btn btn-success mt-3">Cadastrar</button>


    </form>
  </div>

  <div class="table-responsive mt-4">
    <table class="table table-striped table-bordered table-hover">
      <h4 class>Todas Pa/Cidades:</h4>
      <thead class="thead-dark text-center">
        <tr>
          <th>PA:</th>
          <th>Cidade:</th>
          <th>Editar:</th>
        </tr>
      </thead>
      <tbody class="text-center mb-3">
        <?php foreach ($citys as $city) : ?>
          <tr>
            <td><?php echo $city['numberCity']; ?></td>
            <td><?php echo $city['nameCity']; ?></td>
            <td><button class="btn btn-warning"><i class="fas fa-edit text-light"></i></button></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>




<?php $render('footer'); ?>