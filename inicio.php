<?php

session_start();
$logado = false;

if (isset($_SESSION['logado'])) {
  if ($_SESSION['logado'] === true) {
    $logado = true;
    $user = $_SESSION['user'];
  }
}

?>

pagina da loja

<?php if ($logado): ?>
  <a href="logout.php">SAIR DA SESSÃO</a>
  <H1>BEM VINDO, <?php echo $user->nome; ?></H1>
  <pre><?php var_dump($user); ?></pre>
<?php else: ?>
  <a href="login.php">ENTRAR</a>
  <h1>Bem vindo</h1>
<?php endif; ?>