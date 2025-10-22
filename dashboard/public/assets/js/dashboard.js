const ctx = document.getElementById('pedidosChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        datasets: [{
            label: 'Pedidos',
            data: [120, 190, 150, 220, 270, 300],
            backgroundColor: 'rgba(13, 110, 253, 0.6)',
            borderRadius: 8
        }]
    },
    options: {
        indexAxis: 'y',
        plugins: {
            legend: { display: false }
        },
        scales: {
            x: { beginAtZero: true }
        }
    }
});
