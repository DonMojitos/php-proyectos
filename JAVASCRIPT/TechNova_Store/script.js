window.addEventListener('load', ()=>{
    let url = 'http://localhost:3000/productos';
    let form = document.getElementById('form');
    let btnVerProductos = document.getElementById("mostrarProductos");
    
    
    form.addEventListener('submit', enviarProducto);
    btnVerProductos.addEventListener('click', crearTabla);

    function enviarProducto(e){
        e.preventDefault();
        let producto = {
            "nombre": form.nombre.value,
            "precio": form.precio.value,
            "categoria": form.categoria.value,
            "stock": form.stock.value,
        }
        fetch(url, {
            method: 'POST',
            body: JSON.stringify(producto),
        })
        form.nombre.value = '';
        form.precio.value = '';
        form.categoria.value = '';
        form.stock.value = '';
        form.nombre.value = '';
        if(document.getElementsByClassName('tabla').length > 0){
            crearTabla();
        }
    }

    async function crearTabla(){
        let tabla = document.createElement('table');
        tabla.classList.add('tabla');
        let tHeader = document.createElement('thead');
        let tBody = document.createElement('tbody');
        if(document.getElementsByClassName('tabla').length > 0){
            let tablas = document.getElementsByClassName('tabla');
            for (const tablaRep of tablas) {
                tablaRep.remove()
            }
        }
        const response = await fetch(url);
        let data = await response.json();
        let trHeader = document.createElement('tr');
        let c = 0;
        for (const clave in data) {            
            const producto = data[clave];
            let tr = document.createElement('tr');
            let tdEdit = document.createElement('td');
            let tdBorrar = document.createElement('td');
            tdEdit.innerHTML = '<button>Editar</button';
            tdBorrar.innerHTML = '<button>Eliminar</button';
            for (const atributo in producto) {
                const valor = producto[atributo];
                let td = document.createElement('td');
                
                td.innerHTML = valor;
                
                tr.appendChild(td);
                
                if(c < 1){
                    let th = document.createElement('th');
                    let extra = document.createElement('th');
                    extra.colSpan = 2;
                    extra.innerHTML = 'interaccion';
                    th.innerHTML = atributo;
                    trHeader.appendChild(th);
                    if(th.innerHTML == 'stock'){
                        trHeader.appendChild(extra);
                    }
                }
            }
            tr.appendChild(tdEdit);
            tr.appendChild(tdBorrar);
            tBody.appendChild(tr);
            c++;
        }
        tHeader.appendChild(trHeader);
        tabla.appendChild(tHeader);
        tabla.appendChild(tBody);
        document.body.appendChild(tabla);
    }



});