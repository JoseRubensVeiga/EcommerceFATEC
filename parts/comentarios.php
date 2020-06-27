<?php
include_once(__DIR__ . '/../app/consulta-comentarios.php');
$comentarios = consultarComentarios();
?>

<hr>
<div class="row">
  <div class="col-12 p-5">
    <h1>Comentários</h1>
    <?php foreach ($comentarios as $comentario) : ?>
    <div class="d-flex border p-2 mt-3">
      <div class="d-flex justify-content-center flex-column">
        <h5><?php echo $comentario->nome_usuario; ?></h5>
        <p><?php echo $comentario->data_criacao; ?></p>
      </div>
      <div class="text-center d-flex justify-content-center flex-column align-items-center w-100">
        <h2><?php echo $comentario->titulo; ?></h2>
        <p class="w-75"><?php echo $comentario->texto; ?></p>
        <?php if (isset($_SESSION['user']) && $_SESSION['user']->fl_cliente == 0) : ?>
        <form method="POST" action="excluir-comentario.php"
          class="w-100 d-flex justify-content-center flex-column align-items-end">
          <input type="hidden" name="comentarioIdExcluir" value="<?php echo $comentario->id; ?>" />
          <button type="submit" class="text-right text-danger simple-button">
            Excluir comentário
          </button>
        </form>
        <?php endif; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<?php if (isset($_SESSION['user'])) : ?>
<div class="row">
  <form method="POST" action="criar-comentario.php" class="col-12 p-5">
    <h1 class="text-center">Novo comentário</h1>
    <div class="form-group">
      <label for="">Título</label>
      <input type="text" class="form-control" name="titulo" />
    </div>
    <div class="form-group">
      <label for="">Texto</label>
      <textarea class=" form-control" cols="4" name="texto"></textarea>
    </div>
    <button type="submit" class="btn btn-success mt-4">Enviar comentário</button>
  </form>
</div>
<?php endif; ?>