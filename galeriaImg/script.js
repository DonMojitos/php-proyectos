window.addEventListener('load', ()=>{

    let contenedor = document.createElement('div');
    contenedor.id = 'contenedor';
    let tabla = document.createElement('table');
    tabla.id = 'tabla';
    let script = document.getElementById('script');
    let arrSrc = [];
    fetch('https://dog.ceo/api/breeds/image/random/8')
    .then(res =>{
        if(res.ok){
            return res.json();
        }
    })
    .then(data => {
        
        for (const clave in data) {
            arrSrc.push(data[clave]);
        }
        arrSrc.pop();
        crearTabla();
    });

    function crearTabla(){
        let tr = document.createElement('tr');
        let contador = 0;
        for (const element of arrSrc[0]) {
           
            let img = document.createElement('img');
            img.src = element;
            let td = document.createElement('td');
            img.addEventListener('mouseenter', zoomInFoto);
            img.addEventListener('mouseleave', zoomOutFoto);
            img.addEventListener('click', imagenAumentada);

            td.appendChild(img);
            
            tr.appendChild(td);
            contador++;

            if(contador % 5 == 0){
                tabla.appendChild(tr);
                tr = document.createElement('tr');
            }
            console.log(tr.children);
            if(tr.children.length > 0){
                tabla.appendChild(tr);
            }
        }
        

        contenedor.appendChild(tabla);
        script.before(contenedor);
    }

    function zoomInFoto(e){
        e.target.style.width = "300px";
        e.target.style.height = "300px";
        e.target.style.transition = "all .2s ease"
        
    }
    function zoomOutFoto(e){
        e.target.style.width = "150px";
        e.target.style.height = "150px";
        
    }
    function imagenAumentada(e){
        let imgGrande = document.createElement('img');
        imgGrande.src = e.target.src;
        imgGrande.style.margin = '0 auto';
        imgGrande.style.width = '500px';
        imgGrande.style.height = '500px';
        let dialog = document.createElement('dialog');
        dialog.open = true;
        dialog.style.width = '100%';
        dialog.style.height = '100%';
        contenedor.before(dialog);
        dialog.style['background-color'] = 'rgba(0,0,0,.5)';
        dialog.appendChild(imgGrande);
        setTimeout(() => {
            dialog.open = false;
            dialog.remove();
        }, 2000);
    }
})
