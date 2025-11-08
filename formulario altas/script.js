document.addEventListener('DOMContentLoaded', ()=>{
    comprobarCampos();
    
});



function comprobarCampos(){
    let datos = document.getElementsByName('datos');
    let texto = document.createElement('p');
    
    for (const dato of datos) {
        let pattern =  RegExp(dato.pattern);
        
        console.log(dato);
        dato.addEventListener('input', () =>{
            if(!dato.checkValidity()){
                dato.classList.remove('normal');
                dato.classList.add('equivocado');
                texto.id = 'burbuja';
                document.body.appendChild(texto);
                texto.textContent = "Un nombre no puede contener carácteres numéricos.";
                dato.addEventListener('mouseenter', mostrarError);
                dato.addEventListener('mouseleave', ocultarError);
            }else{
                dato.classList.remove('equivocado');
                dato.classList.add('normal');
                dato.removeEventListener('mouseenter', mostrarError);
                dato.removeEventListener('mouseleave', ocultarError);
                texto.style.display = "none";
            }
        })
    }
    function mostrarError(e){
        texto.style.top = (e.clientY - 5) + 'px';
        texto.style.left = (e.clientX + 5) + 'px';
        setTimeout(() => {
            texto.style.display = "block";
        }, "500");
    }
    function ocultarError(){
        texto.style.display = "none";
    }
}