const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
const dashboardContent = document.getElementById('dashboard-content');
const registrosContent = document.getElementById('registros-content');
const usuariosContent = document.getElementById('usuarios-content');
const calculadoraContent = document.getElementById('calculadora-content');

// Función para mostrar la sección según el nombre
function showSection(section) {
    // Ocultar todas las secciones
    dashboardContent.classList.add('hidden');
    registrosContent.classList.add('hidden');
    usuariosContent.classList.add('hidden');
    calculadoraContent.classList.add('hidden');

    // Mostrar la sección correspondiente
    if (section === 'dashboard') {
        dashboardContent.classList.remove('hidden');
    } else if (section === 'registros') {
        registrosContent.classList.remove('hidden');
    } else if (section === 'usuarios') {
        usuariosContent.classList.remove('hidden');
    } else if (section === 'calculadoras') {
        calculadoraContent.classList.remove('hidden');
    }
}

// Función para agregar la clase 'active' al botón correspondiente
function setActiveButton(section) {
    allSideMenu.forEach(item => {
        item.parentElement.classList.remove('active'); // Eliminar 'active' de todos los botones
    });

    const activeButton = Array.from(allSideMenu).find(item => item.textContent.trim().toLowerCase() === section);
    if (activeButton) {
        activeButton.parentElement.classList.add('active'); // Añadir 'active' al botón correspondiente
    }
}

// Recuperar la sección activa desde localStorage si existe
const activeSection = localStorage.getItem('activeSection');
if (activeSection) {
    showSection(activeSection);
    setActiveButton(activeSection); // Asegurarse de que el botón correspondiente esté activo
} else {
    // Si no hay sección activa en localStorage, mostramos el dashboard por defecto
    showSection('dashboard');
    setActiveButton('dashboard'); // Activar el botón de Dashboard por defecto
}

// // Cambiar contenido del main dependiendo de la opción seleccionada
// allSideMenu.forEach(item => {
//     const li = item.parentElement;

//     item.addEventListener('click', function (e) {
//         e.preventDefault(); // Evitar el comportamiento por defecto

//         // Eliminar la clase 'active' de todas las opciones del sidebar
//         allSideMenu.forEach(i => {
//             i.parentElement.classList.remove('active');
//         });

//         // Agregar la clase 'active' a la opción seleccionada
//         li.classList.add('active');

//         // Guardar la sección activa en localStorage
//         const section = item.textContent.trim().toLowerCase();
//         localStorage.setItem('activeSection', section);

//         // Mostrar la sección correspondiente
//         showSection(section);
//     });
// });

allSideMenu.forEach(item => {
    const li = item.parentElement;

    item.addEventListener('click', function (e) {
        // Si el enlace tiene un href válido (no es "#"), permitimos la navegación
        if (item.getAttribute('href') !== "#") {
            return; // Deja que el navegador maneje la navegación normalmente
        }

        e.preventDefault(); // Evitar el comportamiento por defecto solo para secciones internas

        // Eliminar la clase 'active' de todas las opciones del sidebar
        allSideMenu.forEach(i => {
            i.parentElement.classList.remove('active');
        });

        // Agregar la clase 'active' a la opción seleccionada
        li.classList.add('active');

        // Guardar la sección activa en localStorage
        const section = item.textContent.trim().toLowerCase();
        localStorage.setItem('activeSection', section);

        // Mostrar la sección correspondiente
        showSection(section);
    });
});


// Toggle Sidebar
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
});


const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
    if (this.checked) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
})

// Script para añadir el número automáticamente a la columna de enumeración
const rows = document.querySelectorAll('#userTable tr');

rows.forEach((row, index) => {
    const numberCell = row.querySelector('td:first-child'); // Selecciona la primera celda de la fila
    numberCell.textContent = index + 1; // Asigna el número de fila
});

const profileBtn = document.getElementById('profile-btn');
const dropdownMenu = document.getElementById('dropdown-menu');

profileBtn.addEventListener('click', function (event) {
    event.preventDefault();
    dropdownMenu.classList.toggle('hidden');

    if (!dropdownMenu.classList.contains('hidden')) {
        dropdownMenu.classList.remove('opacity-0', 'scale-95');
        dropdownMenu.classList.add('opacity-100', 'scale-100');
    } else {
        dropdownMenu.classList.remove('opacity-100', 'scale-100');
        dropdownMenu.classList.add('opacity-0', 'scale-95');
    }
});

document.addEventListener('click', function (event) {
    if (!profileBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden', 'opacity-0', 'scale-95');
        dropdownMenu.classList.remove('opacity-100', 'scale-100');
    }
});

/* tablas */
$(document).ready(function () {
    $('#example').DataTable({
        responsive: false,
        scrollX: true,
        scrollY: true,
        paging: true,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
        pageLength: 5,
        order: [[0, 'asc']],
        language: {
            url: "https://cdn.datatables.net/plug-ins/2.2.2/i18n/es-ES.json"
        },
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                text: 'Copiar',
                className: 'bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600',
            },
            {
                extend: 'excelHtml5',
                text: 'Exportar a Excel',
                className: 'bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600',
            },
            {
                extend: 'csvHtml5',
                text: 'Exportar a CSV',
                className: 'bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600',
            },
            {
                extend: 'pdfHtml5',
                text: 'Exportar a PDF',
                className: 'bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600',
                orientation: 'landscape',
                pageSize: 'A4',
                customize: function (doc) {
                    doc.styles.title = {
                        fontSize: 16,
                        bold: true,
                        alignment: 'center'
                    };
                }
            },
            {
                extend: 'print',
                text: 'Imprimir',
                className: 'bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600',
            }
        ]
    });

    // Reducir el espacio entre filas
    $('#example tbody tr').css({
        'line-height': '1',
        'padding': '5px 0'
    });
});