<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC</title>
    <!-- Icons -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <!-- Style Global-->
    <link href="CSS/Tab.css" rel="stylesheet" type="text/css" />
    <!-- Style -->
    <link href="CSS/Home.css" rel="stylesheet" type="text/css" />
    <link href="CSS/BoxChave.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Popup_Agendamento_Retirada.css" rel="stylesheet" type="text/css" />
    <!-- Script -->
    <script src="/Funcionario/JAVASCRIPT/Tab.js" type="text/JavaScript" defer ></script>
    <script src="/Funcionario/JAVASCRIPT/hom.js" defer></script>
    <script src="/Funcionario/JAVASCRIPT/ScriptCriarPredio.js" defer></script>
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
                        <img src="../img/Logo 1.png" alt="Logo SGC">
                        <h4>Sistema de Gerenciamento </h4>
                        <h4>de Chaves</h4>
                    </div>
                    <div class="Logo_Status_2">
                        <img src="../img/Chave.png" alt="Logo SGC" class="imgs_menu_2">
                    </div>
                </div>
            <ul class="Lista_Menu">
                <!-- Item 1 MENU -->
                <li class="Item_Menu active">
                    <a href="home.php">
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
                    <a href="gerenciamento.php">
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
                    <a href="pendente.php">
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
                <li class="Item_Menu">
                    <a href="Solicitacoes.php">
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
                    <a href="Agendamento.php">
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
                    <a href="Cadastro-funcionario.php">
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
                    <a href="Sobre.php">
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
                    <a href="index.php" class="exit_menu">
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
        <div class="bloco1">
            <!-- Nome user -->
            <div class="nome_user_header">
                <h4>Olá,</h4>
                <h4>Matheus</h4>
            </div>
            
        </div>
        <div class="container_predios">
          <!-- Pesquisa Lado do Nome -->
            <div class="pesquisa">
                <i class='bx bx-search-alt' id="seach_1_icon"></i>
                <input type="search" name="Pesquisa" class="seach_1">
            </div>
          <h4>Em uso</h4>
          <div class="line_predios">
            <div class="line_predios_link">
                <!-- Predio 1 -->
            <div class="Container_Predio">
                <a href="sala.php?id_predio=1">
                    <div class="Container_Predio_infor">
                        <h4>Prédio</h4>
                        <h4 class="Container_Predio_Numero">1</h4>
                    </div>
                  <img src="../img/Prédio.png" alt="Prédio">
                </a>
              </div>
            </div>
            <div class="Container_Predio_Adicionar">
                <button name="button-Adicionar-Predios" class="button_Adicionar_Predio">
                  <i class='bx bx-x' class="button_Adicionar_Predio_Icon"></i>
                </button>
              </div>
          </div>
          <!-- Predio Add -->
        </div>
        <div class="PopupAdicionarPredio">
            <div class="ConteinarPopupAdicionarPredio">
                <img src="../img/Prédio.png" alt="Prédio">
                <div class="Lina_Popup_Adicionar"></div>
                <div class="InformacoesPopupAdicionarPredios">
                    <div class="InformoesPopupPredios_Bloco1">
                        <h4>Novo prédio<h4>
                        <button name="button-Adicionar-Predios" class="button_Adicionar_Predio_Fecha"><i class='bx bx-x'></i></button>
                    </div>
                    <form action="" class="Form_Cadastro_Predio">
                        <section class="Form_Cadastro_Predio_Bloco1">
                            <h4>Numero</h4>
                            <input type="text" name="IdPredio" class="IdNovoPredio" placeholder="digite id">
                        </section>
                        <section class="Form_Cadastro_Predio_Bloco2">
                            <input type="submit" value="Enviar" class="button_salvar_predio_novo">
                        </section>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="Tabela_Chaves">
            <div class="Chaves_Predio2">
              <h4>Chaves</h4>
            </div>
            <!-- Container Nomeclatura Predio -->
            <div class="Container_Predios1_Chave">
              <!-- Descrição Prédio -->
              <div class="informacao_predio">
                <div class="informacao_predio_linha1"></div>
                <div class="nome_predio_tabela2"><h4>Prédio 1</h4></div>
                <div class="informacao_predio_linha2"></div>
              </div>
              <div class="Conteiner_Sala_Predio1">
                <div class="Sala_Predio1">
                    <img src="../img/chave.png" alt="Chave">
                    <div class="Sala_Predio1_Infor_Sala">
                        <h4>Sala</h4>
                        <h4>101</h4>
                    </div>
                    <div class="Sala_Predio1_Status">
                        <p>status</p>
                    </div>
                    <div class="Sala_Predio1_Infor_Status">
                        <div class="Sala_Predio1_Infor_Status_SVG"><svg><circle r=5 cy=5 cx=5></circle>
                                                                        <circle r=5 cy=5 cx=5></circle></svg></div>
                        <h4>Disponivél</h4>
                    </div>
                    <div class="Sala_Predio1_button">
                        <button name="Sala_Predio1_button1" class="Sala_Predio1_button_Agendar">Agendar</button>
                        <button name="Sala_Predio1_button2" class="Sala_Predio1_button_Retirar">Retirar</button>
                    </div>   
                </div>
              </div>
            </div>
        </div>
        <div class="Container_Popup_Agendamento">
            <p>1</p>
        </div>   
    </main>
</body>
</html>