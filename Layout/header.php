<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Betterware</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .header, footer {
            background-color: #e6007e;
            /* color tipo Betterware */
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            flex-wrap: wrap;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 1.4rem;
            margin: 0;
        }

        .nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            margin: 0;
            padding: 0;
        }

        .nav a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav a:hover {
            color: #ffd6e9;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo">
            <!-- <img src="tu-logo.png" alt="Logo Tienda" /> -->
            <h1>Mi Tienda Betterware</h1>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#promos">Promociones</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
