<?php
$produtos = consultarProdutosDestaque();
?>
<div class="owl-carousel owl-theme">
  <?php foreach ($produtos as $produto) : ?>
  <div class="item">
    <div class="card  mx-5" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $produto->img; ?>" alt="<?php echo $produto->descricao; ?>">
      <div class="card-body">
        <h5 class="card-title">
          <?php echo $produto->descricao; ?>
        </h5>
        <p class="card-text">
          RS <?php echo $produto->preco; ?>
        </p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<hr class="mb-4">