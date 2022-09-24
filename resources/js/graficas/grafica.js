window.addEventListener('load', ()=>{
    var anexar = document.querySelector("#article_datos");
    var div_graficos = document.querySelector("#resultados");
    var preguntas = JSON.parse(anexar.dataset.datos);
    var respuestas = JSON.parse(anexar.dataset.respuestas);
    var cont = 0;
    
    function grafica(nombre, n, tipo){
        var datos = Object.entries(respuestas[n]);
        var etiquetas = new Array();
        var dat = new Array();
        datos.forEach(element => {
            etiquetas.push(element[0]);
            dat.push(element[1]);
        });
        var datosVentas2020 = {
            label: "Datos",
            data: dat,
            backgroundColor: [
                'rgba(0, 255, 234, 0.9)',
                'rgba(2, 1, 34, 0.9)',
                'rgba(215, 38, 61, 0.9)',
                'rgba(17, 29, 94, 0.9)',
                'rgba(210, 255, 40, 0.9)',
                'rgba(97, 255, 126, 0.9)',
                'rgba(158, 2, 242, 0.9)',
                'rgba(81, 13, 10, 0.9)',
                'rgba(209, 96, 20, 0.9)'
            ],
            borderColor: [
                'rgba(0, 255, 234, 1)',
                'rgba(2, 1, 34, 1)',
                'rgba(215, 38, 61, 1)',
                'rgba(17, 29, 94, 1)',
                'rgba(210, 255, 40, 1)',
                'rgba(97, 255, 126, 1)',
                'rgba(158, 2, 242, 1)',
                'rgba(81, 13, 10, 1)',
                'rgba(209, 96, 20, 1)'
            ],
            borderWidth: 1,
        };
        new Chart(document.getElementById(nombre), {
            type: tipo,
            data: {
                labels: etiquetas,
                datasets: [
                    datosVentas2020,
                ]
            }
        });
    }
    preguntas.forEach(element => {
        var nombre_id = "grafica_"+cont;
        div_graficos.innerHTML += `
        <div id="muestra_datos">
            <h4 id="Pregunta_datos"><b>`+element+`</b></h4>
            <canvas class="graficas_nuevas" id="`+nombre_id+`"></canvas>
        </div>
        `;
        cont++;
    });
    for(var i=0; i<preguntas.length; i++){
        var h = "grafica_"+i;
        if(i===4){
            grafica(h, i, 'bar');
        }else{
            grafica(h, i, 'doughnut');
        }
    }
});