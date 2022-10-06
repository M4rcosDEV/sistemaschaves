//Função para o demarcado
var items = document.querySelectorAll('.Item_Menu');
var sinalizador = document.querySelectorAll('.Sinalizado_icon');

function AtivarItem (item) {
    items.forEach(function(item){
        item.classList.remove('active');
    })
    item.classList.add('active');
}
items.forEach(function(item){
    item.addEventListener('click', function(){
        AtivarItem(item);
    });
});

//Animação tabbar
const setaBtn = document.querySelector('.Seta');
const Conteiner_Menu = document.querySelector('.Conteiner_Menu');
const header = document.querySelector('header');
const main = document.querySelector('main');
let Lista_Icons = document.querySelector('.Item_Menu');

function movTab() {
    Conteiner_Menu.classList.toggle('active');
    setaBtn.classList.toggle('active');
    header.classList.toggle('active');
    main.classList.toggle('active');
}
setaBtn.addEventListener('click', movTab);