<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda | Beauty by Val & Yare 💄</title>
  <script type="module" src="{{ Vite::asset('resources/js/app.jsx') }}"></script>
  <link href="{{ Vite::asset('resources/css/app.css') }}" rel="stylesheet">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
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

    .carrito-icon {
      position: relative;
      cursor: pointer;
      font-size: 1.3rem;
    }

    .carrito-count {
      position: absolute;
      top: -8px;
      right: -8px;
      background: #e85a9b;
      color: white;
      border-radius: 50%;
      width: 20px;
      height: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.8rem;
      font-weight: bold;
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

    /* Filtros */
    .filtros {
      background: white;
      padding: 2rem;
      margin: 2rem 0;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .filtro-btn {
      padding: 0.7rem 1.5rem;
      border: 2px solid #e85a9b;
      background: white;
      color: #e85a9b;
      border-radius: 25px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s;
    }

    .filtro-btn:hover,
    .filtro-btn.active {
      background: #e85a9b;
      color: white;
    }

    /* Productos Grid */
    .productos-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 2rem;
      margin: 2rem 0;
    }

    .producto-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .producto-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .producto-imagen {
      width: 100%;
      height: 200px;
      background: linear-gradient(135deg, #f8c1d8, #f6a6c1);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
    }

    .producto-info {
      padding: 1.5rem;
    }

    .producto-info h3 {
      color: #d63384;
      margin-bottom: 0.5rem;
      font-size: 1.1rem;
    }

    .producto-info p {
      color: #666;
      font-size: 0.9rem;
      margin-bottom: 0.8rem;
      height: 2.7em;
      overflow: hidden;
    }

    .producto-precio {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 1rem;
    }

    .precio {
      font-size: 1.5rem;
      color: #e85a9b;
      font-weight: bold;
    }

    .btn-comprar {
      background: #e85a9b;
      color: white;
      border: none;
      padding: 0.7rem 1.5rem;
      border-radius: 25px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s;
    }

    .btn-comprar:hover {
      background: #d63384;
    }

    /* Página vacía */
    .vacio {
      text-align: center;
      padding: 3rem;
    }

    .vacio p {
      color: #999;
      font-size: 1.1rem;
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

      .filtros {
        flex-direction: column;
      }

      .productos-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 1rem;
      }
    }

    /* Carrusel destacado */
    .carousel {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      margin: 2rem 0;
      background: #fff;
      box-shadow: 0 6px 25px rgba(0,0,0,0.08);
    }

    .carousel-track {
      display: flex;
      transition: transform 0.45s ease;
      will-change: transform;
    }

    /* Swiper generic slide overrides */
    .swiper { width: 100%; }
    .swiper-slide { display:flex; align-items:center; justify-content:space-between; gap:2rem; padding:2rem; }

    .slide-content {
      flex: 1 1 50%;
      color: #333;
    }

    .slide-content h3 {
      font-size: 1.6rem;
      color: #d63384;
      margin-bottom: 0.6rem;
    }

    .slide-content p { color: #666; margin-bottom: 1rem; }

    .slide-cta { background: #e85a9b; color: white; padding: 0.7rem 1.25rem; border-radius: 999px; text-decoration: none; font-weight: bold; }

    .slide-media { flex: 1 1 40%; display:flex; align-items:center; justify-content:center; height:100%; }

    .slide-media .media-box { width: 220px; height: 220px; border-radius: 12px; background: linear-gradient(135deg,#f8c1d8,#f6a6c1); display:flex; align-items:center; justify-content:center; font-size:3rem; box-shadow: 0 6px 20px rgba(232,90,155,0.12); }

    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0,0,0,0.35);
      border: none;
      color: white;
      padding: 0.6rem 0.9rem;
      border-radius: 50%;
      cursor: pointer;
      z-index: 10;
    }

    .carousel-btn.prev { left: 12px; }
    .carousel-btn.next { right: 12px; }

    .carousel-dots { text-align: center; padding: 0.8rem 0; background: transparent; }
    .carousel-dot { display:inline-block; width:10px; height:10px; border-radius:50%; background:rgba(0,0,0,0.15); margin: 0 6px; cursor:pointer; }
    .carousel-dot.active { background: #e85a9b; }

    @media (max-width: 768px) {
      .carousel-slide { flex-direction: column; height: auto; padding: 1.2rem; }
      .slide-media { margin-top: 1rem; }
      .slide-media .media-box { width: 160px; height: 160px; font-size:2.2rem; }
    }

    /* Carruseles por categoría (multi-item) */
    .category-section { margin: 2.5rem 0; }
    .category-section h2 { color: #d63384; font-size: 1.6rem; margin-bottom: 1rem; }
    .category-carousel-wrapper { position: relative; }
    .category-carousel { display: flex; gap: 1rem; overflow: hidden; scroll-behavior: smooth; padding: 1rem 0; }
    .category-card { min-width: 220px; max-width: 260px; flex: 0 0 230px; background: white; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.06); overflow: hidden; }
    .category-card .producto-imagen { height: 160px; display:flex; align-items:center; justify-content:center; font-size:2.2rem; }
    .category-card .producto-info { padding: 0.9rem; }
    .category-nav { position: absolute; top: 40%; transform: translateY(-50%); background: rgba(0,0,0,0.35); color: #fff; border: none; padding: .5rem .7rem; border-radius: 999px; cursor: pointer; }
    .category-nav.prev { left: 6px; }
    .category-nav.next { right: 6px; }
    @media (max-width: 768px) {
      .category-card { min-width: 160px; flex: 0 0 160px; }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="container">
      <h1>💄 Beauty by Val & Yare</h1>
      <div style="display:flex; align-items:center; gap:1rem;">
        <form action="/search" method="GET" style="display:flex; align-items:center; gap:.5rem;">
          <input name="q" type="search" placeholder="Buscar maquillaje..." style="padding:.45rem .6rem; border-radius:999px; border:1px solid #eee; min-width:180px;">
        </form>
        <a href="/servicios">Servicios</a>
        <a href="/tienda">Tienda</a>
        <a href="/dashboard" title="Mi cuenta">Mi cuenta</a>
        <div style="position:relative;">
          <a href="/cart" class="carrito-icon" title="Carrito">🛒</a>
          <span class="carrito-count">0</span>
        </div>
        <form action="/logout" method="POST" style="display: inline;">
          @csrf
          <button type="submit" style="background: none; border: none; color: #d63384; cursor: pointer; font-size: 0.95rem; text-decoration: underline;">Cerrar sesión</button>
        </form>

        <!-- Selector de idioma simple -->
        <select id="langSelect" aria-label="Cambiar idioma" style="border-radius:8px; padding:.35rem; border:1px solid #eee; background:white;">
          <option value="es">ES</option>
          <option value="en">EN</option>
        </select>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <div class="header">
    <h2>Nuestra Tienda 💋</h2>
    <p>Productos de maquillaje de alta calidad</p>
  </div>

  <!-- Contenido Principal -->

  <!-- Carrusel destacado -->
  <div class="container">
    <!-- Swiper hero -->
    <div class="swiper featured-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-content">
            <h3>Destacado: Labial Matte Rojo</h3>
            <p>Color intenso y acabado mate de larga duración. Ideal para eventos y sesiones fotográficas.</p>
            <a class="slide-cta" href="#productos">Ver productos</a>
          </div>
          <div class="slide-media">
            <div class="media-box">💄</div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-content">
            <h3>Paleta Gold — Nueva llegada</h3>
            <p>Sombras pigmentadas en tonos dorados y neutros. Perfecta para looks de noche y novias.</p>
            <a class="slide-cta" href="#productos">Ver paleta</a>
          </div>
          <div class="slide-media">
            <div class="media-box">✨</div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-content">
            <h3>Set de Pinceles Profesional</h3>
            <p>Set completo para lograr acabados de estudio. Calidad premium y suave al contacto.</p>
            <a class="slide-cta" href="#productos">Ver set</a>
          </div>
          <div class="slide-media">
            <div class="media-box">🖌️</div>
          </div>
        </div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <div class="container">
    <!-- Filtros -->
    <div class="filtros">
      <button class="filtro-btn active">Todos</button>
      <button class="filtro-btn">Labiales</button>
      <button class="filtro-btn">Sombras</button>
      <button class="filtro-btn">Bases</button>
      <button class="filtro-btn">Correctores</button>
      <button class="filtro-btn">Pinceles</button>
    </div>

    <!-- Carruseles por categoría -->

    <!-- Novedades -->
    <section id="novedades" class="category-section">
      <h2>Novedades</h2>
      <div class="category-carousel-wrapper">
        <button class="category-nav prev" aria-label="Anterior">‹</button>
        <div class="category-carousel">
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://dcdn-us.mitiendanube.com/stores/004/106/679/products/130422b9-e829-43df-9473-5d3b2c7368fb-c3ae847d301a4ec7fb17041844291240-1024-1024.png'); background-size:cover; background-position:center;"></div>
            <div class="producto-info"><h3>Nuevo Labial</h3><p>Tono tendencia con acabado mate.</p><div class="producto-precio"><span class="precio">$24.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Novedad+2'); background-size:cover;"></div>
            <div class="producto-info"><h3>Paleta Sunset</h3><p>Colores cálidos para looks veraniegos.</p><div class="producto-precio"><span class="precio">$34.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Novedad+3'); background-size:cover;"></div>
            <div class="producto-info"><h3>Set Brochas Mini</h3><p>Perfecto para viajar.</p><div class="producto-precio"><span class="precio">$19.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Novedad+4'); background-size:cover;"></div>
            <div class="producto-info"><h3>Iluminador Glow</h3><p>Efecto luminoso natural.</p><div class="producto-precio"><span class="precio">$18.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
        </div>
        <button class="category-nav next" aria-label="Siguiente">›</button>
      </div>
    </section>

    <!-- Ojos -->
    <section id="ojos" class="category-section">
      <h2>Ojos</h2>
      <div class="category-carousel-wrapper">
        <button class="category-nav prev" aria-label="Anterior">‹</button>
        <div class="category-carousel">
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Sombras+1'); background-size:cover;"></div>
            <div class="producto-info"><h3>Paleta Smokey</h3><p>Tonos para un look ahumado.</p><div class="producto-precio"><span class="precio">$32.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Sombras+2'); background-size:cover;"></div>
            <div class="producto-info"><h3>Máscara Volume</h3><p>Pestañas con volumen extremo.</p><div class="producto-precio"><span class="precio">$15.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Sombras+3'); background-size:cover;"></div>
            <div class="producto-info"><h3>Delineador Gel</h3><p>Trazo preciso y duradero.</p><div class="producto-precio"><span class="precio">$12.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
        </div>
        <button class="category-nav next" aria-label="Siguiente">›</button>
      </div>
    </section>

    <!-- Rostro -->
    <section id="rostro" class="category-section">
      <h2>Rostro</h2>
      <div class="category-carousel-wrapper">
        <button class="category-nav prev" aria-label="Anterior">‹</button>
        <div class="category-carousel">
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Base+1'); background-size:cover;"></div>
            <div class="producto-info"><h3>Base Líquida</h3><p>Cobertura media y natural.</p><div class="producto-precio"><span class="precio">$28.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Base+2'); background-size:cover;"></div>
            <div class="producto-info"><h3>Corrector Luminoso</h3><p>Oculta ojeras y aporta luz.</p><div class="producto-precio"><span class="precio">$18.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
        </div>
        <button class="category-nav next" aria-label="Siguiente">›</button>
      </div>
    </section>

    <!-- Labios -->
    <section id="labios" class="category-section">
      <h2>Labios</h2>
      <div class="category-carousel-wrapper">
        <button class="category-nav prev" aria-label="Anterior">‹</button>
        <div class="category-carousel">
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://dcdn-us.mitiendanube.com/stores/004/106/679/products/130422b9-e829-43df-9473-5d3b2c7368fb-c3ae847d301a4ec7fb17041844291240-1024-1024.png'); background-size:cover; background-position:center;"></div>
            <div class="producto-info"><h3>Labial Nude</h3><p>Tono para uso diario.</p><div class="producto-precio"><span class="precio">$22.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Labial+2'); background-size:cover;"></div>
            <div class="producto-info"><h3>Gloss Brillo</h3><p>Acabado jugoso y cómodo.</p><div class="producto-precio"><span class="precio">$14.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
        </div>
        <button class="category-nav next" aria-label="Siguiente">›</button>
      </div>
    </section>

    <!-- Piel -->
    <section id="piel" class="category-section">
      <h2>Piel</h2>
      <div class="category-carousel-wrapper">
        <button class="category-nav prev" aria-label="Anterior">‹</button>
        <div class="category-carousel">
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Skincare+1'); background-size:cover;"></div>
            <div class="producto-info"><h3>Serum Hidratante</h3><p>Hidratación profunda sin sensación grasa.</p><div class="producto-precio"><span class="precio">$29.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Skincare+2'); background-size:cover;"></div>
            <div class="producto-info"><h3>Protector Solar</h3><p>SPF 50, protección diaria ligera.</p><div class="producto-precio"><span class="precio">$19.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
        </div>
        <button class="category-nav next" aria-label="Siguiente">›</button>
      </div>
    </section>

    <!-- Cuerpo -->
    <section id="cuerpo" class="category-section">
      <h2>Cuerpo</h2>
      <div class="category-carousel-wrapper">
        <button class="category-nav prev" aria-label="Anterior">‹</button>
        <div class="category-carousel">
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Body+1'); background-size:cover;"></div>
            <div class="producto-info"><h3>Aceite Brillo</h3><p>Iluminador corporal para ocasiones especiales.</p><div class="producto-precio"><span class="precio">$34.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
        </div>
        <button class="category-nav next" aria-label="Siguiente">›</button>
      </div>
    </section>

    <!-- Cabello -->
    <section id="cabello" class="category-section">
      <h2>Cabello</h2>
      <div class="category-carousel-wrapper">
        <button class="category-nav prev" aria-label="Anterior">‹</button>
        <div class="category-carousel">
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Hair+1'); background-size:cover;"></div>
            <div class="producto-info"><h3>Spray Brillo</h3><p>Fija y da brillo sin apelmazar.</p><div class="producto-precio"><span class="precio">$16.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
        </div>
        <button class="category-nav next" aria-label="Siguiente">›</button>
      </div>
    </section>

    <!-- Accesorios -->
    <section id="accesorios" class="category-section">
      <h2>Accesorios</h2>
      <div class="category-carousel-wrapper">
        <button class="category-nav prev" aria-label="Anterior">‹</button>
        <div class="category-carousel">
          <div class="category-card">
            <div class="producto-imagen" style="background-image:url('https://via.placeholder.com/420x300?text=Accesorio+1'); background-size:cover;"></div>
            <div class="producto-info"><h3>Esponja Maquillaje</h3><p>Difumina a la perfección.</p><div class="producto-precio"><span class="precio">$9.99</span><button class="btn-comprar">Agregar</button></div></div>
          </div>
        </div>
        <button class="category-nav next" aria-label="Siguiente">›</button>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Beauty by Val & Yare. Todos los derechos reservados.</p>
    <p>Hecho con 💖 para ti</p>
  </footer>

  <script>
    // Agregar funcionalidad al carrito
    document.querySelectorAll('.btn-comprar').forEach(btn => {
      btn.addEventListener('click', async function() {
        // extract product info from card
        const card = this.closest('.category-card') || this.closest('.producto-card');
        const name = card.querySelector('h3') ? card.querySelector('h3').innerText.trim() : 'Producto';
        const priceText = card.querySelector('.precio') ? card.querySelector('.precio').innerText.replace(/[^0-9.,]/g,'').replace(',','.') : '0';
        const price = parseFloat(priceText) || 0;
        // get background image url if exists
        let imageUrl = null;
        const imgBox = card.querySelector('.producto-imagen');
        if (imgBox) {
          const bg = imgBox.style.backgroundImage || window.getComputedStyle(imgBox).backgroundImage;
          const m = bg.match(/url\(["']?(.+?)["']?\)/);
          if (m) imageUrl = m[1];
        }

        const token = document.querySelector('meta[name="csrf-token"]').content;
        try {
          const res = await fetch('/cart/add', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': token },
            body: JSON.stringify({ product_name: name, price: price, quantity: 1, image_url: imageUrl })
          });
          const json = await res.json();
          if (json.success) {
            const count = document.querySelector('.carrito-count');
            if (count) count.textContent = json.count;
            this.textContent = '✓ Agregado';
            this.style.background = '#28a745';
            setTimeout(() => {
              this.textContent = 'Agregar';
              this.style.background = '#e85a9b';
            }, 1500);
          }
        } catch (e) { console.error(e); }
      });
    });

    // Filtros (solo estilos activos, no filtra productos en esta demo)
    document.querySelectorAll('.filtro-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.filtro-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });

    // Inicializar Swiper para hero y categorías
    (function() {
      // Load Swiper script dynamically (already included via CDN later) - assume available
      function init() {
        // Hero swiper
        const hero = new Swiper('.featured-swiper', {
          loop: true,
          autoplay: { delay: 4500, disableOnInteraction: false },
          pagination: { el: '.featured-swiper .swiper-pagination', clickable: true },
          navigation: { nextEl: '.featured-swiper .swiper-button-next', prevEl: '.featured-swiper .swiper-button-prev' },
          effect: 'fade',
          fadeEffect: { crossFade: true },
        });

        // Category swipers: multiple per page
        document.querySelectorAll('.category-carousel-wrapper').forEach((wrapper, idx) => {
          const container = wrapper.querySelector('.category-carousel');
          if (!container) return;

          // convert existing cards into Swiper structure if not already
          if (!container.classList.contains('swiper-initialized')) {
            container.classList.add('swiper', 'category-swiper-' + idx);
            const track = document.createElement('div');
            track.className = 'swiper-wrapper';
            // move cards into slides
            Array.from(container.children).forEach(card => {
              const slide = document.createElement('div');
              slide.className = 'swiper-slide';
              slide.appendChild(card);
              track.appendChild(slide);
            });
            container.innerHTML = '';
            container.appendChild(track);
            // add navigation
            const prevBtn = wrapper.querySelector('.category-nav.prev');
            const nextBtn = wrapper.querySelector('.category-nav.next');
            if (prevBtn) prevBtn.classList.add('swiper-button-prev');
            if (nextBtn) nextBtn.classList.add('swiper-button-next');

            // init swiper
            new Swiper('.category-swiper-' + idx, {
              slidesPerView: 3,
              spaceBetween: 16,
              navigation: { prevEl: '.category-swiper-' + idx + ' ~ .category-nav.prev, .category-swiper-' + idx + ' ~ .category-nav.next' },
              breakpoints: {
                0: { slidesPerView: 1.2 },
                520: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 4 }
              }
            });
          }
        });
      }

      // wait for Swiper script to be available
      if (typeof Swiper === 'undefined') {
        const s = document.createElement('script');
        s.src = 'https://unpkg.com/swiper@9/swiper-bundle.min.js';
        s.onload = init;
        document.body.appendChild(s);
      } else init();
    })();

    // Inicializar carruseles por categoría (scroll por contenedor)
    (function() {
      function setupCategory(carouselWrapper) {
        const track = carouselWrapper.querySelector('.category-carousel');
        const prev = carouselWrapper.querySelector('.category-nav.prev');
        const next = carouselWrapper.querySelector('.category-nav.next');
        if (!track) return;

        const scrollAmount = () => Math.round(track.clientWidth * 0.75);

        prev && prev.addEventListener('click', () => {
          track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
        });
        next && next.addEventListener('click', () => {
          track.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
        });

        // Allow swipe on touch
        let startX = 0;
        track.addEventListener('touchstart', (e) => startX = e.touches[0].clientX);
        track.addEventListener('touchend', (e) => {
          const diff = e.changedTouches[0].clientX - startX;
          if (diff > 40) track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
          else if (diff < -40) track.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
        });
      }

      document.querySelectorAll('.category-carousel-wrapper').forEach(setupCategory);
    })();

    // Selector de idioma (demo) - solo cambia etiqueta
    (function(){
      const lang = document.getElementById('langSelect');
      if (!lang) return;
      lang.addEventListener('change', function(){
        // En una app real, aquí cambiarías la localización o recargarías con ?lang=..
        alert('Idioma cambiado a: ' + this.value);
      });
    })();
  </script>
</body>
</html>
