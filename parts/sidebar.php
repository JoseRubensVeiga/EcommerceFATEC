<?php

session_start();

?>

<div class="sidebar">
  <h5>
    <a class="text-danger" href="index.php">Voltar</a>
  </h5>
  <h5 style="margin: 20px"><?php echo $_SESSION['user']->nome; ?></h5>
  <ul class="list-group mt-5">
    <a href="painel-cadastro-clientes.php">
      <li class="list-group-item list-group-item-action border-0 c-pointer">
        Gerenciar Clientes
      </li>
    </a>
    <a href="painel-cadastro-usuarios.php">
      <li class="list-group-item list-group-item-action border-0 c-pointer">
        Gerenciar Usuários
      </li>
    </a>
    <a href="painel-cadastro-produtos.php">
      <li class="list-group-item list-group-item-action border-0 c-pointer">
        Gerenciar Produtos
      </li>
    </a>
  </ul>
</div>