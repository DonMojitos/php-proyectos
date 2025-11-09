document.addEventListener('DOMContentLoaded', ()=>{
    comprobarFormulario();
});

function comprobarFormulario(){
    let form = document.getElementById('form');
    let datos = document.getElementsByName('datos[]');
    let texto = document.createElement('p');
    texto.id = 'burbuja';
    let mensaje;
    let tiempoEnInput = null;
    
    for (const dato of datos) {
        let errorVacio = document.createElement('p');
        errorVacio.classList.add('error');
        errorVacio.textContent = 'Este campo no puede estar vacío.';
        dato.addEventListener('input', () =>{
            
            if(!dato.checkValidity() || dato.value == ''){
                dato.classList.remove('normal');
                dato.classList.add('equivocado');

            }else{
                dato.classList.remove('equivocado');
                dato.classList.add('normal');
                
                if(dato.id == 'dni' && comprobarDNI() == false){
                    dato.classList.remove('normal');
                    dato.classList.add('equivocado');
                }else{
                    if(dato.classList.contains('equivocado')){
                        dato.classList.remove('equivocado');
                        dato.classList.add('normal');
                    }
                }
            }
            if(dato.classList.contains('equivocado')){
                document.body.appendChild(texto);
                dato.addEventListener('mouseenter', mostrarError);
                dato.addEventListener('mouseleave', ocultarError);
                if(dato.value == ''){
                    dato.insertAdjacentElement('afterend',errorVacio);
                }
            }else{
                texto.style.display = "none";
                dato.removeEventListener('mouseenter', mostrarError);
                dato.removeEventListener('mouseleave', ocultarError);
            }
            
            if(dato.nextElementSibling == errorVacio && dato.value != ''){
                errorVacio.style.display = 'none';
            }else{
                errorVacio.style.display = 'block';
            }
        });
        
        form.addEventListener('submit', e =>{
            
            if(!((dato.checkValidity() && dato.classList.contains('normal')) && dato.value != '')){
                e.preventDefault();
                
                if(dato.value == ''){
                    dato.classList.remove('normal');
                    dato.classList.add('equivocado');
                    if(!(dato.nextElementSibling == errorVacio)){
                        dato.insertAdjacentElement('afterend',errorVacio);
                        errorVacio.style.display = 'block';
                    }else{
                        errorVacio.style.display = 'block'; //tienes que insertar el elemento pq al ser inputs no aceptan appendChild (son elementos de void), y por eso hay q insertarlo
                    }
                }
            }else{
                
            }
            if(dato.id == 'nombre'){
                dato.focus();
            }
            dato.removeEventListener('submit', e);
        })
        
        form.addEventListener('reset', e =>{
            dato.classList.remove('equivocado');
            dato.classList.add('normal');
            
            dato.removeEventListener('mouseenter', mostrarError);
            dato.removeEventListener('mouseleave', ocultarError);

            errorVacio.style.display = 'none';

            if(dato.id == 'nombre'){
                dato.focus();
            }

            dato.removeEventListener('reset', e);
        })
    }
    

    function comprobarDNI(){
        const letrasDNI = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
        const dni = document.getElementById('dni');
        
        let valorDNI = dni.value.toUpperCase();
        let primerCaracter = valorDNI.slice(0, 1);
        let ultimoCaracter = valorDNI.slice(8, 9);
        if(primerCaracter == 'X' || primerCaracter == 'Y' || primerCaracter == 'Z'){
            switch (primerCaracter) {
                case 'X':
                    primerCaracter = 0;
                    break;
                case 'Y':
                    primerCaracter = 1;
                    break;
                case 'Z':
                    primerCaracter = 2;
                    break;
            }
            let valorNIESinLetra = primerCaracter+valorDNI.slice(1, 8);
            
            if(ultimoCaracter == letrasDNI[valorNIESinLetra % 23]){
                return true;
            }else{
                return false;
            }
        }else{
            let valorDNISinLetra = valorDNI.slice(0, 8);
            
            console.log(valorDNISinLetra)
            if(ultimoCaracter == letrasDNI[valorDNISinLetra % 23]){
                return true;
            }else{
                return false;
            }
        }
    }

    function mostrarError(e){
        switch(e.target.id){
            case 'nombre':
                mensaje = "No puede contener carácteres numéricos ni tener menos de 2 carácteres.";
                break;
            case 'apellidos':
                mensaje = "No puede contener carácteres numéricos ni tener menos de 2 carácteres.";
                break;
            case 'dni':
                mensaje = "DNI: 8 números 1 letra, NIF: 1 letra (X, Y,Z) 7 números 1 letra y ser válido.";
                break;
            case 'direccion':
                mensaje = "No se admiten caracteres especiales como ' \" ! ? ª. Entre otros.";
                break;
            case 'email':
                mensaje = "Debe de serguir la estructura: nombre@dominio.extension";
                break;
            default:
                mensaje = '';
                break;
        }

        texto.textContent = mensaje;
        texto.style.top = (e.clientY - 5) + 'px';
        texto.style.left = (e.clientX + 5) + 'px';
        clearTimeout(tiempoEnInput);
        tiempoEnInput = setTimeout(() => {
            
            texto.style.display = "block";
        }, "550");
    }

    function ocultarError(){
        clearTimeout(tiempoEnInput);
        texto.style.display = "none";
    }
}
