const imagenes = document.querySelectorAll('.img-galeria')
const cbody = document.querySelectorAll('.card-body')
const imagenesLight = document.querySelector('.agregar-imagen')
const hamburguer1 = document.querySelector('.icono_menu');
const contenedorLight = document.querySelector('.imagen-light')
const caras1 = document.querySelectorAll('.cara1')
const caras2 = document.querySelectorAll('.cara2')
const ecards = document.querySelectorAll('.ecard')
const cards = document.querySelectorAll('.card')


imagenes.forEach(imagen => {
    imagen.addEventListener('click', () => {
        aparecerImagen(imagen.getAttribute('src'));
    })

})

cbody.forEach(bodyc => {
    bodyc.addEventListener('click', () => {

        caras1.forEach((cara1) => {
            cara1.classList.toggle('Cdesaparece');
            cara1.classList.toggle('Caparece');
        });
        caras2.forEach((cara2) => {
            cara2.classList.toggle('Cdesaparece');
            cara2.classList.toggle('Caparece');
        });
        ecards.forEach((ecard) => {
            ecard.classList.toggle('d-none');
            ecard.classList.toggle('d-block');
        });
    })
})

contenedorLight.addEventListener('click', (e) => {
    if (e.target !== imagenesLight) {
        contenedorLight.classList.toggle('show');
        imagenesLight.classList.toggle('showImage');
        hamburguer1.style.opacity = '1';
    }

})

const aparecerImagen = (imagen) => {
    imagenesLight.src = imagen;
    contenedorLight.classList.toggle('show');
    imagenesLight.classList.toggle('showImage');
    hamburguer1.style.opacity = '0';
}