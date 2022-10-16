<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC - HOME</title>
    <!-- CSS -->
    <link href='../Funcionario/CSS/TabBar.css' rel='stylesheet'>
    <link href='../Funcionario/CSS/Home.css' rel='stylesheet'>
    <!-- JAVASCRIPT -->
    <script src="../Funcionario/JavaScript/TabBar.js" type="text/javascript" defer></script>
    <!-- CSS ASSETS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='../Funcionario/CSS/Fonts&Color.css' rel='stylesheet'>
</head>
<body>
    <span>Barra está funcionando, só não está linkada por conta de sofre algumas atualizações</span>
    <div class="indicador1">
        <div>
            <i class='bx bx-chevron-left'></i>
            <i class='bx bx-chevron-left'></i>
        </div>
    </div>
    <header class="Header">
        <!-- Barra Laterial -->
        <nav class="Nav">
            <!-- Logo SGC -->
            <div class="Logo_SGC">
                <!-- Logo SGC -->
                <div>
                    <img src="../img/Logo 1.png" alt="Logo SGC">
                    <span>Sistema de Gerenciamento <br>de Chaves</span>
                </div>
                <!-- Alternativa Logo SGC -->
                <div>
                    <img src="../img/Chave.png" alt="Logo SGC">
    
                </div>  
            </div>
            <!-- Container Com Opções da Barra Lateral -->
            <div class="Container_Opc">
                <!-- Lista dos Itens -->
                <ul class="Ul_Barra">
                    <!-- Item 1 = Home -->
                    <li class="Li_Barra">
                        <a href="#" class="Item_Barra active">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-home'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Home</span>
                        </a>
                    </li>
                    <!-- Item 2 = Cadastro -->
                    <li class="Li_Barra">
                        <a href="#" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-key'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Cadastro</span>
                        </a>
                    </li>
                    <!-- Item 3 = Pendetes -->
                    <li class="Li_Barra">
                        <a href="#" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-time-five'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Pendetes</span>
                        </a>
                    </li>
                    <!-- Item 4 = Solicitações -->
                    <li class="Li_Barra">
                        <a href="#" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-archive-in'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Solicitações</span>
                        </a>
                    </li>
                    <!-- Item 5 = Agendamento -->
                    <li class="Li_Barra">
                        <a href="#" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-bell'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Agendamento</span>
                        </a>
                    </li>
                    <!-- Item 6 = Sobre -->
                    <li class="Li_Barra">
                        <div></div>
                        <a href="#" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-group'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Sobre</span>
                        </a>
                    </li>
                    <!-- Item 7 = Sair -->
                    <li class="Li_Barra">
                        <a href="#" class="Item_Barra_Sair">
                            <i class='bx bx-exit'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav> 
        <!-- Indicadores do Status da Barra Lateral -->
            <div class="indicadores">
                <div class="indicador2"></div>
                <div class="indicador3"></div>
            </div>
    </header>
    <main class="Main">
        <div class="PoPuPs">
            <div class="Popup_Cadastro">
                <form method="POST" id="FormularioCadastroPredio" action="/config/predio.php">
                    <input style="display: none" name="tipo" id="tipo" type="text" value="cadastrapredio">
                    <input type="number" name="id_Novo_Predio" placeholder="Digite o Novo Prédio">
                    <input type="submit" name="sendNovoPredio" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
        <div class="Container1" id="ContainerMain">
            adsfasfd
        </div>
        <div class="Container2" id="ContainerMain">
            asdfsdf
        </div>
        <div class="Container3" id="ContainerMain">
            asdfsf
        </div>
    </main>
</body>
</html>