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

        mostrarDatos();
    });
}

function mostrarDatos(){
    
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
        for (const seccion in data) {
            let usus = data[seccion];
            for (const clave in usus) {
                let th = document.createElement('th');
                th.textContent = clave;
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
            tBody.appendChild(trBody);
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
}

function limpiarCampos(){
    let form = document.getElementById('form');
    //hacer que lso campso se pongan limpios al enviar

}