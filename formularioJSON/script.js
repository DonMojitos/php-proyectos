window.addEventListener('load', ()=>{
    enviarDatos();
})

function Usuario(){
    let nombre = document.getElementById('nombre');
    let apellidos = document.getElementById('apellidos');
    let dni = document.getElementById('dni');
    let direccion = document.getElementById('direccion');
    let email = document.getElementById('email');
    console.log(nombre);
    console.log(apellidos);
    let usu = {
        "nombre": nombre.value,
        "apellidos": apellidos.value,
        "dni": dni.value,
        "direccion": direccion.value,
        "email": email.value,
    }

    console.log(nombre);
    return usu;
}

function enviarDatos(){
    let enviar = document.getElementById('enviar');

    enviar.addEventListener("submit", e =>{
        e.preventDefault();
        
        let usu = new Usuario();

        console.log(usu);
    })

    


}