<?php
require("../controllers/header.php");
// include("../controllers/check-login.php");
session_start();

    if(isset($_SESSION["email"]) == false) {
        header("Location: ../views/login-page.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user-page.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="../js/jquery.min.js"></script>
    <script src="../js/index.js" defer></script>
    <script src="../js/header.js"></script>
    <script src="../js/bootstrap.js" defer></script>
    <script src="../js/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.css">
    <title>Meu Perfil - ONGS</title>
</head>

<body>
    <section class="user-info">
        <div class="header-info">
            <img src="../img/user.png" alt="">
            <h1>Olá Maria Kenji Vieira Vilas Boas Henrique</h1>
            <!-- <h1>Olá <?php echo $_SESSION["email"]; ?></h1> -->
        </div>
        <div class="header-buttons">
            <a href="../controllers/logout.php">Sair</a>
            <a href="../views/config-page.php">Editar Conta</a>
        </div>
    </section>
    <section class="form-user">
        <form action="../controllers/perfil.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control input-block" name="nome"
                    placeholder="<?php echo $_SESSION['nome']; ?>">
                <label class="form-control-placeholder" for="nome">Nome Completo</label>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" autocomplete="off"
                    placeholder="<?php echo $_SESSION['email']; ?>">
                <label class="form-control-placeholder" for="email">Alterar E-mail</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-block" name="cpf"
                    placeholder="<?php echo $_SESSION['cpf']; ?>">
                <label class="form-control-placeholder" for="cpf">CPF</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="senha" autocomplete="off" placeholder="*********">
                <label class="form-control-placeholder" for="senha">Alterar Senha</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="tel" autocomplete="off"
                    placeholder="<?php echo $_SESSION['tel']; ?>">
                <label class="form-control-placeholder" for="tel">Alterar Telefone</label>
            </div>
            <button class="btn-input">Atualizar</button>
        </form>
    </section>
    <button id="delete" class="btn-delete">
        <span class="material-symbols-outlined">
            delete
        </span>
    </button>
    <script type="text/javascript">
        $(document).on('click', '#delete', function (del) {
            Swal.fire({
                title: 'Excluir conta',
                text: "Deseja excluir sua conta?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#27A427',
                confirmButtonText: 'Excluir',
                cancelButtonText: 'Cancelar'
            })
        })
    </script>
</body>