window.addEventListener('load', ()=>{
    enviarDatos();
})

function Usuario(datos){
    let usu = {
        "nombre": datos.nombre.value,
        "apellidos": datos.apellidos.value,
        "dni": datos.dni.value,
        "direccion": datos.direccion.value,
        "email": datos.email.value,
    }
    return usu;
}

function enviarDatos(){
    let form = document.getElementById('form');
    
    form.addEventListener("submit", async function(e){
        e.preventDefault();
        let url = "http://localhost:3000/usuarios";

        let usu = new Usuario(form);
        
       try {
            // Hacemos el POST al JSON Server
            await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(usu)
            });
            
        } catch (error) {
            console.error('Error enviando datos:', error);
        }   
        
        
    });
}

function mostrarDatos(e){
    
    let verTabla = document.getElementById('mostrarUsus');
    let tabla = document.createElement('table');
    let div = document.getElementById('contenedorForm');

    let tHead = document.createElement('thead');
    let tBody = document.createElement('tbody');
    let trHead = document.createElement('tr');
    tabla.classList.add('tablaUsus');
    tabla.id = 'tablaUsus';
    
    let url = "http://localhost:3000/usuarios";
    fetch(url, {
        method: "GET",
        headers: {
            'Content-Type': 'application/json'
        }
    }).then(res => res.json())
    .then(data => {
        if(data.length < 1){
            return;
        }
        for (const seccion in data) {
            let usus = data[seccion];
            for (const clave in usus) {
                let th = document.createElement('th');
                th.innerHTML = clave;
                trHead.appendChild(th);
            }
            break;
        }
        
        for (const clave in data) {
            dato = data[clave];
            let trBody = document.createElement('tr');
            for (const atributo in dato) {
                const valor = dato[atributo];
                let td = document.createElement('td');
                td.textContent = valor;
                trBody.appendChild(td);
            }
            let tdEdit = document.createElement('td');
            tdEdit.classList.add('edit');
            let tdDel = document.createElement('td');
            tdDel.classList.add('del');
            tdEdit.innerHTML = 'Editar';
            tdDel.innerHTML = 'Borrar';
            trBody.appendChild(tdEdit);
            
            trBody.appendChild(tdDel);
            tBody.appendChild(trBody);
            tdEdit.addEventListener('click', editarFila);
            tdDel.addEventListener('click', borrarFila);
        }
        
        tHead.appendChild(trHead);
        
        tabla.appendChild(tHead);
        tabla.appendChild(tBody);
        
    })
    .catch(err => console.log(err));
    
    let antiguaTabla = document.getElementById('tablaUsus');

    if(antiguaTabla == null){
        div.appendChild(tabla);
    }else{
        antiguaTabla.remove();
        div.appendChild(tabla);
    }

    limpiarCampos();
    verTabla.remove()
}

function limpiarCampos(){
    let form = document.getElementById('form');
    //hacer que lso campso se pongan limpios al enviar

    for (const campo of form) {
        if(campo.type != 'submit'){
            campo. value = '';
        }
    }
}

function editarFila(){
    let form = document.getElementById('form');
   
    let inputsForm = form.getElementsByTagName('input');
    console.log('pulsado desde editar')
    const tdClicked = e.target;
    
    let trEditando = tdClicked.parentNode;
    let tds = trEditando.children;

    tds[0].classList.add('tdId');

    let names = [];
    for (const clave in inputsForm) {            
        let name = inputsForm[clave].name;
        names.push(name);
    }
    let posicion = 0;
    for (const td of tds) {
        let info = td.textContent;
        
        td.classList.add('editando');
        
        if(td.classList == 'editando'){
            console.log(names[posicion]);
            td.innerHTML = `<input type="text" name="${names[posicion]}"></input>`;
            td.firstChild.value = info;
            posicion++;
        }
    }

    let contenedor = document.getElementById('contenedorForm');
    let divSecionTablaBotones = document.createElement('div');
    divSecionTablaBotones.id = 'contenedorTablaBotones';
    let tabla = document.getElementById('tablaUsus')
    let aceptar = document.createElement('input');
    let cancelar = document.createElement('input');
    let divBotones = document.createElement('div');
    divBotones.id = 'botones';
    aceptar.classList.add('aceptar');
    cancelar.classList.add('cancelar');

    aceptar.type = 'button'; 
    cancelar.type = 'button'; 
    aceptar.value = 'Aceptar'; 
    cancelar.value = 'Cancelar'; 

    divBotones.appendChild(aceptar);
    divBotones.appendChild(cancelar);

    aceptar.addEventListener('click', aceptarCambios);
    cancelar.addEventListener('click', cancelarCambios);

    divSecionTablaBotones.appendChild(tabla);
    divSecionTablaBotones.appendChild(divBotones)
    contenedor.appendChild(divSecionTablaBotones);
   
}

function aceptarCambios(){
    console.log('pulsado desde aceptar');
    let botones = document.getElementById('botones');
    let tds = document.querySelectorAll('.editando');
    for (const td of tds) {
        if(td.classList == 'editando'){
            td.textContent = td.firstChild.value;
        }
    }
    let id = tds[0].textContent;
    let url = `http://localhost:3000/usuarios/${id}`;

    let usuMod = {
        "nombre": tds[1].textContent,
        "apellidos": tds[2].textContent,
        "dni": tds[3].textContent,
        "direccion": tds[4].textContent,
        "email": tds[5].textContent,
    }
    
    fetch(url, {
        method: 'PATCH',
        body: JSON.stringify(usuMod)
    })

    botones.remove()
}

function cancelarCambios(){
    console.log('pulsado desde cancelar');

    let botones = document.getElementById('botones');
    let tds = document.querySelectorAll('.editando');
    let id = '';
    for (const td of tds) {
        if(td.classList == 'tdId editando'){
            id = td.textContent;
        }
    }
    let url = `http://localhost:3000/usuarios/${id}`;
    try {
        fetch(url, {
            method: 'GET'
        })
        .then(res => res.json())
        .then(data =>{
            //console.log(data)
            for (const td of tds) {
                console.log()
                if(td.classList == 'editando'){
                    console.log('Input: ' + td.firstChild.name);
                }
            }
            for (const clave in data) {
                const valor = data[clave];
                console.log('Clave: ' + clave);
                for (const td of tds) {
                    if(td.classList == 'editando' && td.firstChild.name == clave){
                        td.textContent = valor;
                    }
                }
            
            }
        });
    } catch (error) {
        console.log(error)
    }

    botones.remove()
}

async function borrarFila(e){
    console.log('pulsado desde borrar');
    const tdClicked = e.target;
    let trSeleccionado = tdClicked.parentNode;
    let id = trSeleccionado.firstChild.textContent;
    let url = `http://localhost:3000/usuarios/${id}`;

    try {
        const datoBorrar = await fetch(url, {
            method: 'DELETE'
        });
    } catch (error) {
        console.log(error);
    }
    trSeleccionado.remove();
}