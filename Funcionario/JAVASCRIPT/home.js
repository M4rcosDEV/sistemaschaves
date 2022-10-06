const inputPesquisa = document.querySelector('.seach_1');
const imgLupa = document.querySelector('#seach_1_icon');

function hideLupa(){
    if(inputPesquisa.value != ''){
        imgLupa.style.display = 'none';
    }

    console.log(inputPesquisa.value);
}

inputPesquisa.addEventListener('keydown', hideLupa);

//---------- Novo Prédio ----------
const BtnAdicionarPredio = document.querySelector('.button_Adicionar_Predio');
const BtnAdicionarPredioFechar = document.querySelector('.button_Adicionar_Predio_Fecha');
const BtnSalvaPredio = document.querySelector('.button_salvar_predio_novo');
const IdNovoPredio = document.querySelector('.IdNovoPredio');

const AdicionarPredio = document.querySelector('.PopupAdicionarPredio');
const PopupPredio = document.querySelector('.ConteinarPopupAdicionarPredio');


BtnAdicionarPredio.addEventListener('click', () => {
    AdicionarPredio.style.opacity = '1';
    PopupPredio.style.display = 'flex';
});

BtnAdicionarPredioFechar.addEventListener('click', () => {
    AdicionarPredio.style.opacity = '0';
    PopupPredio.style.display = 'none';
});














/*
BtnAdicionarPredio.addEventListener('click', () => {
    AdicionarPredio.style.display = 'flex';
});

BtnAdicionarPredioFechar.addEventListener('click', () => {
    AdicionarPredio.style.display = 'none';
});

var idpredio;
const idPrediosCriados = document.querySelector('.Container_Predio_Numero').innerText;

function ValoresJaAdicionados(){
    if (idpredio == idPrediosCriados){
        alert("Número de prédio já existente!");
        document.querySelector('.IdNovoPredio').value = '';
        document.querySelector('.IdNovoPredio').focus();
    }
}

BtnSalvaPredio.addEventListener('click', () => {
    Id
    ValoresJaAdicionados();
        const linhaPredios = document.querySelector('.line_predios_link');
        const predio = document.createElement("div");
              predio.innerHTML = `<div class="Container_Predio">
                                    <a href="sala.html">
                                        <div class="Container_Predio_infor">
                                            <h4>Prédio</h4>
                                            <h4>${idpredio}</h4>
                                        </div>
                                        <img src="/img/Prédio.png" alt="Prédio">
                                    </a>
                                    </div>`;
                linhaPredios.appendChild(predio);
    AdicionarPredio.style.display = 'none';
});



*/