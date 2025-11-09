document.addEventListener('DOMContentLoaded', ()=>{
    comprobarCampos();
    
});

function comprobarDNI(){
    const letrasDNI = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    const dni = document.getElementById('dni');

    let valorDNI = dni.value;
    let valorDNISinLetra = valorDNI.slice(0, 8);
    let ultimoCaracter = valorDNI.slice(8, 9).toUpperCase();
    console.log(valorDNISinLetra)
    if(ultimoCaracter == letrasDNI[valorDNISinLetra % 23]){
        alert('bien')
    }else{
        alert('mal')
    }
    
}

function comprobarCampos(){
    let datos = document.getElementsByName('datos');
    let texto = document.createElement('p');
    let mensaje;
    texto.id = 'burbuja';
    
    for (const dato of datos) {
        dato.addEventListener('input', () =>{
            
            if(!dato.checkValidity()){
                dato.classList.remove('normal');
                dato.classList.add('equivocado');
                
                document.body.appendChild(texto);
                
                dato.addEventListener('mouseenter', mostrarError);
                dato.addEventListener('mouseleave', ocultarError);
                
                
            }else{
                
                dato.classList.remove('equivocado');
                dato.classList.add('normal');

                dato.removeEventListener('mouseenter', mostrarError);
                dato.removeEventListener('mouseleave', ocultarError);
                
                texto.style.display = "none";
                dato.addEventListener('change', comprobarDNI);
                
            }
        });
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

        setTimeout(() => {
            texto.style.display = "block";
        }, "550");
    }

    function ocultarError(){
        texto.style.display = "none";
    }
}