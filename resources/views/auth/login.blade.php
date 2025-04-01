<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="icon" href="{{ asset('images/LogoInfonavit.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

    @vite(['resources/css/login.css'])
</head>

<body class="flex items-center justify-center min-h-screen relative p-4">
    <!-- Loader -->
    <div id="loader" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-white z-50">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-red-500"></div>
    </div>

    <div class="formlop p-8 rounded-1xl shadow-lg flex w-[700px] h-[400px] relative hidden md:flex" id="content">
        <!-- Sección Izquierda (Oculta en móviles) -->
        <div class="w-1/2 flex-col items-center justify-center p-4 hidden md:flex">
            <img src="{{ asset('images/iconDesk.png') }}" alt="Imagen" class="w-62 h-52 object-cover rounded-lg" />
            <p class="mt-4 text-center text-gray-600">
                Bienvenido a tu App. <br>Inicia sesión con tu Identificacion.
            </p>
        </div>

        <!-- Sección Derecha (Siempre visible) -->
        <div class="w-full md:w-1/2 flex flex-col justify-center p-4">
            <div class="flex justify-center mb-4 text-3xl font-bold text-red-500 whitespace-nowrap">
                INICIAR SESIÓN
            </div>
            <form action="{{ route('auth.authenticate') }}" method="POST" id="loginForm">
                @csrf
                <input type="email" placeholder="Ingrese su Identificacion:"
                    class="w-full px-4 py-2 mb-3 border focus:outline-none focus:ring-2 focus:ring-blue-500" required
                    id="email" name="email" />

                <div class="relative w-full">
                    <input type="password" placeholder="Contraseña"
                        class="w-full px-4 py-2 mb-3 border focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required id="password" name="password" />
                    <button type="button" onclick="togglePassword()"
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-600 hover:text-gray-900">
                        <i id="toggleIcon" class="fas fa-eye"></i>
                    </button>
                </div>

                <button type="submit"
                    class="w-full bg-[#ff0000] text-white py-2 rounded-lg hover:bg-blue-500 hover:shadow-md">
                    Iniciar sesión
                </button>
            </form>
            <div class="mt-4 text-sm text-center">
                <a href="{{ route('resetpass') }}" class="text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener("load", function() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("content").classList.remove("hidden");
        });

        function togglePassword() {
            let passwordField = document.getElementById("password");
            let toggleIcon = document.getElementById("toggleIcon");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>

</body>

</html>
