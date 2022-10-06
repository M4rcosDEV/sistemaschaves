<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastro_funcionario.css">
    <script src="https://kit.fontawesome.com/ddb432a9eb.js" crossorigin="anonymous"></script>
    <script src="./JAVASCRIPT/dados_login.js" defer></script>
    <title>Cadastro - dados pessoais</title>
</head>

<body>

    <img src="/img/logo.svg" class="Logo-SGC" alt="Logo">

    <main class="container-global">
        <section class="section-1">

            <div class="apresentacao">
            <h1>Cadastre sua conta</h1>
            <h2> <span> Dados Pessoais</span> &gt; Dados de Login</h2>
        </div>

        <form action="Cadastro-funcionario-login.html" name="CadCredenciais" target="_self" onsubmit="return cadastrarERedirecionar()">
            <div class="input-icone-field">
                <input type="text" placeholder="Nome completo" required>
                <i class="fa fa-user fa-lg fa-fw"></i>
            </div>

            <div class="input-icone-field">
                <select name="funcionarios" id="Selecionar-servidor" required>
                    <option value="" disabled selected hidden">Tipo de Funcionário</option>
                    <option value="terceirizado">terceirizado</option>
                    <option value="servidor">servidor</option>
                </select>
                <i class="fa fa-address-card fa-lg fa-fw"></i>
        
            </div>

            <div class="input-icone-field">
                <input type="email" placeholder="Email">
                <i class="fa-solid fa-at fa-lg fa-fw"></i>
            </div>

            <div class="input-icone">
            <input type="submit" value="Avançar" class="botao-enviar">
        </form>
            <a href="/Funcionario/index.html" class="link"><strong>Já tem uma conta? Entrar</strong></a>
        </div>
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