<?php $render('header'); ?>
<?php
if (isset($_SESSION['success'])) {
  echo $_SESSION['success'];
  unset($_SESSION['success']);
  $_session['success'] = '';
}

?>

<div class="container" style="margin-top:80px;">
  <h2 class="text-center mt-2">Cadastrar computador:</h2>
  <div class="col">
    <form method="POST" action="<?php echo $base . '/add'; ?>">
      <div class="row">
        <div class="col">
          <label for="marca"><strong>Marca:</strong></label>
          <input type="text" class="form-control" placeholder="Marca do computador:" name="marca" autocomplete="off">
        </div>
        <div class="col">
          <label for="modelo"><strong>Modelo:</strong></label>
          <input type="text" class="form-control" placeholder="Modelo do computador:" name="modelo" autocomplete="off">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <label for="marca"><strong>Número de Série:</strong></label>
          <input type="text" class="form-control" placeholder="Número de série:" name="numeroSerie" autocomplete="off">
        </div>
        <div class="col">
          <label for="modelo"><strong>Data de compra:</strong></label>
          <input type="date" class="form-control" placeholder="Tempo de uso:" name="tempoUso" autocomplete="off">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <label for="pa"><strong>Escolha uma Cidade/PA:</strong></label>
          <select name="pa_cidade" id="pa" class="form-select">
            <option></option>
            <?php foreach ($citys as $city) : ?>
              <option value="<?php echo $city['pk_city']; ?>"><?php echo $city['numberCity'] . " | " . $city['nameCity']; ?></option>
            <?php endforeach; ?>


          </select>
        </div>

      </div>
      <button type="submit" class="btn btn-success mt-3">Cadastrar</button>


    </form>
  </div>

  <div class="table-responsive mt-4">
    <table class="table table-striped table-bordered table-hover table-sm">
      <h4 class>Todos computadores cadastrados:</h4>
      <thead class="thead-dark text-center">
        <tr>
          <th>Número de série#:</th>
          <th>Marca:</th>
          <th>Modelo:</th>
          <th>Tempo de uso:</th>
          <th>PA|Cidade</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php foreach ($computers as $computer) : ?>
          <tr>
            <td><?php echo $computer['serialNumber']; ?></td>
            <td><?php echo $computer['brand']; ?></td>
            <td><?php echo $computer['model']; ?></td>
            <td><?php echo $computer['timeUsed']; ?></td>
            <td><?php echo "{$computer['numberCity']} | {$computer['nameCity']}"; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>




<?php $render('footer'); ?>