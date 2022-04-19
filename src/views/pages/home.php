<?php $render('header'); ?>


<div class="container">
  <h2 class="text-center mt-2">Cadastrar computador:</h2>
  <div class="col">
    <form method="POST" action="<?php echo $base.'/add';?>">
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
          <label for="modelo"><strong>Tempo de Uso:</strong></label>
          <input type="text" class="form-control" placeholder="Tempo de uso:" name="tempoUso" autocomplete="off">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <label for="pa"><strong>Escolha uma Cidade/PA:</strong></label>
          <select name="pa_cidade" id="pa" class="form-select">
          <option></option>
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

      </div>
      <button type="submit" class="btn btn-success mt-3">Cadastrar</button>


    </form>
  </div>

  <div class="table-responsive mt-4">
    <table class="table table-striped table-bordered table-hover">
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
      <tbody>
        <tr>
          <td>BRJ527TV5W</td>
          <td>HP</td>
          <td>HP Compaq 8200 Elite</td>
          <td>2 anos</td>
          <td>00 | Morrinhos</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>




<?php $render('footer'); ?>