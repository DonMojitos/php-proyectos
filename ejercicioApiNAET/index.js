window.addEventListener('load', () =>{

    let miDiv = document.getElementById('datos');
    let dialog= document.createElement('dialog');
    dialog.open = true;

    let infoDialog = document.createElement('p');
    infoDialog.style.display = 'inline-block';
    infoDialog.textContent = 'Dime el numero del objeto que quieres ver los datos: ';

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
        console.log('Hola');
        fetch('https://servicios.ine.es/wstempus/js/ES/DATOS_TABLA/50902?nult=5')
        .then((response) =>{
            if(response.ok){
                /* 
                console.log(response); */
                return response.json();
            }
        })
        .then(data => {
            let tabla = document.createElement('table');
            let tr = document.createElement('tr');
            let td = document.createElement('td');
            let numero = inputNumeroObjeto.value;
            const seleccionado = data[numero];
            console.log(seleccionado)

            for (const claves in seleccionado) {
                
                const element = seleccionado[claves];
                console.log(element);
                
            }
            
        });
    }
    boton.addEventListener("click", empezar);

})
