<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Ventas por Producto</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Reporte: 5 Productos Más Vendidos</h2>

    <canvas id="graficoProductos" width="300" height="300"></canvas>

    <script>
        var ctx = document.getElementById('graficoProductos').getContext('2d');
        
        var productos = <?= json_encode(array_column($reporte, 'producto')) ?>;
        var cantidades = <?= json_encode(array_column($reporte, 'total_vendido')) ?>;
        
        var grafico = new Chart(ctx, {
            type: 'doughnut', 
            data: {
                labels: productos, 
                datasets: [{
                    data: cantidades,
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50', '#9966FF'],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: false,  
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        labels: {
                            color: 'black',
                            font: { size: 14 },
                            boxWidth: 20,
                            padding: 10
                        }
                    },
                    tooltip: {
                        backgroundColor: 'white',  
                        titleColor: 'black',
                        bodyColor: 'black',
                        borderColor: 'black',
                        borderWidth: 1
                    }
                }
            }
        });
    </script>
</body>
</html>
