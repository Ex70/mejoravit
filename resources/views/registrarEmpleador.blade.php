<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleador</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.3/dist/flowbite.js"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-4">Registrar Empleador</h2>
        <form action="{{ route('registrar_empleador.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" required
                    class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" name="correo" required
                    class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Identificación</label>
                <input type="number" name="identificacion" required
                    class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Rol</label>
                <select name="rol" required
                    class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Seleccione un rol</option>
                    <option value="admin">Administrador</option>
                    <option value="empleador">Empleador</option>
                </select>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Registrar</button>
            </div>
        </form>
    </div>
</body>

</html>
