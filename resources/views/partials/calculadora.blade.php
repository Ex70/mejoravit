{{-- <div class="overflow-x-auto  overflow-x-hidden overflow-y-hidden">
    
</div> --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador Crédito Mejoravit</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-alert: #FFF3F3;
            --color-alert-border: #FFD6D6;
            --color-alert-text: #D14343;
            --color-success: #F0FFF4;
            --color-success-border: #C6F6D5;
            --color-success-text: #2F855A;
            --color-benefits: #F0F9FF;
            --color-benefits-border: #BEE3F8;
            --color-benefits-text: #2B6CB0;
            --color-summary: #EBF8FF;
            --color-summary-border: #BEE3F8;
            --color-summary-text: #2C5282;
            --color-dark: #2D3748;
            --color-gray: #718096;
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F7FAFC;
            color: var(--color-dark);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            color: var(--color-dark);
            margin-bottom: 10px;
        }

        .calculator-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--color-gray);
        }

        input, select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            background-color: white;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #4299E1;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.2);
        }

        button {
            background-color: #2B6CB0;
            color: white;
            border: none;
            padding: 14px 25px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 10px;
            box-shadow: var(--shadow-md);
        }

        button:hover {
            background-color: #2C5282;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .results-container {
            display: none;
            margin-top: 40px;
        }

        .result-card {
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: var(--shadow-md);
        }

        .alert-card {
            background-color: var(--color-alert);
            border: 1px solid var(--color-alert-border);
            color: var(--color-alert-text);
        }

        .success-card {
            background-color: var(--color-success);
            border: 1px solid var(--color-success-border);
            color: var(--color-success-text);
        }

        .benefits-card {
            background-color: var(--color-benefits);
            border: 1px solid var(--color-benefits-border);
            color: var(--color-benefits-text);
        }

        .summary-card {
            background-color: var(--color-summary);
            border: 1px solid var(--color-summary-border);
            color: var(--color-summary-text);
            text-align: center;
        }

        .interest-analysis {
            background-color: #FFF8E1;
            border: 1px solid #FFE082;
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
        }

        .interest-title {
            font-weight: 600;
            margin-bottom: 10px;
            color: #5F370E;
        }

        .interest-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .interest-label {
            font-weight: 500;
        }

        .interest-value {
            font-weight: 600;
        }

        .result-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .result-title svg {
            margin-right: 10px;
        }

        .result-item {
            margin-bottom: 15px;
            font-size: 15px;
            display: flex;
        }

        .result-item svg {
            margin-right: 10px;
            flex-shrink: 0;
        }

        .result-value {
            font-weight: 500;
            color: var(--color-dark);
            margin-left: 5px;
        }

        .benefit-item {
            margin-bottom: 12px;
            position: relative;
            padding-left: 25px;
            font-size: 15px;
        }

        .benefit-item:before {
            content: "✓";
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .summary-text {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .highlight {
            font-weight: 600;
            font-size: 17px;
        }

        @media (max-width: 768px) {
            .calculator-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Simulador de Crédito Mejoravit</h1>
            <p>Compare las opciones y tome la mejor decisión para su patrimonio</p>
        </header>

        <div class="calculator-grid">
            <div class="form-group">
                <label for="monto">Monto del Crédito (máx. $200,000)</label>
                <input type="number" id="monto" max="200000" min="1" value="108947.59" required>
            </div>
            
            <div class="form-group">
                <label for="plazo">Plazo (años)</label>
                <select id="plazo">
                    <option value="1">1 año (12 meses)</option>
                    <option value="2">2 años (24 meses)</option>
                    <option value="3">3 años (36 meses)</option>
                    <option value="4">4 años (48 meses)</option>
                    <option value="5">5 años (60 meses)</option>
                    <option value="6">6 años (72 meses)</option>
                    <option value="7">7 años (84 meses)</option>
                    <option value="8">8 años (96 meses)</option>
                    <option value="9">9 años (108 meses)</option>
                    <option value="10" selected>10 años (120 meses)</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="aportacion">Aportación Patronal Mensual</label>
                <input type="number" id="aportacion" min="0" value="1000">
            </div>
            
            <div class="form-group">
                <label for="porcentaje">Porcentaje para Facturación (0-99)</label>
                <input type="number" id="porcentaje" min="0" max="99" value="16">
            </div>
        </div>

        <button onclick="calcular()">Calcular Escenarios</button>

        <div id="results" class="results-container">
            <!-- Columna 1: Crédito sin justificar -->
            <div class="result-card alert-card">
                <h2 class="result-title">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8V12M12 16H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Crédito sin justificar
                </h2>
                
                <div class="result-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8V12M12 16H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Pagas <span class="result-value" id="pagoTotalSin"></span> en <span id="plazoSin"></span>
                </div>
                
                <div class="result-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 7V3M16 7V3M7 11H17M5 21H19C20.1046 21 21 20.1046 21 19V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V19C3 20.1046 3.89543 21 5 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Mensualidad fija: <span class="result-value" id="mensualidadSin"></span>
                </div>
                
                <div class="result-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 7H21M21 7V15M21 7L13 15L9 11L3 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Infonavit gana <span class="result-value" id="interesesSin"></span> solo en intereses
                </div>
                
                <div class="result-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 3V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 7H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 12H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Además, recibe <span class="result-value" id="aportacionesSin"></span> de aportaciones patronales
                </div>
                
                <div class="result-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 9V11M12 15V15.01M5 7H19C20.1046 7 21 7.89543 21 9V15C21 16.1046 20.1046 17 19 17H5C3.89543 17 3 16.1046 3 15V9C3 7.89543 3.89543 7 5 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Ganancia total para Infonavit: <span class="result-value" id="gananciaTotalSin"></span> si no justificas tu crédito
                </div>
            </div>

            <!-- Columna 2: Crédito justificado -->
            <div class="result-card success-card">
                <h2 class="result-title">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Crédito justificado (estrategia adecuada)
                </h2>
                
                <div class="result-item">
                    Solicitas el crédito de remodelación por <span class="result-value" id="montoCredito"></span>
                </div>
                
                <div class="result-item">
                    Inviertes en la compra de facturas y dictamen en positivo: <span class="result-value" id="montoFacturacion"></span> (<span id="porcentajeFactura"></span>% del crédito)
                </div>
                
                <div class="result-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 9V7C17 5.89543 16.1046 5 15 5H5C3.89543 5 3 5.89543 3 7V15C3 16.1046 3.89543 17 5 17H15C16.1046 17 17 16.1046 17 15V13M21 3H11M21 3L15 9M21 3V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Te quedas con <span class="result-value" id="montoDisponible"></span> para uso libre (efectivo para ti)
                </div>
                
                <p style="margin: 20px 0 10px 0; font-weight: 500;">Los beneficios inmediatos son:</p>
                
                <div class="result-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Pagas solo <span class="result-value" id="pagoTotalCon"></span> en <span id="plazoCon"></span>
                </div>
                
                <div id="beneficioContainer"></div>
                <div id="interestAnalysisContainer"></div>
            </div>

            <!-- Columna 3: Beneficios -->
            <div class="result-card benefits-card">
                <h2 class="result-title">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8V12V8ZM12 16H12.01H12ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    ¿Por qué te conviene justificar tu crédito?
                </h2>
                
                <div class="benefit-item">
                    Terminas de pagar <span id="mesesAntes"></span> antes (que equivale a <span id="diferenciaPlazo"></span>)
                </div>
                
                <div class="benefit-item">
                    Ahorro del <span id="porcentajeAhorro"></span>% en intereses
                </div>
                
                <div class="benefit-item">
                    Usas tu propio ahorro de forma inteligente
                </div>
                
                <div class="benefit-item">
                    Conviertes tu crédito en efectivo con tasa de interés del <span id="tasaEfectiva"></span>
                </div>
                
                <div class="benefit-item">
                    Tú decides en qué usarlo: remodelar, invertir, emprender o salir de deudas
                </div>
            </div>

            <!-- Columna 4: Resumen -->
            <div class="result-card summary-card">
                <h2 class="result-title">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    En resumen
                </h2>
                
                <p class="summary-text">¡Pagas menos, usas mejor tu dinero y terminas antes! 🙌</p>
                <p class="highlight">La estrategia correcta hace que tú ganes, no el sistema.</p>
            </div>
        </div>
    </div>

    <script>
        function mesesAAnosYMeses(meses) {
            const anos = Math.floor(meses / 12);
            const mesesRestantes = meses % 12;
            return `${anos} año${anos !== 1 ? 's' : ''} y ${mesesRestantes} mes${mesesRestantes !== 1 ? 'es' : ''}`;
        }

        function formatoMoneda(num) {
            return '$' + num.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function calcularTasaInteresAmortizado(capital, totalPagado, plazoMeses) {
            // Método de aproximación para calcular la tasa de interés mensual
            const pagoMensual = totalPagado / plazoMeses;
            let tasa = 0.01; // Valor inicial (1%)
            let precision = 0.00001;
            let diferencia = 1;
            let iteraciones = 0;
            const maxIteraciones = 100;

            function calcularNPV(t) {
                let npv = -capital;
                for (let i = 1; i <= plazoMeses; i++) {
                    npv += pagoMensual / Math.pow(1 + t, i);
                }
                return npv;
            }

            while (diferencia > precision && iteraciones < maxIteraciones) {
                const npv = calcularNPV(tasa);
                const npvPrime = calcularNPV(tasa + 0.0001);
                const derivada = (npvPrime - npv) / 0.0001;
                
                const nuevaTasa = tasa - npv / derivada;
                diferencia = Math.abs(nuevaTasa - tasa);
                tasa = nuevaTasa;
                iteraciones++;
            }

            const tasaMensual = tasa;
            const tasaAnual = (Math.pow(1 + tasaMensual, 12) - 1) * 100;
            const costoTotal = ((totalPagado - capital) / capital * 100);

            return {
                tasaMensual: (tasaMensual * 100).toFixed(2),
                tasaAnual: tasaAnual.toFixed(2),
                costoTotal: costoTotal.toFixed(2),
                pagoMensual: pagoMensual.toFixed(2)
            };
        }

        function calcular() {
            const monto = parseFloat(document.getElementById('monto').value) || 108947.59;
            const plazoAnos = parseInt(document.getElementById('plazo').value);
            const aportacion = parseFloat(document.getElementById('aportacion').value) || 1000;
            const porcentaje = parseInt(document.getElementById('porcentaje').value) || 16;
            const tasaAnual = 0.11;
            const tasaMensual = tasaAnual / 12;

            // Validaciones
            if (isNaN(monto) || monto <= 0 || monto > 200000) {
                alert('Por favor, ingrese un monto válido (máx. $200,000).');
                return;
            }
            if (isNaN(porcentaje) || porcentaje < 0 || porcentaje > 99) {
                alert('Por favor, ingrese un porcentaje válido (0-99).');
                return;
            }

            // Mostrar resultados
            document.getElementById('results').style.display = 'block';

            // CORRECCIÓN: Array con los meses correctos para cada año (1-10 años)
            const mesesPorAno = [12, 24, 36, 48, 60, 72, 84, 96, 108, 120];
            const meses = mesesPorAno[plazoAnos - 1];

            // Cálculo sin justificación
            const pagoMensual = (monto * tasaMensual) / (1 - Math.pow(1 + tasaMensual, -meses));
            const montoTotalSinAportacion = pagoMensual * meses;

            // Cálculo con justificación
            let saldo = monto;
            let montoTotalConAportacion = 0;
            let mesesConAportacion = 0;
            while (saldo > 0 && mesesConAportacion < meses) {
                const interesMensual = saldo * tasaMensual;
                const abonoCapital = pagoMensual - interesMensual;
                saldo -= abonoCapital;
                if (aportacion > 0) saldo -= aportacion;
                montoTotalConAportacion += pagoMensual;
                mesesConAportacion++;
                if (saldo <= 0) break;
            }
            if (saldo < 0) montoTotalConAportacion += saldo;

            // Cálculos adicionales
            const montoFacturacion = monto * (porcentaje / 100);
            const montoDisponible = monto - montoFacturacion;
            const beneficioNeto = montoDisponible - montoTotalConAportacion;
            const totalAportadoPatron = aportacion * meses;
            const interesesInfonavit = montoTotalSinAportacion - monto;
            const gananciaTotalInfonavit = interesesInfonavit + totalAportadoPatron;
            const porcentajeAhorro = 100 * (1 - (montoTotalConAportacion / montoTotalSinAportacion));
            
            // Conversión de meses a años y meses
            const mesesDiferencia = meses - mesesConAportacion;
            const diferenciaPlazo = mesesAAnosYMeses(mesesDiferencia);
            const plazoJustificado = mesesAAnosYMeses(mesesConAportacion);
            const plazoOriginal = mesesAAnosYMeses(meses);
            
            // Cálculo de tasa de interés efectiva
            const tasaEfectiva = (porcentajeAhorro / 100 * tasaAnual).toFixed(2);
            
            // Actualizar la interfaz
            document.getElementById('pagoTotalSin').textContent = formatoMoneda(montoTotalSinAportacion);
            document.getElementById('plazoSin').textContent = `${meses} meses (${plazoOriginal})`;
            document.getElementById('mensualidadSin').textContent = formatoMoneda(pagoMensual);
            document.getElementById('interesesSin').textContent = formatoMoneda(interesesInfonavit);
            document.getElementById('aportacionesSin').textContent = formatoMoneda(totalAportadoPatron);
            document.getElementById('gananciaTotalSin').textContent = formatoMoneda(gananciaTotalInfonavit);
            
            document.getElementById('montoCredito').textContent = formatoMoneda(monto);
            document.getElementById('montoFacturacion').textContent = formatoMoneda(montoFacturacion);
            document.getElementById('porcentajeFactura').textContent = porcentaje;
            document.getElementById('montoDisponible').textContent = formatoMoneda(montoDisponible);
            document.getElementById('pagoTotalCon').textContent = formatoMoneda(montoTotalConAportacion);
            document.getElementById('plazoCon').textContent = `${mesesConAportacion} meses (${plazoJustificado})`;
            
            document.getElementById('mesesAntes').textContent = mesesDiferencia;
            document.getElementById('diferenciaPlazo').textContent = diferenciaPlazo;
            document.getElementById('porcentajeAhorro').textContent = porcentajeAhorro.toFixed(2);
            document.getElementById('tasaEfectiva').textContent = `${tasaEfectiva}%`;

            // Mostrar el beneficio o el análisis de préstamo
            const beneficioContainer = document.getElementById('beneficioContainer');
            const interestAnalysisContainer = document.getElementById('interestAnalysisContainer');
            
            if (beneficioNeto >= 0) {
                beneficioContainer.innerHTML = `
                    <div class="result-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 7H21M21 7V15M21 7L13 15L9 11L3 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Obtienes ${formatoMoneda(beneficioNeto)} dinero en beneficio para ti
                    </div>
                `;
                interestAnalysisContainer.innerHTML = '';
            } else {
                const diferencia = montoTotalConAportacion - montoDisponible;
                const detallesPrestamo = calcularTasaInteresAmortizado(montoDisponible, montoTotalConAportacion, mesesConAportacion);
                
                beneficioContainer.innerHTML = `
                    <div class="result-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 7H21M21 7V15M21 7L13 15L9 11L3 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Pagas ${formatoMoneda(diferencia)} más de lo que recibiste
                    </div>
                `;
                
                interestAnalysisContainer.innerHTML = `
                    <div class="interest-analysis">
                        <div class="interest-title">Convertiste tu crédito para remodelación en un préstamo de dinero con la siguiente tasa de interés:</div>
                        <div class="interest-item">
                            <span class="interest-label">Tasa mensual estimada</span>
                            <span class="interest-value">${detallesPrestamo.tasaMensual}%</span>
                        </div>
                        <div class="interest-item">
                            <span class="interest-label">Tasa anual estimada</span>
                            <span class="interest-value">${detallesPrestamo.tasaAnual}%</span>
                        </div>
                        <div class="interest-item">
                            <span class="interest-label">Costo total en intereses</span>
                            <span class="interest-value">${detallesPrestamo.costoTotal}% del capital</span>
                        </div>
                    </div>
                `;
            }
        }
    </script>
</body>
</html>