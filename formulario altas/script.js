document.addEventListener('DOMContentLoaded', ()=>{
    comprobarCampos();
});

function comprobarCampos(){
    let esValido = false;

    let datos = document.getElementsByName('datos');

    let expRegs = {};

    let arrDatos = [];

    for (const dato of datos) {
        expRegs[dato.id] = `/${dato.pattern}/`;
        
        arrDatos.push(dato.value);
    }

   //console.log(expRegs[nombre].test(dato.value));


    console.log(arrDatos);


    console.log(expRegs);
}