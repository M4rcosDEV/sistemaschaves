<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastro_funcionario_login.css">
    <script src="https://kit.fontawesome.com/ddb432a9eb.js" crossorigin="anonymous"></script>
    <script src="./JAVASCRIPT/dados_login.js" defer></script>
        
    <title>Cadastro - dados de Login</title>
</head>

<body>

    <img src="/img/logo.svg" class="Logo-SGC" alt="Logo">

    <main class="container-global">
        <section class="section-1">

            <div class="apresentacao">
            <h1>Cadastre sua conta</h1>
            <h2>Dados Pessoais &gt; <span>Dados de Login</span></h2>
        </div>

        <form name="CadLogin" action="home.html" onsubmit="return cadastrarDados()">
            <div class="input-icone-field">
                <input type="number" placeholder="Matrícula" required>
                <i class="fa fa-user fa-lg fa-fw"></i>
            </div>

            <div class="input-icone-field">
                <input type="password" placeholder="Senha" id="senha">
                <i class="fa-solid fa-lock fa-lg fa-fw"></i>
            </div>
            <div class="input-icone-field">
                <input type="password" placeholder="Confirmar senha" id="confirmar_senha" oninput="validarSenha('senha', 'confirmar_senha')" required>
                <i class="fa-solid fa-lock fa-lg fa-fw"></i>
            </div>

            <div class="input-icone">
            <input type="submit" value="Cadastrar" class="botao-enviar" required>
        </div>
    </form>
        </section>
    </main>

    <section class="section-2">
        <div id="sub-container">
            <img src="/img/fundo-login.svg" id="chaves-decoracao">
            <img src="/img/chave 1.svg" id="chaves">
            <span><p id="SGC-nome">Sistema de gerenciamento de chaves</p></span>
        </div>
    </section>
        
</body>

</html>