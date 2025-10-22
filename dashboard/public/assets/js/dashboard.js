document.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('pedidosChart').getContext('2d');

            // Crear degradado para el relleno de la línea
            const gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, 'rgba(13, 110, 253, 0.4)');
            gradient.addColorStop(1, 'rgba(13, 110, 253, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                    datasets: [{
                        label: 'Pedidos',
                        data: [120, 190, 150, 220, 270, 300],
                        borderColor: '#0d6efd',
                        backgroundColor: gradient,
                        fill: true,
                        tension: 0.4,          // Curva suave
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#0d6efd',
                        pointRadius: 6,
                        pointHoverRadius: 8,
                        borderWidth: 3
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false },
                        tooltip: { mode: 'index', intersect: false }
                    },
                    interaction: {
                        mode: 'nearest',
                        intersect: false
                    },
                    scales: {
                        y: { beginAtZero: true, grid: { color: '#e0e0e0' } },
                        x: { grid: { color: '#e0e0e0' } }
                    }
                }
            });
        });
