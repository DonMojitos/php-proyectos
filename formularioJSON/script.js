window.addEventListener('load', ()=>{
    enviarDatos();
})

function Usuario(){
    let nombre = document.getElementById('nombre');
    let apellidos = document.getElementById('apellidos');
    let dni = document.getElementById('dni');
    let direccion = document.getElementById('direccion');
    let email = document.getElementById('email');
    let usu = {
        "nombre": nombre.value,
        "apellidos": apellidos.value,
        "dni": dni.value,
        "direccion": direccion.value,
        "email": email.value,
    }
    return usu;
}

function enviarDatos(){
    let enviar = document.getElementById('enviar');
    enviar.addEventListener("submit", async function(e){
        e.preventDefault();
        let url = "http://localhost:3000/usuarios";

        let usu = new Usuario();
        
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
        pintarTabla();
    });
    
}

function pintarTabla(){
    let tabla = document.createElement('table');
    let tHead = document.createElement('thead');
    let tBody = document.createElement('tbody');

    let datos = document.getElementsByName('datos[]');

    for (const dato of datos) {
        let td = document.createElement('td');
        let th = document.createElement('th');
        let tr = document.createElement('tr');

        th.textContent = dato.id;
        tr.appendChild(th);
        tHead.appendChild(tr);

        tabla.appendChild(tHead);
    }
    document.body.appendChild(tabla);
}