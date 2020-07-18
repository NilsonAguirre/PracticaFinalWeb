const icono_menu = document.querySelector('.icono_menu');
const menu = document.querySelector('.menu-navegacion');
const menua = document.querySelector('.menua');

icono_menu.addEventListener('click', () => {
    menu.classList.toggle("aparecerMenu");
})

window.addEventListener('click', e => {
    if (menu.classList.contains('aparecerMenu') && e.target != menu && e.target != menua && e.target != icono_menu) {
        menu.classList.toggle("aparecerMenu");
    }
})