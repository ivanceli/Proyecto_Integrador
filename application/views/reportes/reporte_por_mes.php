<body>
    <div class="container mt-5">
        <h1 class="text-center">Reporte de Ventas por Mes</h1>
        <canvas id="ventasChart" class="mt-4" style="background-color: white;"></canvas>
    </div>

    <!-- Agregar el plugin Chart.js Datalabels -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    
    <script>
        const ctx = document.getElementById('ventasChart').getContext('2d');
        const ventasData = {
            labels: [
                <?php
                foreach ($ventas as $venta) {
                    echo '"' . $venta->mes . '/' . $venta->anio . '",';
                }
                ?>
            ],
            datasets: [{
                label: 'Ventas Totales ($)',
                data: [
                    <?php
                    foreach ($ventas as $venta) {
                        echo $venta->total . ',';
                    }
                    ?>
                ],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',  // Color de las barras
                borderColor: 'rgba(75, 192, 192, 1)',  // Color del borde de las barras
                borderWidth: 1
            }]
        };

        const ventasChart = new Chart(ctx, {
            type: 'bar',
            data: ventasData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true
                    },
                    datalabels: {
                        anchor: 'end',  // Anclar las etiquetas al final de la barra
                        align: 'top',   // Alinear las etiquetas en la parte superior de la barra
                        color: 'black', // Color del texto
                        font: {
                            weight: 'bold',
                            size: 12
                        },
                        formatter: function(value) {
                            return '$' + value.toFixed(2);  // Formatear los valores como moneda
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
            plugins: [ChartDataLabels]  // Habilitar el plugin para mostrar las etiquetas de datos
        });
    </script>
</body>
