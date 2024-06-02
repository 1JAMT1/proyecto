const contenedor=document.getElementById('contenedor');
let libros=[];
let cont=0;
fetch('libros.json')
    .then((data) =>{
        return data.json();
    })
    .then((data)=>{
        libros=data;
    })

const mostrar =() =>{
    contenedor.innerHTML=" ";
    const libDivs=libros.map((libro)=>{
        
        const proDiv=document.createElement('div');
        proDiv.classList.add('card-product');
        //div container-img
        const divImg=document.createElement('div');
        divImg.classList.add('container-img');
        const imgLib=document.createElement('img');
        imgLib.src=libro.imagen;
        divImg.appendChild(imgLib);
        const spImg=document.createElement('span');
        spImg.classList.add('discount');
        spImg.textContent=libro.discount;
        //-->inicio div button-group
            const btGroup=document.createElement('div');
            btGroup.classList.add('button-group');
            // span 1
            const sp1=document.createElement('span');
            const i1=document.createElement('i');
            i1.classList.add('fa-regularfa-eye');
            sp1.appendChild(i1);
            //span 2
            const sp2=document.createElement('span');
            const i2=document.createElement('i');
            i2.classList.add('fa-regularfa-heart');
            sp2.appendChild(i2);
            //span 3
            const sp3=document.createElement('span');
            const i3=document.createElement('i');
            i3.classList.add('fa-regularfa-code-compare');
            sp3.appendChild(i3);
            //inserciones
            btGroup.appendChild(sp1);
            btGroup.appendChild(sp2);
            btGroup.appendChild(sp3);
        //--> fin de div button-group
        divImg.appendChild(btGroup);
        proDiv.appendChild(divImg);
        //fin imagen
        //div contenr-card-product
        const divP=document.createElement('div');
        divP.classList.add('content-card-product');

        const divStart=document.createElement('div');
        divStart.classList.add('stars');

        const iStars1=document.createElement('i');
        iStars1.classList.add('fa-solidfa-star');
        divStart.appendChild(iStars1);
        const iStars2=document.createElement('i');
        iStars2.classList.add('fa-solidfa-star');
        divStart.appendChild(iStars2);
        const iStars3=document.createElement('i');
        iStars3.classList.add('fa-solidfa-star');
        divStart.appendChild(iStars3);
        const iStars4=document.createElement('i');
        iStars4.classList.add('fa-solidfa-star');
        divStart.appendChild(iStars4);
        divP.appendChild(divStart);
        const nomLib=document.createElement('h3');
        nomLib.textContent=libro.titulo;
        const spn1=document.createElement('span');
        spn1.classList.add('add-cart');
        const ispn1=document.createElement('i');
        ispn1.classList.add('fa-solidfa-basket-shopping');
        spn1.appendChild(ispn1);
        divP.appendChild(nomLib);
        divP.appendChild(spn1);

        const p1=document.createElement('p');
        p1.classList.add('price');
        p1.textContent=libro.precio;
        divP.appendChild(p1);
        proDiv.appendChild(divP);
        cont=cont+1;
        return proDiv;
    });
    libDivs.forEach(element => {
        contenedor.appendChild(element);
    });
};
const mostrarBt=document.getElementById('mostrarLib');
mostrarBt.addEventListener('click',mostrar);