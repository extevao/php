<?php include("cabecalho.php") ?>
  <?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
   ?>

  <div class="row">
    <div class="col-sm-4">
      Produto adicionado com sucesso.
      <div class="panel panel-default">
        <div class="panel-heading"> <?=$nome ?> </div>
        <div class="panel-body">
          R$: <?= number_format($preco, 2)?>

        </div>
      </div>

    </div>
  </div>

<?php include("rodape.php") ?>
