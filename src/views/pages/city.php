<?php $render('header'); ?>


<div class="container">
  <h2 class="text-center mt-2">Cadastrar PA/Cidade:</h2>
  <div class="col">
    <form method="POST" action="<?php echo $base.'/add';?>">
      <div class="row">
        <div class="col">
          <label for="marca"><strong>PA:</strong></label>
          <input type="number" class="form-control" placeholder="Número do PA:" name="numberPa" autocomplete="off">
        </div>
        <div class="col">
          <label for="modelo"><strong>Cidade:</strong></label>
          <input type="text" class="form-control" placeholder="Nome da cidade:" name="city" autocomplete="off">
        </div>
      </div>
      <button type="submit" class="btn btn-success mt-3">Cadastrar</button>


    </form>
  </div>

  <div class="table-responsive mt-4">
    <table class="table table-striped table-bordered table-hover">
      <h4 class>Todos computadores cadastrados:</h4>
      <thead class="thead-dark text-center">
        <tr>
          <th>PA:</th>
          <th>Cidade:</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <td>00</td>
          <td>Morrinhos</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>




<?php $render('footer'); ?>