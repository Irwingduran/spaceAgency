document.addEventListener('DOMContentLoaded', function () {
    // Obtener la fecha de hoy
    var today = new Date().toISOString().split('T')[0]

    // Fijar el valor mínimo del campo de fecha de salida en hoy
    document.getElementById('departure_date').setAttribute('min', today)

    //  // Establezca el valor mínimo del campo de fecha de retorno en la fecha de salida seleccionada
    document
        .getElementById('departure_date')
        .addEventListener('change', function () {
            var selectedDepartureDate = this.value
            document
                .getElementById('return_date')
                .setAttribute('min', selectedDepartureDate)
        })
})



const menu = document.getElementById('menu');
const indicador = document.getElementById('indicador');
const secciones = document.querySelectorAll('.seccion');

let tamañoIndicador = menu.querySelector('a').offsetWidth;
indicador.style.width = tamañoIndicador + 'px';

let indexSeccionActiva;

// Observer
const observer = new IntersectionObserver((entradas, observer) => {
    entradas.forEach(entrada => {
        if (entrada.isIntersecting) {
            // Obtenemos cual es la seccion que esta entrando en pantalla.
            // console.log(`La entrada ${entrada.target.id} esta intersectando`);

            // Creamos un arreglo con las secciones y luego obtenemos el index del la seccion que esta en pantalla.
            indexSeccionActiva = [...secciones].indexOf(entrada.target);
            indicador.style.transform = `translateX(${tamañoIndicador * indexSeccionActiva}px)`;
        }
    });
}, {
    rootMargin: '-80px 0px 0px 0px',
    threshold: 0.2
});

// Agregamos un observador para el hero.
observer.observe(document.getElementById('hero'));

// Asignamos un observador a cada una de las secciones
secciones.forEach(seccion => observer.observe(seccion));

// Evento para cuando la pantalla cambie de tamaño.
const onResize = () => {
    // Calculamos el nuevo tamaño que deberia tener el indicador.
    tamañoIndicador = menu.querySelector('a').offsetWidth;

    // Cambiamos el tamaño del indicador.
    indicador.style.width = `${tamañoIndicador}px`;

    // Volvemos a posicionar el indicador.
    indicador.style.transform = `translateX(${tamañoIndicador * indexSeccionActiva}px)`;
}

window.addEventListener('resize', onResize);
