<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/LogoInfonavit.png') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    @vite(['resources/css/style.css', 'resources/css/root.css', 'resources/js/script.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin</title>
    <!-- Imports de tablas -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.1/css/bulma.min.css" rel="stylesheet"
        integrity="sha384-u1DpPo/VC1cCewPdLA1ujElPdm1c/ZVa5MNAV6930PlrYYXhoKH/+hui6tE7szxu" crossorigin="anonymous">
    <link
        href="https://cdn.datatables.net/v/bm/jq-3.7.0/moment-2.29.4/dt-2.2.2/af-2.7.0/b-3.2.2/b-colvis-3.2.2/b-html5-3.2.2/b-print-3.2.2/cr-2.0.4/date-1.5.5/fc-5.0.4/fh-4.0.1/kt-2.12.1/r-3.0.4/rg-1.5.1/rr-1.5.0/sc-2.4.3/sb-1.8.2/sp-2.3.3/sl-3.0.0/sr-1.4.1/datatables.min.css"
        rel="stylesheet" integrity="sha384-8YueiSboWuRA1bQyFRYgZMxiPJXCswhOhBXq+BnTC7YcNg3SY7M//Im3GsZztLhW"
        crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"
        integrity="sha384-VFQrHzqBh5qiJIU0uGU5CIW3+OWpdGGJM9LBnGbuIH2mkICcFZ7lPd/AAtI7SNf7" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"
        integrity="sha384-/RlQG9uf0M2vcTw3CX7fbqgbj/h8wKxw7C3zu9/GxcBPRKOEcESxaxufwRXqzq6n" crossorigin="anonymous">
        </script>
    <script
        src="https://cdn.datatables.net/v/bm/jq-3.7.0/moment-2.29.4/dt-2.2.2/af-2.7.0/b-3.2.2/b-colvis-3.2.2/b-html5-3.2.2/b-print-3.2.2/cr-2.0.4/date-1.5.5/fc-5.0.4/fh-4.0.1/kt-2.12.1/r-3.0.4/rg-1.5.1/rr-1.5.0/sc-2.4.3/sb-1.8.2/sp-2.3.3/sl-3.0.0/sr-1.4.1/datatables.min.js"
        integrity="sha384-eKEPKiCXztYngevfwL+T1R9sNlr77pxH55/cTVUgJGNZkghawmqA6MWVV2IGyE0w" crossorigin="anonymous">
        </script>
    <!-- ---------------- -->
</head>


<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-carousel'></i>
            <span class="text">{{ explode(' ', auth()->user()->name)[0] }}</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Registros</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Usuarios</span>
                </a>
            </li>
            <li>
                <a href="https://boxicons.com/">
                    <i class='bx bx-calculator'></i>
                    <span class="text">Calculadora Linea IV </span>
                </a>
            </li>
            <li>
                <a href="https://boxicons.com/">
                    <i class='bx bx-notepad'></i>
                    <span class="text">Contrato Remodelación</span>
                </a>
            </li>
            <li>
                <a href="https://boxicons.com/">
                    <i class='bx bxs-notepad'></i>
                    <span class="text">Contrato P. de servicios</span>
                </a>
            </li>

        </ul>

        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>

            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <!-- Modo oscuro (si es necesario) -->
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>

            <!-- Perfil con menú desplegable -->
            <div class="relative">
                <button id="profile-btn"
                    class="flex items-center justify-center w-10 h-10 rounded-full focus:outline-none">
                    <img src="./img/mJaimesDev.jpg" class="w-full h-full rounded-full object-cover">
                </button>


                <!-- Dropdown Menu -->
                <div id="dropdown-menu"
                    class="hidden absolute right-0 mt-2 w-52 bg-white border rounded-lg shadow-lg transition-all opacity-0 scale-95">
                    <div class="p-4 border-b">

                        <p class="text-sm font-semibold">
                            {{ auth()->user()->name }}
                        </p>
                        <p class="text-xs text-gray-500">
                            {{ auth()->user()->email }}
                        </p>
                    </div>
                    <ul class="py-2 text-gray-700">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Mi perfil</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Configuración</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Modo oscuro</a></li>
                    </ul>
                    <div class="border-t">
                        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" onclick="document.getElementById('logout-form').submit();"
                            class="block px-4 py-2 text-red-500 hover:bg-gray-100">
                            Cerrar sesión
                        </a>



                    </div>
                </div>
        </nav>
        <!-- NAVBAR -->

        <main>
            <!-- Sección de Dashboard (todo el contenido original) -->
            <div id="dashboard-content">
                <div class="head-title">
                    <div class="left">
                        <h1>Dashboard</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><i class='bx bx-chevron-right'></i></li>
                            <li><a class="active" href="#">Home</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('derecho_habiente.index') }}" class="btn-download">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Formulario</span>
                    </a>

                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bxs-calendar-check'></i>
                        <span class="text">
                            <h3>10</h3>
                            <p>Total Registros</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <h3>2</h3>
                            <p>Usuarios</p>
                        </span>
                    </li>
                    <li>
                        <i class='bx bx-error-circle'></i>
                        <span class="text">
                            <h3>$4</h3>
                            <p>Documentos Incompletos</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Registros Recientes</h3>
                            <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Fecha de inscripción</th>
                                    <th>Datos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="./img/iconseñor.png">
                                        <p>Miguel Jaimes</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status completed">Completo</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="./img/icondama.png">
                                        <p>Sofia Jaimes</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status pending">Incompleto</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Sección de Registros (oculta inicialmente) -->
            <div id="registros-content" class="hidden">
                <div class="rounded-lg mx-auto bg-white p-6 shadow-md">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Lista de Registros</h2>

                    <!-- Contenedor con desplazamiento para el cuerpo -->
                    <div class="overflow-x-auto  overflow-x-hidden overflow-y-hidden">
                        <table id="example"
                            class="min-w-full table-auto border border-gray-300 overflow-hidden rounded-lg">
                            <thead class="bg-[#eeeeee] text-black sticky top-0 z-10">
                                <tr>
                                    <th class="px-6 py-3 text-left w-12">#</th> <!-- Columna de enumeración -->
                                    <th class="px-6 py-3 text-left">NSS</th>
                                    <th class="px-6 py-3 text-left">Estado</th> <!-- Columna de Estado -->
                                    <th class="px-6 py-3 text-left">Apellido Paterno</th>
                                    <th class="px-6 py-3 text-left">Apellido Materno</th>
                                    <th class="px-6 py-3 text-left">Nombre(s)</th>
                                    <th class="px-6 py-3 text-left">CURP</th>
                                    <th class="px-6 py-3 text-left">RFC</th>
                                    <th class="px-6 py-3 text-left">Tipo de Identificación</th>
                                    <th class="px-6 py-3 text-left">Número de Identificación</th>
                                    <th class="px-6 py-3 text-left">Fecha Validez</th>
                                    <th class="px-6 py-3 text-left">Teléfono</th>
                                    <th class="px-6 py-3 text-left">Celular</th>
                                    <th class="px-6 py-3 text-left">Género</th>
                                    <th class="px-6 py-3 text-left">Correo Electrónico</th>
                                    <th class="px-6 py-3 text-left">Estado Civil</th>
                                    <th class="px-6 py-3 text-left">Nombre de la Empresa</th>
                                    <th class="px-6 py-3 text-left">NRPP</th>
                                    <th class="px-6 py-3 text-left">Teléfono Empresa</th>
                                    <th class="px-6 py-3 text-left">Calle</th>
                                    <th class="px-6 py-3 text-left">Colonia</th>
                                    <th class="px-6 py-3 text-left">Código Postal</th>
                                    <th class="px-6 py-3 text-left">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="userTable">
                                <!-- Fila 1 -->
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-4 w-12">1</td>
                                    <td class="px-6 py-4">123456789</td>

                                    <td class="px-6 py-4">
                                        <span
                                            class="status pending bg-green-200 text-green-700 px-3 py-1 rounded-full text-sm">Completo</span>
                                    </td>
                                    <td class="px-6 py-4">González</td>
                                    <td class="px-6 py-4">Pérez</td>
                                    <td class="px-6 py-4">Juan</td>
                                    <td class="px-6 py-4">INE</td>
                                    <td class="px-6 py-4">JUAN123456HDFRNN03</td>
                                    <td class="px-6 py-4">JUAN123456</td>
                                    <td class="px-6 py-4">1234567890</td>
                                    <td class="px-6 py-4">01/01/2025</td>
                                    <td class="px-6 py-4">555-1234</td>
                                    <td class="px-6 py-4">555-5678</td>
                                    <td class="px-6 py-4">M</td>
                                    <td class="px-6 py-4">juan@example.com</td>
                                    <td class="px-6 py-4">Soltero</td>
                                    <td class="px-6 py-4">Ejemplo SA</td>
                                    <td class="px-6 py-4">ABC123456</td>
                                    <td class="px-6 py-4">555-8901</td>
                                    <td class="px-6 py-4">Calle Ficticia 123</td>
                                    <td class="px-6 py-4">Centro</td>
                                    <td class="px-6 py-4">01000</td>
                                    <td class="px-6 py-4 text-center">
                                        <button
                                            class="status pending bg-blue-400 text-white px-3 py-1 rounded-lg text-sm mr-2 hover:shadow-md transition duration-200 cursor-pointer">
                                            Editar
                                        </button>
                                        <button
                                            class="status pending bg-red-200 text-yellow-700 px-3 py-1 rounded-lg text-sm hover:shadow-md transition duration-200 cursor-pointer">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>




            </div>

            <!-- Sección de Usuarios (oculta inicialmente) -->
            <div id="usuarios-content" class="hidden">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-4">Usuarios Registrados</h2>

                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse border border-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="p-3 text-left border">#</th>
                                    <th class="p-3 text-left border">Usuario</th>
                                    <th class="p-3 text-left border">Correo</th>
                                    <th class="p-3 text-left border">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-50">
                                    <td class="p-3 border">1</td>
                                    <td class="p-3 flex items-center gap-3 border">
                                        <img src="./img/mJaimesDev.jpg" class="w-10 h-10 rounded-full object-cover">
                                        <span>Miguel Jaimes</span>
                                    </td>
                                    <td class="p-3 border">mjaimes@example.com</td>
                                    <td class="p-3 border">
                                        <button
                                            class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Ver</button>
                                        <button
                                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Eliminar</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="p-3 border">2</td>
                                    <td class="p-3 flex items-center gap-3 border">
                                        <img src="https://via.placeholder.com/40"
                                            class="w-10 h-10 rounded-full object-cover">
                                        <span>Juan Pérez</span>
                                    </td>
                                    <td class="p-3 border">juan@example.com</td>
                                    <td class="p-3 border">
                                        <button
                                            class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Ver</button>
                                        <button
                                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>

    </section>



    <script src="./js/script.js"></script>
</body>

</html>