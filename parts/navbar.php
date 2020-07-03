<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white">
    <a class="navbar-brand" href="index.php">YourSneakers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-5">
            <?php if (isset($_SESSION['logado']) && $_SESSION['user']->fl_cliente === 0): ?>
            <li class="nav-item">
                <a class="nav-link " href="painel.php">Painel de controle</a>
            </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['user'])) : ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Conta
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-danger" href="logout.php">Sair</a>
                </div>
            </li>
            <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Entrar</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>