<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Solicitud credito</title>
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <form action="{{ route('derecho_habiente.store') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Datos personales -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Datos Personales</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="nss" class="block text-sm font-medium">NSS (11 caracteres)</label>
                        <input type="text" id="nss" name="nss" maxlength="11" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="curp" class="block text-sm font-medium">CURP (18 caracteres)</label>
                        <input type="text" id="curp" name="curp" maxlength="18" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="rfc" class="block text-sm font-medium">RFC (13 caracteres)</label>
                        <input type="text" id="rfc" name="rfc" maxlength="13" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="block text-sm font-medium">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="apellido_paterno" class="block text-sm font-medium">Apellido Paterno</label>
                        <input type="text" id="apellido_paterno" name="apellido_paterno" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="apellido_materno" class="block text-sm font-medium">Apellido Materno</label>
                        <input type="text" id="apellido_materno" name="apellido_materno" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="tipo_identificacion" class="block text-sm font-medium">Tipo de
                            Identificación</label>
                        <input type="text" id="tipo_identificacion" name="tipo_identificacion" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="identificacion" class="block text-sm font-medium">Número de
                            Identificación</label>
                        <input type="number" id="identificacion" name="identificacion" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="fecha_expedicion_identificacion" class="block text-sm font-medium">Fecha de Validez
                            (YYYY-MM-DD)</label>
                        <input type="date" id="fecha_expedicion_identificacion"
                            name="fecha_expedicion_identificacion" required="" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="genero" class="block text-sm font-medium">Genero</label>
                        <select name="genero" id="genero" required="" class="w-full p-2 border rounded-md">
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="estado_civil" class="block text-sm font-medium">Estado civil</label>
                        <select name="estado_civil" id="estado_civil" required=""
                            class="w-full p-2 border rounded-md">
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="soltero(a)">Soltero(a)</option>
                            <option value="casado(a)">Casado(a)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="regimen_patrimonial_del_matrimonio" class="block text-sm font-medium">Regimen
                            patrimonial del
                            matrimonio</label>
                        <select name="regimen_patrimonial_del_matrimonio" id="regimen_patrimonial_del_matrimonio"
                            required="" class="w-full p-2 border rounded-md">
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="separacion de bienes">Separación de bienes</option>
                            <option value="sociedad">Sociedad conyugal</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Contacto -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Contacto</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="telefono_prefijo" class="block text-sm font-medium">Teléfono prefijo</label>
                        <input type="number" id="telefono_prefijo" name="telefono_prefijo" maxlength="5"
                             class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="telefono_fijo" class="block text-sm font-medium">Número de Teléfono</label>
                        <input type="number" id="telefono_fijo" name="telefono_fijo" maxlength="10"
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="telefono_celular" class="block text-sm font-medium">Celular</label>
                        <input type="number" id="telefono_celular" name="telefono_celular" maxlength="10"
                            required="" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="email" class="block text-sm font-medium">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
            </div>

            <!-- Empresa -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Datos de la Empresa</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="nombre_empresa" class="block text-sm font-medium">Nombre de la Empresa</label>
                        <input type="text" id="nombre_empresa" name="nombre_empresa" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="registro_patronal" class="block text-sm font-medium">Registro Patronal</label>
                        <input type="text" id="registro_patronal" name="registro_patronal" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="telefono_empresa_prefijo" class="block text-sm font-medium">Código de Teléfono
                            Empresa</label>
                        <input type="number" id="telefono_empresa_prefijo" name="telefono_empresa_prefijo"
                            maxlength="5" required="" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="telefono_empresa_numero" class="block text-sm font-medium">Número de Teléfono
                            Empresa</label>
                        <input type="number" id="telefono_empresa_numero" name="telefono_empresa_numero"
                            maxlength="10" required="" class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono_empresa_extension" class="block text-sm font-medium">Extensión</label>
                    <input type="number" id="telefono_empresa_extension" name="telefono_empresa_extension" maxlength="5"
                        class="w-full p-2 border rounded-md">
                </div>
            </div>

            <!-- Dirección -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Dirección</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div class="form-group">
                        <label for="vivienda_mejorar" class="block text-sm font-medium">La vivienda para mejorar
                            es:</label>
                        <select name="vivienda_mejorar" id="vivienda_mejorar" required=""
                            class="w-full p-2 border rounded-md">
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="Propia">Propia</option>
                            <option value="Conyuge/Concubino(a)">Cónyuge o concubinado(a)</option>
                            <option value="Familiar">Familiar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="calle" class="block text-sm font-medium">Calle</label>
                        <input type="text" id="calle" name="calle"
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div class="form-group">
                        <label for="numero_exterior" class="block text-sm font-medium">Número Exterior</label>
                        <input type="text" id="numero_exterior" name="numero_exterior"
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="numero_interior" class="block text-sm font-medium">Número Interior</label>
                        <input type="text" id="numero_interior" name="numero_interior"
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div class="form-group">
                        <label for="lote" class="block text-sm font-medium">Lote</label>
                        <input type="text" id="lote" name="lote" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="manzana" class="block text-sm font-medium">Manzana</label>
                        <input type="text" id="manzana" name="manzana" class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div class="form-group">
                        <label for="colonia" class="block text-sm font-medium">Colonia o fraccionamiento</label>
                        <input type="text" id="colonia" name="colonia"
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="entidad" class="block text-sm font-medium">Entidad</label>
                        <input type="text" id="entidad" name="entidad"
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div class="form-group">
                        <label for="municipio" class="block text-sm font-medium">Municipio o alcaldia</label>
                        <input type="text" id="municipio" name="municipio"
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="codigo_postal" class="block text-sm font-medium">Código Postal (5 dígitos)</label>
                        <input type="number" id="codigo_postal" name="codigo_postal" maxlength="5" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
            </div>

            <!-- Crédito -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Datos del Crédito</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="monto_credito_solicitado" class="block text-sm font-medium">Monto de crédito
                            solicitado</label>
                        <input type="number" id="monto_credito_solicitado" name="monto_credito_solicitado"
                            required="" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="plazo_solicitado" class="block text-sm font-medium">Plazo Solicitado</label>
                        <input type="number" id="plazo_solicitado" name="plazo_solicitado" required=""
                            class="w-full p-2 border rounded-md"> años
                        (máximo
                        10
                        años)
                    </div>
                </div>
            </div>

            <!-- Referencias -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Referencias</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="ref1_apellido_paterno" class="block text-sm font-medium">Ref 1 - Apellido
                            Paterno</label>
                        <input type="text" id="ref1_apellido_paterno" name="ref1_apellido_paterno" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="ref1_apellido_materno" class="block text-sm font-medium">Ref 1 - Apellido
                            Materno</label>
                        <input type="text" id="ref1_apellido_materno" name="ref1_apellido_materno" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="ref1_nombre" class="block text-sm font-medium">Ref 1 - Nombre</label>
                        <input type="text" id="ref1_nombre" name="ref1_nombre" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="ref1_celular" class="block text-sm font-medium">Ref 1 - Celular</label>
                        <input type="number" id="ref1_celular" name="ref1_celular" maxlength="10" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="ref2_apellido_paterno" class="block text-sm font-medium">Ref 2 - Apellido
                            Paterno</label>
                        <input type="text" id="ref2_apellido_paterno" name="ref2_apellido_paterno" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="ref2_apellido_materno" class="block text-sm font-medium">Ref 2 - Apellido
                            Materno</label>
                        <input type="text" id="ref2_apellido_materno" name="ref2_apellido_materno" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="ref2_nombre" class="block text-sm font-medium">Ref 2 - Nombre</label>
                        <input type="text" id="ref2_nombre" name="ref2_nombre" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="ref2_celular" class="block text-sm font-medium">Ref 2 - Celular</label>
                        <input type="number" id="ref2_celular" name="ref2_celular" maxlength="10" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
            </div>

            <!-- Beneficiario -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Beneficiario</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div class="form-group">
                        <label for="beneficiario_apellido_paterno" class="block text-sm font-medium">Apellido
                            Paterno</label>
                        <input type="text" id="beneficiario_apellido_paterno" name="beneficiario_apellido_paterno"
                            required="" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="beneficiario_apellido_materno" class="block text-sm font-medium">Apellido
                            Materno</label>
                        <input type="text" id="beneficiario_apellido_materno" name="beneficiario_apellido_materno"
                            required="" class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div class="form-group">
                        <label for="beneficiario_nombre" class="block text-sm font-medium">Nombre</label>
                        <input type="text" id="beneficiario_nombre" name="beneficiario_nombre" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="beneficiario_parentesco" class="block text-sm font-medium">Parentesco</label>
                        <input type="text" id="beneficiario_parentesco" name="beneficiario_parentesco"
                            required="" class="w-full p-2 border rounded-md">
                    </div>
                </div>
            </div>

            <!-- Carta y mejoras -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Carta y Mejoras</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="localidad" class="block text-sm font-medium">Localidad</label>
                        <input type="text" id="localidad" name="localidad" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="card_fecha" class="block text-sm font-medium">Fecha</label>
                        <input type="date" id="card_fecha" name="card_fecha" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div>
                    <label for="mejoras" class="block text-sm font-medium">Describa brevemente la mejora o
                        remodelación a realizar</label>
                    <textarea id="mejoras" name="mejoras" required="" class="w-full p-2 border rounded-md"></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label for="nombre_completo_trabajador" class="block text-sm font-medium">Nombre Completo del
                            Trabajador</label>
                        <input type="text" id="nombre_completo_trabajador" name="nombre_completo_trabajador"
                            required="" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="form-group">
                        <label for="seguridadNSS" class="block text-sm font-medium">N.S.S</label>
                        <input type="text" id="seguridadNSS" name="seguridadNSS" required=""
                            class="w-full p-2 border rounded-md">
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Registrar</button>
            </div>
        </form>
    </div>
</body>

</html>
