//----------------------------------
function exibirPredios(){
    console.log("testando");
     $.get('./PHP/Predio.php', function (predio){
         console.log(predio);
         var ul_predio = document.querySelector('.Ul_Predios'); 
         predio.forEach(element => {

            ul_predio.innerHTML += `<li class="Modelo_Predio">
                                     <div>
                                         <h4>Prédio</h4>
                                         <h4>${element["id_predio"]}</h4>
                                     </div>
                                     <img src="../Assets/Prédio.png" alt="Ilustração Prédio">
                                 </li>`;
         });
     }, 'JSON');
 }
 $(function(){
     exibirPredios();
 });
const listaPredios = async() => {
    const dados = await fetch('./PHP/Predio.php');
    const resp = await dados.text();
    console.log(resp);
}