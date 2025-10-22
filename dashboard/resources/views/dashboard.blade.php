<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Analítico</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <header>
        <h1>Dashboard Jose</h1>
        <div class="search-bar">
            <input type="text" placeholder="Buscar datos...">
            <i class="fas fa-search"></i>
        </div>
    </header>

    <main class="dashboard-container">
        <section class="stats-grid">
            <div class="stat-card">
                <div>
                    <h3>Clientes</h3>
                    <p>87</p>
                </div>
                <i class="fas fa-user-check stat-icon"></i>
            </div>

            <div class="stat-card">
                <div>
                    <h3>Pedidos</h3>
                    <p>356</p>
                </div>
                <i class="fas fa-shopping-cart stat-icon"></i>
            </div>

            <div class="stat-card">
                <div>
                    <h3>Inventario</h3>
                    <p>24</p>
                </div>
                <i class="fas fa-warehouse stat-icon"></i>
            </div>

            <div class="stat-card">
                <div>
                    <h3>Ganancias</h3>
                    <p>$2,340</p>
                </div>
                <i class="fas fa-coins stat-icon"></i>
            </div>
        </section>

        <section class="chart-card">
            <h2>Pedidos Mensuales</h2>
            <canvas id="pedidosChart"></canvas>
        </section>

        <section class="table-card">
            <h2>Usuarios Recientes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ana Torres</td>
                        <td>ana@correo.com</td>
                        <td>Administrador</td>
                    </tr>
                    <tr>
                        <td>Luis Martínez</td>
                        <td>luis@correo.com</td>
                        <td>Usuario</td>
                    </tr>
                    <tr>
                        <td>Carla Ríos</td>
                        <td>carla@correo.com</td>
                        <td>Usuario</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

<script src="{{ asset('assets/js/dashboard.js') }}" defer></script>
</body>

</html>
