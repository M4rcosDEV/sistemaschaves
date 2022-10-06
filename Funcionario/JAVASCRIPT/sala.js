const btnVerde = document.querySelector('.botao_verde');
const btnVermelho = document.querySelector('.botao_red');


function alertBotoes(){
    alert('Em desenvolvimento');
}

btnVerde.addEventListener('click', alertBotoes);
btnVermelho.addEventListener('click', alertBotoes);

//add salas

const numeroSala = document.querySelector('.numero-sala');
const salvaSala = document.querySelector('.salvar-sala');
const tagPai = document.querySelector('.container_predios');

var i=1;
function criarSala(){
    var novaSala = document.createElement('section');
    novaSala.innerHTML = `<section class="salas">
                            <div class="mini-container-sala">
                                <img class="img-chave-sala" src="/img/Chave.png" alt="">
                                <div class="linha"></div>
                                <p class="nome_sala">Sala ${numeroSala.value}</p>
                                <div class="linha"></div>
                                <div class="nome_func_sala">Nome</div>
                                <section>
                                    <button><img class="botao_verde" src="/img/botao_verde.svg" alt=""></button>
                                    <button><img class="botao_red" src="/img/botao_vermelho.svg" alt=""></button>
                                </section>
                            </div>
                        </section>`
    tagPai.appendChild(novaSala);
    pGerenciarSala.style.display = 'none';

    if(i!=1){
        alert('Criando ainda');
        pGerenciarSala.style.display = 'none';
    }
    i++;
}

salvaSala.addEventListener('click', criarSala);
