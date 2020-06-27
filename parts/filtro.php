<h3>Filtro</h3>

<form action="index.php" method="get" class="form-group">
  <label for="">Pesquisar produto</label>
  <input type="text" name="descricao" class='form-control w-75' placeholder="Descrição do produto"
    value="<?php echo $_GET['descricao'] ?? '' ?> " />
  <button type="submit" class="btn btn-success mt-4">Aplicar filtro</button>
</form>