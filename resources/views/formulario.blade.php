<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para PDF</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.16.0/pdf-lib.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('images/LogoInfonavit.png') }}">

    <!-- CSS de Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery y Select2 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</head>

<body class="bg-gray-100 p-6">


    <form method="POST" action="{{ route('formulario.store') }}" id="pdfForm"
        class="max-w-7xl mx-auto bg-gray shadow-lg overflow-hidden">
        @csrf
        <div class="bg-red-300 text-black text-lg font-semibold p-2 flex justify-between items-center">
            <h2>Formulario Página 1</h2>

        </div>
        <br>

        <div class="primerahoja">
            <div class="parte1">
                <div class="max-w-4xl mx-auto bg-white shadow-md overflow-hidden">
                    <div class="bg-red-200 text-black text-lg font-semibold p-2">
                        1. DATOS DE IDENTIFICACIÓN DE LA O EL DERECHOHABIENTE
                    </div>

                    <div class="p-6">
                        <!-- Primera línea -->
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            <div>
                                <label for="nss" class="block font-medium">NSS</label>
                                <input type="text" id="nss" name="p1_nss" class="w-full p-2 border rounded" required>
                            </div>
                            <div>
                                <label for="curp" class="block font-medium">CURP</label>
                                <input type="text" id="curp" name="p1_curp" class="w-full p-2 border rounded" required>
                            </div>
                            <div>
                                <label for="rfc" class="block font-medium">RFC</label>
                                <input type="text" id="rfc" name="p1_rfc" class="w-full p-2 border rounded" required>
                            </div>
                        </div>

                        <!-- Segunda línea -->
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            <div>
                                <label for="nombre" class="block font-medium">Nombre(s)</label>
                                <input type="text" id="nombre" name="p1_nombres" class="w-full p-2 border rounded"
                                    required>
                            </div>
                            <div>
                                <label for="apellido_paterno" class="block font-medium">Apellido Paterno</label>
                                <input type="text" id="apellido_paterno" name="p1_apellido_paterno"
                                    class="w-full p-2 border rounded" required>
                            </div>
                            <div>
                                <label for="apellido_materno" class="block font-medium">Apellido Materno</label>
                                <input type="text" id="apellido_materno" name="p1_apellido_materno"
                                    class="w-full p-2 border rounded" required>
                            </div>
                        </div>

                        <!-- Tercera línea -->
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            <div>
                                <label for="tipo_identificacion" class="block font-medium">Tipo de
                                    Identificación</label>
                                <select id="tipo_identificacion" name="p1_tipo_identificacion"
                                    class="w-full p-2 border rounded" required>
                                    <option value="" selected disabled>Seleccione una opción</option>
                                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                    <option value="Cedula">Cédula</option>
                                    <option value="Elector">Elector</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div>
                                <label for="numerodeidentificacion" class="block font-medium">Número de
                                    Identificación</label>
                                <input type="text" id="numerodeidentificacion" name="p1_numero_identificacion"
                                    class="w-full p-2 border rounded" required>
                            </div>
                            <div>
                                <label for="fecha_validez_identificacion" class="block font-medium">Fecha de
                                    Validez</label>
                                <input type="date" id="fecha_validez_identificacion"
                                    name="p1_fecha_validez_identificacion" class="w-full p-2 border rounded" required>
                            </div>
                        </div>

                        <!-- Cuarta línea -->
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            <div>
                                <label for="email" class="block font-medium">Correo Electrónico</label>
                                <input type="email" id="email" name="p1_email" class="w-full p-2 border rounded"
                                    required>
                            </div>
                            <div class="flex space-x-2">
                                <div class="w-16">
                                    <label for="lada" class="block font-medium">Lada</label>
                                    <input type="text" id="lada" name="p1_lada"
                                        class="w-full p-2 border rounded text-center" maxlength="3" required>
                                </div>
                                <div class="flex-1">
                                    <label for="numero" class="block font-medium">Número</label>
                                    <input type="text" id="numero" name="p1_numero" class="w-full p-2 border rounded"
                                        required>
                                </div>
                            </div>
                            <div>
                                <label for="celular" class="block font-medium">Celular</label>
                                <input type="text" id="celular" name="p1_celular" class="w-full p-2 border rounded"
                                    required>
                            </div>
                        </div>

                        <!-- Quinta línea -->
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            <div class="col-span-1">
                                <label for="sexo" class="block font-medium">Género</label>
                                <select id="sexo" name="p1_sexo" class="w-full p-2 border rounded" required>
                                    <option value="" selected disabled>Seleccione una opción</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div>
                                <label for="estado_civil" class="block font-medium">Estado Civil</label>
                                <select id="estado_civil" name="p1_estado_civil" class="w-full p-2 border rounded"
                                    required>
                                    <option value="" selected disabled>Seleccione una opción</option>
                                    <option value="soltero">Soltero(a)</option>
                                    <option value="casado">Casado(a)</option>
                                </select>
                            </div>
                            <div>
                                <label for="regimen_patrimonial" class="block font-medium">Régimen Patrimonial</label>
                                <select id="regimen_patrimonial" name="p1_regimen_patrimonial"
                                    class="w-full p-2 border rounded">
                                    <option value="" selected disabled>Seleccione una opción</option>
                                    <option value="separacion">Separación de Bienes</option>
                                    <option value="sociedad">Sociedad Conyugal</option>
                                </select>
                            </div>
                        </div>

                        <!-- Script -->
                        <script>
                            const estadoCivil = document.getElementById('estado_civil');
                            const regimenPatrimonial = document.getElementById('regimen_patrimonial');

                            estadoCivil.addEventListener('change', function () {
                                if (this.value === 'casado') {
                                    regimenPatrimonial.setAttribute('required', 'required');
                                } else {
                                    regimenPatrimonial.removeAttribute('required');
                                    regimenPatrimonial.value = ''; // limpia si no es requerido
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>


            <br>

            <div class="parte2">

                <div class="max-w-4xl mx-auto bg-white shadow-md overflow-hidden">
                    <div class="bg-red-200 text-black text-lg font-semibold p-2">
                        2. DATOS DE LA EMPRESA EN LA QUE LABORA LA O EL DERECHOHABIENTE
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="col-span-2">
                                <label for="nombre_empresa" class="block font-medium">Nombre de la empresa</label>
                                <input type="text" id="nombre_empresa" class="w-full p-2 border rounded" required>
                            </div>
                            <div>
                                <label for="nrpp" class="block font-medium">NRPP</label>
                                <input type="text" id="nrpp" class="w-full p-2 border rounded" required>
                            </div>
                        </div>

                        <div class="bg-gray-100 text-black text-md font-semibold p-2 mt-4">
                            TELÉFONO DE LA EMPRESA DONDE
                            TRABAJA EL DERECHOHABIENTE
                        </div>

                        <div class="grid grid-cols-3 gap-4 mt-4">
                            <!--  -->
                            <div class="flex space-x-2">
                                <div class="w-16">
                                    <label for="lada_empresa" class="block font-medium">Lada</label>
                                    <input type="text" id="lada_empresa" class="w-full p-2 border rounded text-center"
                                        maxlength="3" required>
                                </div>
                                <div class=" ">
                                    <label for="numero_empresa" class="block font-medium">Número</label>
                                    <input type="text" id="numero_empresa" class="w-full p-2 border rounded" required>
                                </div>
                            </div>
                            <div>
                                <label for="extension_empresa" class="block font-medium">Extensión</label>
                                <input type="text" id="extension_empresa" class="w-full p-2 border rounded">
                            </div>
                            <!--  -->
                        </div>
                    </div>

                </div>
            </div>

            <br>

            <div class="parte3">
                <div class="max-w-4xl mx-auto bg-white shadow-md overflow-hidden">
                    <div class="bg-red-200 text-black text-lg font-semibold p-2">
                        3. DATOS DE LA VIVIENDA A MEJORAR
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="col-span-1">
                                <label class="block font-medium">LA VIVIENDA PARA MEJORAR ES:</label>
                                <select id="vivienda" class="w-full p-2 border rounded " required>
                                    <option value="" selected disabled>Seleccione una opción</option>
                                    <option value="propia">Propia</option>
                                    <option value="conyuge">Cónyuge o Concubino(a)</option>
                                    <option value="familiar">Familiar</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="calle" class="block font-medium ">Calle</label>
                                <input type="text" id="calle" class="w-full p-2 border rounded" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div>
                                <label for="colonia" class="block font-medium">Colonia o Fraccionamiento</label>
                                <input type="text" id="colonia" class="w-full p-2 border rounded" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-4 gap-4 mt-4">
                            <div>
                                <label for="no_ext" class="block font-medium">No. EXT.</label>
                                <input type="text" id="no_ext" class="w-full p-2 border rounded" required>
                            </div>
                            <div>
                                <label for="no_int" class="block font-medium">No. INT.</label>
                                <input type="text" id="no_int" class="w-full p-2 border rounded">
                            </div>
                            <div>
                                <label for="lote" class="block font-medium">LOTE</label>
                                <input type="text" id="lote" class="w-full p-2 border rounded">
                            </div>
                            <div>
                                <label for="mza" class="block font-medium">MZA.</label>
                                <input type="text" id="mza" class="w-full p-2 border rounded">
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4 mt-4">
                            <div>
                                <label for="entidad" class="block font-medium">Entidad</label>
                                <input type="text" id="entidad" class="w-full p-2 border rounded" required>
                            </div>
                            <div>
                                <label for="municipio" class="block font-medium">Municipio o Alcaldía</label>
                                <input type="text" id="municipio" class="w-full p-2 border rounded" required>
                            </div>
                            <div>
                                <label for="codigo_postal" class="block font-medium">Código Postal</label>
                                <input type="text" id="codigo_postal" class="w-full p-2 border rounded" required>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <br>

            <div class="parte4">
                <div class="max-w-4xl mx-auto bg-white shadow-md overflow-hidden">
                    <div class="bg-red-200 text-black text-lg font-semibold p-2">
                        4. DATOS DEL CRÉDITO
                    </div>
                    <div class="p-6">
                        <!-- Destino del crédito y Tipo de crédito en la misma línea -->
                        <div class="grid grid-cols-3 gap-4">
                            <div class="col-span-2">
                                <label class="block font-medium">DESTINO DEL CRÉDITO:</label>
                                <p class="p-2 border rounded bg-gray-100">
                                    Reparación, ampliación o mejoramiento a la vivienda sin afectación estructural
                                </p>
                            </div>
                            <div>
                                <label class="block font-medium">TIPO DE CRÉDITO:</label>
                                <input type="text" class="w-full p-2 border rounded text-center" value="INDIVIDUAL"
                                    readonly>
                            </div>
                        </div>

                        <!-- Monto de crédito solicitado y Plazo en la misma línea con formato compacto -->
                        <div class="grid grid-cols-3 gap-4 mt-4 items-end">
                            <div class="col-span-2">
                                <label for="monto_credito" class="block font-medium">MONTO DE CRÉDITO
                                    SOLICITADO:</label>
                                <div class="flex bg-gray-100 p-2 rounded border items-center justify-center space-x-1">
                                    <span>$</span>
                                    <input type="number" id="monto_credito1" name="monto_credito1"
                                        class="w-14 p-2 border rounded text-center" placeholder="000"
                                        oninput="limitarInputNumerico(this, 3)">
                                    <span>,</span>
                                    <input type="number" id="monto_credito2" name="monto_credito2"
                                        class="w-14 p-2 border rounded text-center" placeholder="000"
                                        oninput="limitarInputNumerico(this, 3)">
                                    <span>.</span>
                                    <input type="number" id="monto_credito3" name="monto_credito3"
                                        class="w-10 p-2 border rounded text-center" placeholder="00"
                                        oninput="limitarInputNumerico(this, 2)" value="00">
                                </div>

                                <script>
                                    function limitarInputNumerico(elemento, maxLength) {
                                        // Convierte a string y corta si excede el límite
                                        elemento.value = elemento.value.slice(0, maxLength);
                                    }
                                </script>

                            </div>

                            <div>
                                <label for="plazo_solicitado" class="block font-medium">PLAZO SOLICITADO:</label>
                                <div class="flex bg-gray-100 p-2 rounded border items-center justify-center space-x-2">
                                    <input type="number" id="plazo_solicitado" min="1" max="10" placeholder="Ej. 5"
                                        class="w-14 p-2 border rounded text-center" value="10">
                                    <span class="text-gray-600">años (máx. 10)</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="bg-red-50 text-black text-lg font-semibold p-2">
                            4.1. DESTINO DE LOS RECURSOS
                        </div>
                        <!-- Porcentaje de Titulación -->
                        <div class="mt-6">
                            <label class="block font-medium">Solicito destinar:</label>
                            <div class="flex items-center space-x-2">
                                <input type="number" id="porcentaje_titulacion1" min="0" max="30"
                                    class="w-16 p-2 border rounded text-center" placeholder="%">
                                <span class="text-gray-600">(máximo 30% del monto de crédito otorgado)</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">
                                para el pago de titulación de la vivienda a mi nombre, presentando previa cotización
                                emitida por el Notario Público a
                                cargo del trámite de Titulación.
                            </p>
                        </div>

                        <!-- Cuenta CLABE de la Notaría -->
                        <div class="mt-4">
                            <label for="cuenta_clabe_notaria" class="block font-medium">CUENTA CLABE DE LA NOTARÍA A LA
                                QUE SE LE REALIZARÁ EL PAGO:</label>
                            <input type="text" id="cuenta_clabe_notaria" maxlength="18"
                                class="w-full p-2 border rounded mt-1" placeholder="Ingrese CLABE">
                            <p class="text-sm text-gray-500 mt-1">*Aplica solo para viviendas a nombre de la o el
                                Derechohabiente.</p>
                        </div>

                        <!-- Cuenta CLABE para el pago de materiales -->
                        <div class="mt-6">
                            <label class="block font-medium">El porcentaje restante será únicamente destinado para la
                                adquisición de productos para la reparación, ampliación o mejora de la vivienda.</label>
                            <p class="text-sm text-gray-500 mt-2">
                                El monto será depositado en la cuenta bancaria a nombre del derechohabiente.
                            </p>
                        </div>

                        <div class="mt-4">
                            <label for="cuenta_clabe_pago" class="block font-medium">CUENTA CLABE A LA QUE SE LE
                                REALIZARÁ EL PAGO:</label>
                            <input type="text" id="cuenta_clabe_pago" maxlength="18"
                                class="w-full p-2 border rounded mt-1" placeholder="Ingrese CLABE">
                            <p class="text-sm text-gray-500 mt-1">** La cuenta CLABE será verificada y deberá estar a
                                nombre de la o el <strong>derechohabiente.</strong> </p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <br>
        <div class="bg-blue-300 text-black text-lg font-semibold p-2 flex justify-between items-center">
            <h2>Formulario Página 2</h2>

        </div>
        <br>
        <div class="segundahoja">
            <div class="parte1">
                <div class="max-w-4xl mx-auto bg-white shadow-md overflow-hidden">
                    <div class="bg-blue-200 text-black text-lg font-semibold p-2">
                        <h3>5. REFERENCIAS FAMILIARES DE LA O EL DERECHOHABIENTE / DATOS QUE SERÁN VALIDADOS</h3>
                    </div>
                    <div class="p-6">
                        <!-- Primera Referencia Familiar -->
                        <div class="bg-blue-50 text-black text-lg font-semibold p-2">
                            Referencia Familiar 1
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="rf1_apellido_paterno" class="block font-medium">Apellido Paterno</label>
                                <input type="text" id="rf1_apellido_paterno" class="w-full p-2 border rounded"
                                    placeholder="Ingrese Apellido Paterno">
                            </div>
                            <div>
                                <label for="rf1_apellido_materno" class="block font-medium">Apellido Materno</label>
                                <input type="text" id="rf1_apellido_materno" class="w-full p-2 border rounded"
                                    placeholder="Ingrese Apellido Materno">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="rf1_nombres" class="block font-medium">Nombres</label>
                            <input type="text" id="rf1_nombres" class="w-full p-2 border rounded"
                                placeholder="Ingrese Nombres" required>
                        </div>
                        <div class="flex space-x-2 mt-4">
                            <div class="w-1/4">
                                <label for="rf1_lada" class="block font-medium">LADA</label>
                                <input type="text" id="rf1_lada" class="w-full p-2 border rounded text-center"
                                    maxlength="3" placeholder="Ej: 55">
                            </div>
                            <div class="w-1/2">
                                <label for="rf1_numero" class="block font-medium">Número</label>
                                <input type="text" id="rf1_numero" class="w-full p-2 border rounded" maxlength="8"
                                    placeholder="Ej: 12345678">
                            </div>
                            <div class="w-1/2">
                                <label for="rf1_celular" class="block font-medium">Celular</label>
                                <input type="text" id="rf1_celular" class="w-full p-2 border rounded" maxlength="10"
                                    placeholder="Ej: 12345678" required>
                            </div>
                        </div>
                        <br>
                        <!-- Segunda Referencia Familiar -->
                        <div class="bg-blue-50 text-black text-lg font-semibold p-2">
                            Referencia Familiar 2
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="rf2_apellido_paterno" class="block font-medium">Apellido Paterno</label>
                                <input type="text" id="rf2_apellido_paterno" class="w-full p-2 border rounded"
                                    placeholder="Ingrese Apellido Paterno">
                            </div>
                            <div>
                                <label for="rf2_apellido_materno" class="block font-medium">Apellido Materno</label>
                                <input type="text" id="rf2_apellido_materno" class="w-full p-2 border rounded"
                                    placeholder="Ingrese Apellido Materno">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="rf2_nombres" class="block font-medium">Nombres</label>
                            <input type="text" id="rf2_nombres" class="w-full p-2 border rounded"
                                placeholder="Ingrese Nombres" required>
                        </div>
                        <div class="flex space-x-2 mt-4">
                            <div class="w-1/4">
                                <label for="rf2_lada" class="block font-medium">LADA</label>
                                <input type="text" id="rf2_lada" class="w-full p-2 border rounded text-center"
                                    maxlength="3" placeholder="Ej: 55">
                            </div>
                            <div class="w-1/2">
                                <label for="rf2_numero" class="block font-medium">Número</label>
                                <input type="text" id="rf2_numero" class="w-full p-2 border rounded" maxlength="8"
                                    placeholder="Ej: 12345678">
                            </div>
                            <div class="w-1/2">
                                <label for="rf2_celular" class="block font-medium">Celular</label>
                                <input type="text" id="rf2_celular" class="w-full p-2 border rounded" maxlength="10"
                                    placeholder="Ej: 12345678" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="parte2">
                <div class="max-w-4xl mx-auto bg-white shadow-md overflow-hidden mt-6">
                    <div class="bg-blue-200 text-black text-lg font-semibold p-2">
                        <h3>6. BENEFICIARIO EN CASO DE FALLECIMIENTO DEL TITULAR</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 gap-4 mb-4">


                        </div>

                        <div class="grid grid-cols-4 gap-4 mb-4">
                            <div>
                                <label for="parentesco" class="block font-medium">Parentesco</label>
                                <input type="text" id="bf_parentesco" class="w-full p-2 border rounded"
                                    placeholder="Ingrese Parentesco" required>
                            </div>
                            <div>
                                <label for="apellido_paterno" class="block font-medium">Apellido Paterno</label>
                                <input type="text" id="bf_apellido_paterno" class="w-full p-2 border rounded"
                                    placeholder="Ingrese Apellido Paterno">
                            </div>
                            <div>
                                <label for="apellido_materno" class="block font-medium">Apellido Materno</label>
                                <input type="text" id="bf_apellido_materno" class="w-full p-2 border rounded"
                                    placeholder="Ingrese Apellido Materno">
                            </div>

                            <div class="mb-4">
                                <label for="nombres" class="block font-medium">Nombre(s)</label>
                                <input type="text" id="bf_nombres" class="w-full p-2 border rounded"
                                    placeholder="Ingrese Nombre(s)" required>
                            </div>
                        </div>


                        <div class="bg-gray-100 p-2 rounded text-sm text-gray-700">
                            <p><strong>Nota:</strong> No puede ser el nombre de la o el Derechohabiente ni de la o el
                                asesor
                                CESI.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="parte3">
                <div class="max-w-4xl mx-auto bg-white shadow-md overflow-hidden mt-6">
                    <div class="bg-red-400 text-black text-lg font-semibold p-2">
                        <h3>- Manifiesto</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 gap-4 mb-4">
                            <div class="bg-gray-100 p-2 rounded text-sm text-gray-700 mb-4">
                                <p><strong>Manifiesto que:</strong> todos los datos proporcionados son verdaderos, con
                                    pleno conocimiento del artículo 58 de la Ley del Infonavit que a la letra dice:</p>
                                <p class="italic">“Se reputará como fraude y se sancionará como tal, en los términos del
                                    Código Penal Federal, el obtener los créditos o recibir los depósitos a que esta Ley
                                    se refiere, sin tener derecho a ello, mediante engaño, simulación o sustitución de
                                    persona”.</p>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <!-- Selección de Ciudad -->
                                <div>
                                    <label for="ciudad" class="block font-medium">Ciudad</label>
                                    <select id="manifiesto_ciudad" class="w-full p-2 border rounded select2" required>
                                        <option value="">Escriba y seleccione una ciudad...</option>
                                        <option value="otro">Otro (Escribir manualmente)</option>
                                    </select>
                                </div>

                                <!-- Fecha -->
                                <div>
                                    <label for="fecha" class="block font-medium">Fecha</label>
                                    <input type="date" id="manifiesto_fecha" class="w-full p-2 border rounded" required>
                                </div>
                            </div>

                            <!-- Campo para ingresar otra ciudad manualmente (oculto por defecto) -->
                            <div class="mb-4 hidden" id="otro_ciudad_container">
                                <label for="otro_ciudad" class="block font-medium">Ingrese su ciudad</label>
                                <input type="text" id="otro_ciudad" class="w-full p-2 border rounded"
                                    placeholder="Ingrese su ciudad manualmente">
                            </div>
                        </div>
                        <!-- Api de ciudades -->

                        <!--  -->
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="bg-green-300 text-black text-lg font-semibold p-2 flex justify-between items-center">
            <h2>Formulario Página 3</h2>
        </div>
        <br>
        <div class="tercerahoja">
            <div class="max-w-4xl mx-auto bg-white shadow-md overflow-hidden">
                <div class="bg-blue-200 text-black text-lg font-semibold p-2">
                    <h3>5. REFERENCIAS FAMILIARES DE LA O EL DERECHOHABIENTE / DATOS QUE SERÁN VALIDADOS</h3>
                </div>
                <div class="p-6">

                    <div class="mb-4">
                        <div class="bg-gray-100 p-2 rounded text-sm text-gray-700 mb-4">
                            <p class="font"><strong>IV.</strong> Con el fin de que el INFONAVIT vigile que los recursos
                                se
                                destinen al fin para el que fueron concedidos, manifiesto que los mismos serán
                                utilizados de la siguiente manera:</p>
                            <label for="descripcion_mejora" class="block font-medium mt-2">
                                Describa brevemente la mejora o remodelación a realizar
                            </label>
                            <textarea id="descripcion_mejora" class="w-full p-2 border rounded"
                                placeholder="Describa brevemente la mejora o remodelación a realizar..." maxlength="328"
                                required></textarea>
                            <p id="contador" class="text-sm text-gray-500">0/300 caracteres</p>

                        </div>

                        <div class="bg-gray-100 p-2 rounded text-sm text-gray-700 mb-4">
                            <p class="font"><strong>V.</strong> A la fecha de firma del contrato no estoy tramitando
                                jubilación
                                o pensión ante el Instituto Mexicano del Seguro Social, no estoy tramitando la
                                determinación de alguna incapacidad ante el Instituto Mexicano del Seguro Social y
                                tampoco estoy tramitando ante la administradora de fondos el retiro correspondiente, la
                                devolución parcial o total del saldo de la cuenta individual del Sistema de Ahorro para
                                el Retiro.</p>
                        </div>

                        <div class="bg-gray-100 p-2 rounded text-sm text-gray-700 mb-4">
                            <p class="font"><strong>VI.</strong> La información que he proporcionado al INFONAVIT, así
                                como las
                                declaraciones contenidas en este documento son ciertas, correctas, exactas y verdaderas.
                            </p>
                        </div>

                        <div class="bg-gray-100 p-2 rounded text-sm text-gray-700 mb-4">
                            <p class="font"><strong>VII.</strong> Tengo conocimiento y comprendo el contenido del
                                artículo 58 de
                                la Ley del Infonavit, el cual señala que:</p>
                            <p class="font-bold">“Se reputará como fraude y se sancionará como tal, en los términos del
                                Código Penal Federal, el obtener los créditos o recibir los depósitos a que esta Ley se
                                refiere, sin tener derecho a ello, mediante engaño, simulación o sustitución de
                                persona”.</p>
                        </div>

                    </div>

                </div>

            </div>

            <br> <br>
            <button type="button" onclick="generarPDF()"
                class="w-[70%] mb-4 mx-auto block bg-blue-500 text-white py-2 px-4 rounded">
                📄 Generar PDF
            </button>
    </form>
    <script>
        $(document).ready(function () {
            $("#manifiesto_ciudad").select2({
                placeholder: "Escriba y seleccione una ciudad...",
                minimumInputLength: 2,
                ajax: {
                    url: function (params) {
                        return `https://nominatim.openstreetmap.org/search?format=json&q=${params.term}&addressdetails=1&limit=10`;
                    },
                    dataType: "json",
                    delay: 250,
                    processResults: function (data) {
                        let results = data.map(city => {
                            let address = city.address;
                            let ciudad = address.city || address.town || address.village || address.hamlet || "";
                            let estado = address.state || "";
                            let pais = address.country || "";

                            let displayName = `${ciudad}, ${estado}, ${pais}`.trim().replace(/^,|,$/g, ''); // Evita comas sobrantes

                            return {
                                id: displayName,
                                text: displayName
                            };
                        });

                        // Agregar la opción "Otro" si no hay resultados
                        results.push({ id: "otro", text: "Otro (Escribir manualmente)" });

                        return { results };
                    }
                }
            });

            // Mostrar input manual si selecciona "Otro"
            $("#manifiesto_ciudad").on("change", function () {
                if ($(this).val() === "otro") {
                    $("#otro_ciudad_container").removeClass("hidden");
                } else {
                    $("#otro_ciudad_container").addClass("hidden");
                }
            });
        });

    </script>

    <style>
        /* Estilo para los campos vacíos */
        .campo-error {
            border: 2px solid red;
            background-color: #ffe6e6;
        }
    </style>
    <script>
        document.getElementById("descripcion_mejora").addEventListener("input", function () {
            let maxCaracteres = 328;
            let texto = this.value;

            if (texto.length > maxCaracteres) {
                this.value = texto.substring(0, maxCaracteres);
            }

            document.getElementById("contador").textContent = `${this.value.length}/${maxCaracteres} caracteres`;
        });

        async function generarPDF() {
            console.log("Intentando generar el PDF...");

            // Seleccionar todos los campos con atributo required
            let campos = document.querySelectorAll("[required]");
            let primerCampoVacio = null;

            // Recorrer los campos y verificar si están vacíos
            campos.forEach(campo => {
                console.log(`Campo ${campo.id}: "${campo.value}"`);

                if (campo.value.trim() === "") {
                    if (!primerCampoVacio) {
                        primerCampoVacio = campo; // Guarda el primer campo vacío encontrado
                    }
                    campo.classList.add("campo-error"); // Agrega la clase de error
                } else {
                    campo.classList.remove("campo-error"); // Quita la clase de error si ya está lleno
                }
            });

            // Si hay un campo vacío, enfócalo y detén la ejecución
            if (primerCampoVacio) {
                alert("Por favor, complete todos los campos obligatorios.");
                primerCampoVacio.focus(); // Lleva el cursor al campo vacío
                return;
            }

            try {
                const existingPdfBytes = await fetch("/pdfs/mspt4.pdf").then(res => res.arrayBuffer());
                const pdfDoc = await PDFLib.PDFDocument.load(existingPdfBytes);
                const pages = pdfDoc.getPages();
                const font = await pdfDoc.embedFont(PDFLib.StandardFonts.Helvetica);
                const fontSize = 11;

                // Obtener datos del formulario
                let nss = document.getElementById("nss").value;
                let curp = document.getElementById("curp").value;
                let rfc = document.getElementById("rfc").value;
                let apellido_paterno = document.getElementById("apellido_paterno").value;
                let apellido_materno = document.getElementById("apellido_materno").value;
                let nombre = document.getElementById("nombre").value;
                let numerodeidentificacion = document.getElementById("numerodeidentificacion").value;
                let fecha_validez_identificacion = document.getElementById("fecha_validez_identificacion").value;
                if (fecha_validez_identificacion) {
                    let partes = fecha_validez_identificacion.split("-");
                    fecha_validez_identificacion = `${partes[2]}/${partes[1]}/${partes[0]}`;
                }
                let tipo_identificacion = document.getElementById("tipo_identificacion").value;
                let lada = document.getElementById("lada").value;
                let numero = document.getElementById("numero").value;
                let celular = document.getElementById("celular").value;
                let email = document.getElementById("email").value;
                let sexo = document.querySelector('#sexo')?.value;
                let estado_civil = document.querySelector('#estado_civil')?.value;
                let regimen_patrimonial = document.querySelector('#regimen_patrimonial')?.value;

                let nombre_empresa = document.getElementById("nombre_empresa").value;
                let nrpp = document.getElementById("nrpp").value;
                let lada_empresa = document.getElementById("lada_empresa").value;
                let numero_empresa = document.getElementById("numero_empresa").value;
                let extension_empresa = document.getElementById("extension_empresa").value;
                let vivienda = document.querySelector('#vivienda')?.value;
                let calle = document.getElementById("calle").value;
                let no_ext = document.getElementById("no_ext").value;
                let no_int = document.getElementById("no_int").value;
                let lote = document.getElementById("lote").value;
                let mza = document.getElementById("mza").value;
                let colonia = document.getElementById("colonia").value;

                let entidad = document.getElementById("entidad").value;
                let municipio = document.getElementById("municipio").value;
                let codigo_postal = document.getElementById("codigo_postal").value;


                let monto_credito1 = document.getElementById("monto_credito1").value;
                let monto_credito2 = document.getElementById("monto_credito2").value;
                let monto_credito3 = document.getElementById("monto_credito3").value;

                let monto_credito = `${monto_credito1},${monto_credito2}.${monto_credito3}`;
                let plazo_solicitado = document.getElementById("plazo_solicitado").value;

                let porcentaje_titulacion1 = document.getElementById("porcentaje_titulacion1").value;
                let cuenta_clabe_notaria = document.getElementById("cuenta_clabe_notaria").value;
                let cuenta_clabe_pago = document.getElementById("cuenta_clabe_pago").value;

                // Capturar datos de la primera referencia familiar
                let rf1_apellido_paterno = document.getElementById("rf1_apellido_paterno").value;
                let rf1_apellido_materno = document.getElementById("rf1_apellido_materno").value;
                let rf1_nombres = document.getElementById("rf1_nombres").value;
                let rf1_lada = document.getElementById("rf1_lada").value;
                let rf1_numero = document.getElementById("rf1_numero").value;
                let rf1_celular = document.getElementById("rf1_celular").value;

                // Capturar datos de la segunda referencia familiar
                let rf2_apellido_paterno = document.getElementById("rf2_apellido_paterno").value;
                let rf2_apellido_materno = document.getElementById("rf2_apellido_materno").value;
                let rf2_nombres = document.getElementById("rf2_nombres").value;
                let rf2_lada = document.getElementById("rf2_lada").value;
                let rf2_numero = document.getElementById("rf2_numero").value;
                let rf2_celular = document.getElementById("rf2_celular").value;

                let bf_parentesco = document.getElementById("bf_parentesco").value;
                let bf_apellido_paterno = document.getElementById("bf_apellido_paterno").value;
                let bf_apellido_materno = document.getElementById("bf_apellido_materno").value;
                let bf_nombres = document.getElementById("bf_nombres").value;

                let manifiesto_ciudad = document.getElementById("manifiesto_ciudad").value;
                let manifiesto_fecha = document.getElementById("manifiesto_fecha").value;
                let otro_ciudad = document.getElementById("otro_ciudad").value;

                function formatearFecha(fecha) {
                    if (!fecha) return { dia: "", mes: "", mesNumero: "", anio: "", anio_all: "" };

                    let fechaObj = new Date(fecha + "T00:00:00");
                    let dia = fechaObj.getDate(); // Día del mes
                    let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                    let mes = meses[fechaObj.getMonth()]; // Nombre del mes
                    let mesNumero = (fechaObj.getMonth() + 1).toString().padStart(2, "0"); // Mes en número con dos dígitos
                    let anio = fechaObj.getFullYear().toString().slice(-2); // Últimos 2 dígitos del año

                    let anio_all = fechaObj.getFullYear().toString(); // Año completo

                    return { dia, mes, mesNumero, anio, anio_all };
                }



                // **Primera página (ya lista)**
                function llenarPagina1() {
                    if (pages.length < 1) return;
                    let page = pages[0];

                    page.drawText(nss, { x: 42, y: 672, size: fontSize, font: font });
                    page.drawText(curp, { x: 187, y: 672, size: fontSize, font: font });
                    page.drawText(rfc, { x: 371, y: 672, size: fontSize, font: font });
                    page.drawText(apellido_paterno, { x: 42, y: 647, size: fontSize, font: font });
                    page.drawText(apellido_materno, { x: 299, y: 647, size: fontSize, font: font });
                    page.drawText(nombre, { x: 42, y: 623, size: fontSize, font: font });

                    page.drawText(numerodeidentificacion, { x: 212, y: 597, size: fontSize, font: font });
                    page.drawText(fecha_validez_identificacion, { x: 370, y: 597, size: fontSize, font: font });
                    page.drawText(tipo_identificacion, { x: 42, y: 597, size: fontSize, font: font });
                    page.drawText(lada, { x: 84, y: 570, size: fontSize, font: font });
                    page.drawText(numero, { x: 113, y: 570, size: fontSize, font: font });
                    page.drawText(celular, { x: 240, y: 570, size: fontSize, font: font });
                    page.drawText(email, { x: 108, y: 545, size: fontSize, font: font });
                    page.drawText(nombre_empresa, { x: 42, y: 479, size: fontSize, font: font });
                    page.drawText(nrpp, { x: 394, y: 479, size: fontSize, font: font });
                    page.drawText(lada_empresa, { x: 230, y: 452, size: fontSize, font: font });
                    page.drawText(numero_empresa, { x: 258, y: 452, size: fontSize, font: font });
                    page.drawText(extension_empresa, { x: 359, y: 452, size: fontSize, font: font });

                    page.drawText(calle, { x: 49, y: 392, size: fontSize, font: font });
                    page.drawText(no_ext, { x: 48, y: 362, size: fontSize, font: font });
                    page.drawText(no_int, { x: 91, y: 362, size: fontSize, font: font });
                    page.drawText(lote, { x: 135, y: 362, size: fontSize, font: font });
                    page.drawText(mza, { x: 177, y: 362, size: fontSize, font: font });
                    page.drawText(colonia, { x: 235, y: 362, size: fontSize, font: font });

                    page.drawText(entidad, { x: 48, y: 340, size: fontSize, font: font });
                    page.drawText(municipio, { x: 287, y: 340, size: fontSize, font: font });
                    page.drawText(codigo_postal, { x: 495, y: 340, size: fontSize, font: font });


                    page.drawText(monto_credito1, { x: 147, y: 255, size: fontSize, font: font }); // Coordenadas para el primer campo
                    page.drawText(monto_credito2, { x: 186, y: 255, size: fontSize, font: font }); // Coordenadas para el segundo campo
                    page.drawText(monto_credito3, { x: 225, y: 255, size: fontSize, font: font }); // Coordenadas para el tercer campo

                    page.drawText(plazo_solicitado, { x: 99, y: 234, size: 7, font: font });

                    page.drawText(porcentaje_titulacion1, { x: 105, y: 157, size: fontSize, font: font });
                    page.drawText(cuenta_clabe_notaria, { x: 280, y: 137, size: fontSize, font: font });
                    page.drawText(cuenta_clabe_pago, { x: 280, y: 93, size: fontSize, font: font });



                    if (sexo === "M") page.drawCircle({ x: 428.1, y: 569.5, size: 3, color: PDFLib.rgb(0, 0, 0) });
                    if (sexo === "F") page.drawCircle({ x: 444, y: 569.2, size: 3, color: PDFLib.rgb(0, 0, 0) });

                    if (estado_civil === "soltero") page.drawCircle({ x: 123.4, y: 521.3, size: 3, color: PDFLib.rgb(0, 0, 0) });
                    if (estado_civil === "casado") page.drawCircle({ x: 171.9, y: 521, size: 3, color: PDFLib.rgb(0, 0, 0) });

                    if (regimen_patrimonial === "separacion") page.drawCircle({ x: 370.7, y: 522.2, size: 3, color: PDFLib.rgb(0, 0, 0) });
                    if (regimen_patrimonial === "sociedad") page.drawCircle({ x: 443, y: 521.5, size: 3, color: PDFLib.rgb(0, 0, 0) });
                    // **Marcar opción de vivienda**
                    if (vivienda === "propia") {
                        page.drawCircle({ x: 161, y: 407.6, size: 3, color: PDFLib.rgb(0, 0, 0) });
                    } else if (vivienda === "conyuge") {
                        page.drawCircle({ x: 249.4, y: 407.6, size: 3, color: PDFLib.rgb(0, 0, 0) });
                    } else if (vivienda === "familiar") {
                        page.drawCircle({ x: 293, y: 407.6, size: 3, color: PDFLib.rgb(0, 0, 0) });
                    }
                }


                function llenarPagina2() {
                    if (pages.length < 2) return;
                    let page = pages[1];
                    // Posiciones de los datos en el PDF
                    page.drawText(rf1_apellido_paterno, { x: 44.5, y: 676, size: fontSize, font: font });
                    page.drawText(rf1_apellido_materno, { x: 44.5, y: 656, size: fontSize, font: font });
                    page.drawText(rf1_nombres, { x: 43, y: 634, size: fontSize, font: font });
                    page.drawText(rf1_lada, { x: 77, y: 610, size: fontSize, font: font });
                    page.drawText(rf1_numero, { x: 115, y: 610, size: fontSize, font: font });
                    page.drawText(rf1_celular, { x: 75, y: 593, size: fontSize, font: font });


                    page.drawText(rf2_apellido_paterno, { x: 304.5, y: 676, size: fontSize, font: font });
                    page.drawText(rf2_apellido_materno, { x: 304.5, y: 656, size: fontSize, font: font });
                    page.drawText(rf2_nombres, { x: 304, y: 634, size: fontSize, font: font });
                    page.drawText(rf2_lada, { x: 336.5, y: 610, size: fontSize, font: font });
                    page.drawText(rf2_numero, { x: 373, y: 610, size: fontSize, font: font });
                    page.drawText(rf2_celular, { x: 337.5, y: 590, size: fontSize, font: font });

                    page.drawText(bf_parentesco, { x: 54, y: 537, size: fontSize, font: font });
                    page.drawText(bf_apellido_paterno, { x: 95, y: 517, size: fontSize, font: font });
                    page.drawText(bf_apellido_materno, { x: 320, y: 517, size: fontSize, font: font });
                    page.drawText(bf_nombres, { x: 95, y: 490, size: fontSize, font: font });

                    let ciudadFinal = (manifiesto_ciudad === "otro") ? otro_ciudad : manifiesto_ciudad;

                    // Formatear la fecha
                    let { dia, mes, anio } = formatearFecha(manifiesto_fecha);

                    // Posiciones en el PDF (ajusta según necesites)
                    page.drawText(ciudadFinal, { x: 126, y: 203, size: fontSize, font: font });
                    page.drawText(dia.toString(), { x: 362, y: 203, size: fontSize, font: font });
                    page.drawText(mes, { x: 393, y: 203, size: fontSize, font: font });
                    page.drawText(anio, { x: 533, y: 203, size: fontSize, font: font });

                }

                function llenarPagina3() {
                    if (pages.length < 3) return;
                    let page = pages[2];

                    // Formatear la fecha
                    let { dia, mesNumero, anio } = formatearFecha(manifiesto_fecha);
                    page.drawText(municipio + ", " + entidad, { x: 90, y: 584, size: fontSize, font: font });
                    page.drawText(dia.toString(), { x: 368, y: 584, size: fontSize, font: font });  // Día
                    page.drawText(mesNumero, { x: 410, y: 584, size: fontSize, font: font });  // Mes (ya viene en número)
                    page.drawText(anio, { x: 450, y: 584, size: fontSize, font: font });

                }

                function llenarPagina4() {
                    if (pages.length < 4) return;
                    let page = pages[3];

                    // Obtener el contenido del textarea
                    let descripcion = document.getElementById("descripcion_mejora").value;

                    // Definir límites y formato del texto en el PDF
                    let startX = 83;  // Posición horizontal
                    let startY = 620; // Posición inicial en el PDF
                    let maxWidth = 450; // Ancho máximo del texto antes de hacer un salto de línea
                    let lineHeight = 22; // 🔹 Espaciado entre líneas aumentado

                    // Dividir el texto en líneas según el ancho permitido
                    let palabras = descripcion.split(" ");
                    let lineaActual = "";

                    palabras.forEach((palabra) => {
                        let lineaConPalabra = lineaActual + " " + palabra;
                        let anchoTexto = font.widthOfTextAtSize(lineaConPalabra, 12);

                        if (anchoTexto < maxWidth) {
                            lineaActual = lineaConPalabra; // Seguir agregando palabras a la misma línea
                        } else {
                            // Imprimir la línea en el PDF y pasar a la siguiente
                            page.drawText(lineaActual.trim(), { x: startX, y: startY, size: 12, font: font });
                            startY -= lineHeight; // 🔹 Bajar más para dar más espacio
                            lineaActual = palabra; // Iniciar una nueva línea con la palabra que no cupo antes
                        }
                    });

                    // Imprimir la última línea restante si hay contenido
                    if (lineaActual.trim() !== "") {
                        page.drawText(lineaActual.trim(), { x: startX, y: startY, size: 12, font: font });
                    }

                    let nombreCompleto = [nombre, apellido_paterno, apellido_materno].filter(Boolean).join(" ").toUpperCase();
                    page.drawText(nombreCompleto, { x: 210, y: 247, size: fontSize, font: font });
                    page.drawText(nss, { x: 125, y: 155, size: fontSize, font: font });


                }

                function llenarPagina5() {
                    if (pages.length < 5) return;
                    let page = pages[4];

                    let nombreCompleto = [nombre, apellido_paterno, apellido_materno].filter(Boolean).join(" ").toUpperCase();
                    page.drawText(nombreCompleto, { x: 90, y: 527, size: fontSize, font: font });
                    page.drawText(nss, { x: 267, y: 493.5, size: fontSize, font: font });

                    let direccionArray = [];

                    if (no_ext) direccionArray.push(`No. EXT: ${no_ext}`);
                    if (no_int) direccionArray.push(`No. INT: ${no_int}`);
                    if (lote) direccionArray.push(`Lote: ${lote}`);
                    if (mza) direccionArray.push(`Mza: ${mza}`);

                    let direccionTexto = direccionArray.join("   "); // Agrega más espacios entre los datos

                    if (direccionTexto) {
                        page.drawText(calle + ", " + direccionTexto + ", " + colonia, { x: 87, y: 435, size: fontSize, font: font });
                    }
                    // Obtener el contenido del textarea
                    let descripcion = document.getElementById("descripcion_mejora").value.trim();

                    // Definir límites y formato del texto en el PDF
                    let startX = 83;         // Posición horizontal
                    let startY = 347;        // Posición vertical inicial
                    let maxWidth = 450;      // Ancho máximo antes de hacer salto de línea
                    let lineHeight = 27;     // Espaciado entre líneas

                    // Función para dividir el texto en líneas respetando el ancho máximo
                    function dividirTextoEnLineas(texto, font, fontSize, maxWidth) {
                        let palabras = texto.split(/\s+/);
                        let lineas = [];
                        let lineaActual = "";

                        palabras.forEach(palabra => {
                            let testLine = lineaActual ? `${lineaActual} ${palabra}` : palabra;
                            let anchoTexto = font.widthOfTextAtSize(testLine, fontSize);

                            if (anchoTexto < maxWidth) {
                                lineaActual = testLine;
                            } else {
                                if (lineaActual) lineas.push(lineaActual);
                                lineaActual = palabra;
                            }
                        });

                        // Agregar la última línea que quedó pendiente
                        if (lineaActual) {
                            lineas.push(lineaActual);
                        }

                        return lineas;
                    }

                    // Usar la función para dividir el texto
                    let lineas = dividirTextoEnLineas(descripcion, font, 12, maxWidth);

                    // Dibujar cada línea en el PDF
                    lineas.forEach(linea => {
                        page.drawText(linea, {
                            x: startX,
                            y: startY,
                            size: 12,
                            font: font
                        });
                        startY -= lineHeight;
                    });

                    page.drawText(municipio + ", " + entidad + ". C.P. " + codigo_postal, { x: 87, y: 410, size: fontSize, font: font });

                    function formatoMoneda(monto) {
                        return new Intl.NumberFormat("es-MX", {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        }).format(monto);
                    }

                    // Obtener los valores de los inputs
                    let monto1 = document.getElementById("monto_credito1").value || "000";
                    let monto2 = document.getElementById("monto_credito2").value || "000";
                    let monto3 = document.getElementById("monto_credito3").value || "00";

                    // Concatenar y convertir a número
                    let montoCompleto = `${monto1}${monto2}.${monto3}`;
                    let montoFinal = parseFloat(montoCompleto);

                    // **Redondear SIEMPRE hacia arriba al millar más cercano**
                    montoFinal = Math.ceil(montoFinal / 1000) * 1000;

                    // Formatear como moneda
                    let totalMonto = formatoMoneda(montoFinal);

                    // Imprimir en el PDF
                    page.drawText(totalMonto, { x: 120, y: 180, size: 20, font: font });


                    let ciudadFinal = (manifiesto_ciudad === "otro") ? otro_ciudad : manifiesto_ciudad;

                    // Formatear la fecha
                    let { dia, mes, anio_all } = formatearFecha(manifiesto_fecha);

                    page.drawText(
                        (dia.toString() + " " + "DE " + mes + " " + "DEl " + anio_all).toUpperCase(),
                        { x: 250, y: 110, size: 13, font: font }
                    );
                    /*  page.drawText(mes, { x: 393, y: 203, size: fontSize, font: font });
                     page.drawText(anio, { x: 533, y: 203, size: fontSize, font: font }); */

                }

                // **Ejecutar las funciones para llenar cada página**
                llenarPagina1();
                llenarPagina2();
                llenarPagina3();
                llenarPagina4();
                llenarPagina5();

                // **Guardar y descargar el PDF**
                const pdfBytes = await pdfDoc.save();
                const blob = new Blob([pdfBytes], { type: "application/pdf" });

                const link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                link.download = "Formulario_Completado.pdf";
                link.click();

                // document.querySelector('form').submit();
                // Continúa la manipulación del PDF...
            } catch (error) {
                console.error("Error al generar el PDF:", error);
            }
        }

    </script>


</body>

</html>