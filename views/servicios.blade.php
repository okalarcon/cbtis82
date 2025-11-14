<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios | Beauty by Val & Yare ✨</title>
  <script type="module" src="{{ Vite::asset('resources/js/app.jsx') }}"></script>
  <link href="{{ Vite::asset('resources/css/app.css') }}" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      line-height: 1.6;
      background: #f9f9f9;
    }

    /* Navbar */
    nav {
      background: white;
      padding: 1rem 2rem;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    nav .container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav h1 {
      color: #d63384;
      font-size: 1.5rem;
    }

    nav div {
      display: flex;
      gap: 1.5rem;
      align-items: center;
    }

    nav a {
      color: #333;
      text-decoration: none;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #d63384;
    }

    nav button {
      background: none;
      border: none;
      color: #d63384;
      cursor: pointer;
      font-size: 0.95rem;
      text-decoration: underline;
      font-family: 'Poppins', sans-serif;
    }

    /* Header Section */
    .header {
      background: linear-gradient(135deg, #f8c1d8 0%, #f6a6c1 100%);
      padding: 3rem 2rem;
      text-align: center;
    }

    .header h2 {
      font-size: 2.5rem;
      color: white;
      margin-bottom: 0.5rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .header p {
      color: rgba(255, 255, 255, 0.9);
      font-size: 1.1rem;
    }

    /* Container */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
    }

    /* Servicios Grid */
    .servicios-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin: 3rem 0;
    }

    .servicio-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .servicio-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .servicio-header {
      background: linear-gradient(135deg, #f8c1d8, #f6a6c1);
      padding: 2rem;
      text-align: center;
    }

    .servicio-emoji {
      font-size: 3rem;
      margin-bottom: 0.5rem;
    }

    .servicio-header h3 {
      color: white;
      font-size: 1.5rem;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    .servicio-content {
      padding: 2rem;
    }

    .servicio-content h4 {
      color: #d63384;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    .servicio-content p {
      color: #666;
      font-size: 0.95rem;
      margin-bottom: 1rem;
      line-height: 1.6;
    }

    .precio-servicio {
      font-size: 1.8rem;
      color: #e85a9b;
      font-weight: bold;
      margin: 1rem 0;
    }

    .btn-reservar {
      background: #e85a9b;
      color: white;
      border: none;
      padding: 0.9rem 2rem;
      border-radius: 25px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s;
      width: 100%;
      font-size: 1rem;
      font-family: 'Poppins', sans-serif;
    }

    .btn-reservar:hover {
      background: #d63384;
    }

    /* Footer */
    footer {
      background: #333;
      color: white;
      text-align: center;
      padding: 2rem;
      margin-top: 3rem;
    }

    footer p {
      margin: 0.5rem 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .header h2 {
        font-size: 1.8rem;
      }

      .servicios-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="container">
      <h1>💄 Beauty by Val & Yare</h1>
      <div>
        <a href="/servicios">Servicios</a>
        <a href="/tienda">Tienda</a>
        <form action="/logout" method="POST" style="display: inline;">
          @csrf
          <button type="submit">Cerrar sesión</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <div class="header">
    <h2>Nuestros Servicios ✨</h2>
    <p>Maquillaje profesional para cualquier ocasión</p>
  </div>

  <!-- Contenido Principal -->
  <div class="container">
    <div class="servicios-grid">
      <!-- Maquillaje Nupcial -->
      <div class="servicio-card">
        <div class="servicio-header">
          <div class="servicio-emoji">💒</div>
          <h3>Maquillaje Nupcial</h3>
        </div>
        <div class="servicio-content">
          <h4>Tu día especial merece lo mejor</h4>
          <p>Maquillaje profesional para novias. Acabado duradero y resistente a lágrimas y calor. Realzamos tu belleza natural para que brilles en tu gran día.</p>
          <div class="precio-servicio">$80.00</div>
          <button class="btn-reservar" onclick="reservar('Maquillaje Nupcial')">Reservar Ahora</button>
        </div>
      </div>

      <!-- Maquillaje de Evento -->
      <div class="servicio-card">
        <div class="servicio-header">
          <div class="servicio-emoji">🎉</div>
          <h3>Maquillaje de Evento</h3>
        </div>
        <div class="servicio-content">
          <h4>Destaca en cualquier celebración</h4>
          <p>Maquillaje profesional para fiestas, galas y eventos especiales. Diseños personalizados que complementan tu outfit y hacen que destagues.</p>
          <div class="precio-servicio">$60.00</div>
          <button class="btn-reservar" onclick="reservar('Maquillaje de Evento')">Reservar Ahora</button>
        </div>
      </div>

      <!-- Maquillaje Fotográfico -->
      <div class="servicio-card">
        <div class="servicio-header">
          <div class="servicio-emoji">📸</div>
          <h3>Maquillaje Fotográfico</h3>
        </div>
        <div class="servicio-content">
          <h4>Perfecto para la cámara</h4>
          <p>Maquillaje especial para sesiones fotográficas, garantizando colores vibrantes que se ven perfecto en cámara y en fotos profesionales.</p>
          <div class="precio-servicio">$55.00</div>
          <button class="btn-reservar" onclick="reservar('Maquillaje Fotográfico')">Reservar Ahora</button>
        </div>
      </div>

      <!-- Maquillaje Diario -->
      <div class="servicio-card">
        <div class="servicio-header">
          <div class="servicio-emoji">💄</div>
          <h3>Maquillaje Diario</h3>
        </div>
        <div class="servicio-content">
          <h4>Look natural y elegante</h4>
          <p>Maquillaje sutil y sofisticado para tu día a día. Nos enfocamos en realzar tus facciones de manera natural y cómoda.</p>
          <div class="precio-servicio">$45.00</div>
          <button class="btn-reservar" onclick="reservar('Maquillaje Diario')">Reservar Ahora</button>
        </div>
      </div>

      <!-- Maquillaje Artístico -->
      <div class="servicio-card">
        <div class="servicio-header">
          <div class="servicio-emoji">🎭</div>
          <h3>Maquillaje Artístico</h3>
        </div>
        <div class="servicio-content">
          <h4>Creatividad sin límites</h4>
          <p>Diseños creativos y personalizados. Desde looks edgy hasta diseños fantásticos, creamos el maquillaje que imaginaste.</p>
          <div class="precio-servicio">$70.00</div>
          <button class="btn-reservar" onclick="reservar('Maquillaje Artístico')">Reservar Ahora</button>
        </div>
      </div>

      <!-- Asesoría de Imagen -->
      <div class="servicio-card">
        <div class="servicio-header">
          <div class="servicio-emoji">💅</div>
          <h3>Asesoría de Imagen</h3>
        </div>
        <div class="servicio-content">
          <h4>Encuentra tu mejor versión</h4>
          <p>Consultaría personalizada para encontrar los colores y estilos que mejor te favorecen. Aprende técnicas y trucos de maquillaje.</p>
          <div class="precio-servicio">$50.00</div>
          <button class="btn-reservar" onclick="reservar('Asesoría de Imagen')">Reservar Ahora</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Beauty by Val & Yare. Todos los derechos reservados.</p>
    <p>Hecho con 💖 para ti</p>
  </footer>

  <script>
    function reservar(servicio) {
      alert(`¡Has reservado: ${servicio}\n\nEn breve te contactaremos para confirmar tu reserva. 💕`);
      // Aquí después puedes conectar con una base de datos o enviar a una página de confirmación
    }
  </script>
</body>
</html>
