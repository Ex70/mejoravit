<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recuperar Contraseña</title>
    <link rel="icon" href="./img/LogoInfonavit.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    @vite(['resources/css/login.css'])
</head>

<body class="flex items-center justify-center min-h-screen relative">
    <!-- Loader -->
    <div id="loader" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-white z-50">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-red-500"></div>
    </div>

    <div class="formlop p-8 rounded-1xl shadow-lg flex w-[700px] h-[400px] relative hidden" id="content">

        <!-- Sección Izquierda -->
        <div class="w-1/2 flex flex-col items-center justify-center p-4">
            <img src="{{ asset('images/iconDesk.png') }}" alt="Imagen" class="w-62 h-52 object-cover rounded-lg" />
            <p class="mt-4 text-center text-gray-600">
                Ingresa tu correo y te enviaremos un enlace para restablecer tu contraseña.
            </p>
        </div>

        <!-- Sección Derecha -->
        <div class="w-1/2 flex flex-col justify-center p-4">
            <div class="flex justify-center mb-4 text-3xl font-bold text-red-500">
                RECUPERAR CONTRASEÑA
            </div>
            <form action="#" method="POST" id="recoveryForm">
                <input type="email" placeholder="Ingrese su correo electrónico"
                    class="w-full px-4 py-2 mb-3 border focus:outline-none focus:ring-2 focus:ring-blue-500" required
                    id="email" name="email" />
                <button type="submit"
                    class="w-full bg-[#ff0000] text-white py-2 rounded-lg hover:bg-blue-500 hover:shadow-md">
                    Enviar enlace de recuperación
                </button>
            </form>
            <div class="mt-4 text-sm text-center">
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Volver al inicio de sesión</a>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener("load", function() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("content").classList.remove("hidden");
        });
    </script>
</body>

</html>
