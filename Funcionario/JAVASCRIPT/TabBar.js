// CONFIGURAÇÃO BARRA ---------------------
//----INDICADOR LOCAL-------
const LiItens = document.querySelectorAll('.Item_Barra');
const IndiItemActive = document.querySelector('.indicador2');
const IndiItemActive2 = document.querySelector('.indicador3');

LiItens.forEach((item, index)=>{
    item.addEventListener('click', ()=>{
        document.querySelector('.Item_Barra.active').classList.remove('active');
        item.classList.add('active');
        if (index == 5){
            IndiItemActive.style.top = `${index*49+365}px`;
            IndiItemActive2.style.top = `${index*49+365}px`;
        } else if (index == 0) {
            IndiItemActive.style.top = `${index*49+173}px`;
            IndiItemActive2.style.top = `${index*49+173}px`;
        } else {
            IndiItemActive.style.top = `${index*50+173}px`;
            IndiItemActive2.style.top = `${index*50+173}px`;
        }
    });
});

//----INDICADOR STATUS/DIMENSÃO BARRA-------
const IndiDimen = document.querySelector('.indicador1');
const Nav = document.querySelector('.Nav');
const HeaderSta = document.querySelector('.Header');
const MainSta = document.querySelector('.Main');

function Dimensao(){
    IndiDimen.classList.toggle('active'); //Indicador
    Nav.classList.toggle('status2'); // Nav
    HeaderSta.classList.toggle('status2'); //Header
    MainSta.classList.toggle('status2');//Main
    IndiItemActive2.classList.toggle('active');//Barra Lateral Icon Direita
}

IndiDimen.addEventListener('click', Dimensao);
