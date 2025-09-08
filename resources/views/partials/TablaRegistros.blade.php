<div class="overflow-x-auto  overflow-x-hidden overflow-y-hidden">
    <table id="example" class="min-w-full table-auto border border-gray-300 overflow-hidden rounded-lg">
        <thead class="bg-[#eeeeee] text-black sticky top-0 z-10">
            <tr>
                <th class="px-6 py-3 text-left w-12">#</th> <!-- Columna de enumeración -->
                <th class="px-6 py-3 text-left">NSS</th>
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
            @foreach ($listaRegistros as $registros)
                <!-- Fila 1 -->
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 w-12">{{ $registros->id }}</td>
                    <td class="px-6 py-4">{{ $registros->nss }}</td>
                    <td class="px-6 py-4">{{ $registros->apellido_paterno }}</td>
                    <td class="px-6 py-4">{{ $registros->apellido_materno }}</td>
                    <td class="px-6 py-4">{{ $registros->nombre }}</td>
                    <td class="px-6 py-4">{{ $registros->curp }}</td>
                    <td class="px-6 py-4">{{ $registros->rfc }}</td>
                    <td class="px-6 py-4">{{ $registros->tipo_identificacion }}</td>
                    <td class="px-6 py-4">{{ $registros->identificacion }}</td>
                    <td class="px-6 py-4">{{ $registros->fecha_expedicion_identificacion }}</td>
                    <td class="px-6 py-4">{{ $registros->telefono_prefijo }}{{ $registros->telefono_fijo }}</td>
                    <td class="px-6 py-4">{{ $registros->telefono_celular }}</td>
                    <td class="px-6 py-4">{{ $registros->genero }}</td>
                    <td class="px-6 py-4">{{ $registros->email }}</td>
                    <td class="px-6 py-4">{{ $registros->estado_civil }}</td>

                    <td class="px-6 py-4">{{ $registros->datosempresa->first()->nombre_empresa ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $registros->datosempresa->first()->registro_patronal ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $registros->datosempresa->first()->telefono_prefijo."-".$registros->datosempresa->first()->telefono_numero ?? 'N/A'}}</td>
                    <td class="px-6 py-4">{{ $registros->datosvivienda->first()->calle ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $registros->datosvivienda->first()->colonia ?? 'N/A' }}</td>
                    <td class="px-6 py-4">{{ $registros->datosvivienda->first()->codigo_postal ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-center">
                        <button
                            class="status completed bg-red-200 text-yellow-700 px-3 py-1 rounded-lg text-sm hover:shadow-md transition duration-200 cursor-pointer" href="formulario/{{$registros->id}}">
                            Editar
                        </button><br>
                        <button
                            class="status pending bg-red-200 text-yellow-700 px-3 py-1 rounded-lg text-sm hover:shadow-md transition duration-200 cursor-pointer">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
