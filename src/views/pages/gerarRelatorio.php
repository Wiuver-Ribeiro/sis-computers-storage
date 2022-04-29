<?php $render('header'); ?>



<div class="container">
  <h2 class="text-center mt-3">Gerar Relatório:</h2>
  <form action="<?php echo $base.'/gerar/';?>" method="POST">
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
        <button type="submit" class="btn btn-success">Gerar Relatório</button>
      </div>
    </div>
  </form>
</div>

<?php $render('footer'); ?>
