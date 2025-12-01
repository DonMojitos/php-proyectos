window.addEventListener('load', () =>{

    let miDiv = document.getElementById('datos');
    let dialog= document.createElement('dialog');
    dialog.open = true;

    let infoDialog = document.createElement('p');
    infoDialog.style.display = 'inline-block';
    infoDialog.textContent = 'Dime el número del objeto que quieres ver los datos: ';

    let inputNumeroObjeto = document.createElement('input');
    inputNumeroObjeto.type = 'number';
    inputNumeroObjeto.style.marginLeft = '20px';
    inputNumeroObjeto.name = 'numero';

    let boton = document.createElement('input')
    boton.type = 'button';
    boton.value = 'Completar';
    
    dialog.appendChild(infoDialog);
    dialog.appendChild(inputNumeroObjeto);
    dialog.appendChild(boton);
    miDiv.appendChild(dialog);

    function empezar(){
        
        fetch('https://servicios.ine.es/wstempus/js/ES/DATOS_TABLA/50902?nult=5')
        .then((response) =>{
            if(response.ok){
                return response.json();
            }
        })
        .then(data => {
            //console.log(data[numero])
            let numero = inputNumeroObjeto.value;
            const seleccionado = data[numero];
            //console.log(seleccionado)

            let tabla = document.createElement('table');
            tabla.id = 'tabla';

            let tbody = document.createElement('tbody');
            let thead = document.createElement('thead');

            let trHeader = document.createElement('tr');
            let trBody = document.createElement('tr');
            for (const clave in seleccionado) {
                //console.log(clave);
                let th = document.createElement('th');
                th.textContent = clave;
                trHeader.appendChild(th);
                
                const valor = seleccionado[clave];

                let td = document.createElement('td');
                td.textContent = valor;
                trBody.appendChild(td);

                

                if(valor instanceof Array){
                    td.textContent = '';
                    let noPrimitivo = valor;
                    for (const claveData in noPrimitivo) {
                        const subValor = noPrimitivo[claveData];
                        console.log(subValor)
                        for (const subObjeto in subValor) {
                            //console.log(subObjeto)
                            const element = subValor[subObjeto];
                            //console.log(element)
                            td.innerHTML += `<b>${subObjeto}</b>: ${element}. `;
                        }
                    }
                }
                
            }
            let td = document.createElement('td');
            
            let bNegri = document.createElement('button');
            bNegri.id = 'negrita';
            bNegri.name = 'negrita';
            bNegri.innerHTML = 'Poner de Negrita';
            td.appendChild(bNegri);
            

            

            bNegri.addEventListener('click', e =>{
                let fila = e.target.parentNode.parentNode;

                let tds = fila.getElementsByTagName('td');
                for (const element of tds) {
                    element.style.fontWeight = 'bold';
                }
            })

            trBody.appendChild(td);

            tbody.appendChild(trBody);
            thead.appendChild(trHeader);

            tabla.appendChild(thead);
            tabla.appendChild(tbody);
            miDiv.appendChild(tabla);
        });
    }
    boton.addEventListener("click", empezar);
})
