<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>SIS - Computadores</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="img img-fluid" src="<?php echo $base.'/assets/img/icon_app.png';?>" alt="" style="width:30px;">
      SIS- Computadores</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo $base.'/';?>">Cadastrar Computador</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="<?php echo $base.'/city';?>">Cadastrar PA/Cidade</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base.'/gerar';?>">Gerar Relatório</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>