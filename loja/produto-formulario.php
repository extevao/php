<?php include("cabecalho.php") ?>
    <form class="" action="adiciona-produto.php" method="GET">
      <div class="form-group">
        <label for="">Produto</label>
        <input type="text" name="nome"  class="form-control" />
      </div>
      <div class="form-group">

        <label for="">Preço</label>
        <input type="text" class="form-control" name="preco" />
      </div>

      <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
<?php include("rodape.php") ?>
