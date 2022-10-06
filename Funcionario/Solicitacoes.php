<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC - Solicitações</title>
    <!-- Icons -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!-- Style Global-->
    <link href="/Funcionario/CSS/Tab.css" rel="stylesheet" type="text/css" />
    <!-- Style -->
    <link href="/Funcionario/CSS/Home.css" rel="stylesheet" type="text/css" />
    <link href="/Funcionario/CSS/solicitacoes.css" rel="stylesheet" type="text/css" />
    <!-- Script -->
    <script src="/Funcionario/JAVASCRIPT/Tab.js" type="text/JavaScript" defer></script>
    <script src="/Funcionario/JAVASCRIPT/sala.js" defer></script>
    <script src="/Funcionario/JAVASCRIPT/popSala.js" defer></script>
</head>

<body>
    <!-- Menu -->
    <nav class="menu">
        <div class="Seta">
            <i class='bx bxs-send'><div class="Circulo_Seta"></div></i>
        </div>
        <div class="Conteiner_Menu">
                <div class="NameServico">
                    <div class="Logo_Status_1">
                        <img src="/img/Logo 1.png" alt="Logo SGC">
                        <h4>Sistema de Gerenciamento </h4>
                        <h4>de Chaves</h4>
                    </div>
                    <div class="Logo_Status_2">
                        <img src="/img/Chave.png" alt="Logo SGC" class="imgs_menu_2">
                    </div>
                </div>
            <ul class="Lista_Menu">
                <!-- Item 1 MENU -->
                <li class="Item_Menu">
                    <a href="/Funcionario/home.html">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-home'></i>
                            <i class='bx bxs-home'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Home">Home</span>
                        </div>
                    </a>
                </li>
                <!-- Item 2 MENU -->
                <li class="Item_Menu">
                    <a href="/Funcionario/gerenciamento.html">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-key' ></i>
                            <i class='bx bxs-key' ></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Gerenciamento">Gerenciamento</span>
                        </div>
                    </a>
                </li>
                <!-- Item 3 MENU -->
                <li class="Item_Menu">
                    <a href="/Funcionario/pendente.html">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-archive-in'></i>
                            <i class='bx bxs-archive-in'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Pendente">Pendente</span>
                        </div>
                    </a>
                </li>
                <!-- Item 4 MENU -->
                <li class="Item_Menu active">
                    <a href="/Funcionario/Solicitacoes.html">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-user-voice'></i>
                            <i class='bx bxs-user-voice'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Solicitação">Solicitação</span>
                        </div>
                    </a>
                </li>
                <!-- Item 5 MENU -->
                <li class="Item_Menu">
                    <a href="/Funcionario/Agendamento.html">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-hourglass-top'></i>
                            <i class='bx bxs-hourglass-top'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Agendamento">Agendamento</span>
                        </div>
                    </a>
                </li>
                <li class="Item_Menu">
                    <a href="/Funcionario/Cadastro-funcionario.html">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-user-badge'></i>
                            <i class='bx bxs-user-badge'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Cadastro">Cadastro</span>
                        </div>
                    </a>
                </li>
                <!-- Linha -->
                <div class="Line_Icon_Sobre"></div>
                <!-- Item 6 MENU -->
                <li class="Item_Menu">
                    <a href="/Funcionario/Sobre.html">
                        <div class="Item_Menu_Icon">
                            <i class='bx bx-group'></i>
                            <i class='bx bx-group'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Sobre">Sobre</span>
                        </div>
                    </a>
                </li>
                <!-- Item 7 MENU -->
                <li class="Item_Menu">
                    <a href="/Funcionario/index.html" class="exit_menu">
                        <div class="Item_Menu_Icon">
                            <i class='bx bx-export'></i>
                            <i class='bx bx-export'></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="Infor_Gerenciamento">
            <a href="/Funcionario/home.html">
              <i class='bx bx-chevron-right'></i>
              <h3>Solicitações</h3>
            </a>
          </div>
    </header>
    <main>
        <section class="botao-agendamento">
            <button class="botao-agendar">Agendamento</button>

            <div class="divisao">
                <p>Agendamento</p>
                <div class="linha"></div>
            </div>
        </section>

        <section class="chaves-agendadas">

            <div class = "container-pendente">
                <img src="/img/Chave.png" alt="chave do container">
                <div class = "linha-horizontal"></div>
                <div class="informacoes-pendente">
                    <p>Chave: 731</p>
                    <p>Usuário: Javi Jamilton</p>
                    <p>Data de emissão: 07/08/2021</p>
                </div>
                <div class ="linha-horizontal"></div>
        
                <div class="botao-chave" onclick="receberChave()">
                    <button class="chave-recebida">Aprovar</button>
                    <i class='bx bx-check-circle'></i>
                
            </div>
                <div class="botao-chave" onclick="receberChave()">
                    <button class="chave-recebida">Recusar</button>
                    <img src="../img/close-icon.svg" alt="recusar">
            </div>
            </div>
        </section>
    </main>
</body>

</html>