<!DOCTYPE php>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
    <title>Login</title>

    <script src="./JAVASCRIPT/dados_login.js" defer></script>

</head>

<body>

    <img src="../img/logo.svg" class="Logo-SGC" alt="Logo" width="300px">

    <main class="container-global">
        <section class="section-1">
            <h1>Conecte em sua conta</h1>


            <form name="CadLogin" action="home.php" onsubmit="return validarForm()">
            <div class="input-icone">
                <input type="number" placeholder="Matrícula" required>
                <i class="fa fa-user fa-lg fa-fw"></i>
            </div>

            <div class="input-icone">
                <input type="password" placeholder="Senha" required>
                <i class="fa fa-lock fa-lg fa-fw"></i>
            </div>
            <input type="submit" placeholder="Entrar" class="botao-entrar">
        </form>
            <a href="Cadastro-funcionario.php" class="link">Cadastrar Funcionário</a>
            
        </section>
    </main>

    <section class="section-2">
        <div id="sub-container">
            <img src="../img/fundo-login.svg" id="chaves-decoracao">
            <img src="../img/chave 1.svg" id="chaves">
            <span><p id="SGC-nome">Sistema de gerenciamento de chaves</p></span>
        </div>
    </section>
        
</body>

</html>