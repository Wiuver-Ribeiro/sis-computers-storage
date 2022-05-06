<?php $render('header'); ?>

<?php if ($_SESSION['success']) :
  echo $_SESSION['success'];
  $_SESSION['success'] = '';
endif; ?>

<div class="container">
  <h2 class="text-center mt-5">Gerar Relatório:</h2>
  <form action="<?php echo $base . '/gerar'; ?>" method="POST">
    <div class="row">
      <div class="col">
        <select name="pa" id="pa" class="form-select">
          <option>Escolha uma cidade/PA:</option>
          <option value="00">00 | Morrinhos</option>
          <option value="01">01 | Água Limpa</option>
          <option value="02">02 | Pontalina</option>
          <option value="03">03 | Caldas Novas</option>
          <option value="04">04 | Buriti Alegre</option>
          <option value="05">05 | Corumbaíba</option>
          <option value="06">06 | Edealina</option>
          <option value="07">07 | Marzagão</option>
          <option value="08">08 | Rio Quente</option>
          <option value="09">09 | Ouvidor</option>
          <option value="97">97 | PA Digital</option>
          <option value="99">99 | Morrinhos UAD</option>

        </select>
      </div>
      <div class="col">
        <button type="submit" class="btn btn-success">Filtrar Relatório</button>
      </div>
    </div>
  </form>
</div>

<div class="container mt-5">
  <div class="table-responsive">
    <table class="table table-hover table-bordered table-striped rounded">
      <button class="btn btn-primary mb-3">Gerar Relatorio</button>
      <thead>
        <th>Número de Série:</th>
        <th>Marca:</th>
        <th>Modelo:</th>
        <th>Tempo de Uso:</th> 
      </thead>
      <tbody>
      <?php foreach($relatorio as $relatorios) : ?>
        <tr>
          <td><?php echo $relatorios['serialNumber']; ?></td>
          <td>DELL</td>
          <td>Aspire 5</td>
          <td>3 Anos</td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php $render('footer'); ?>