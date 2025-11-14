<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login — Beauty by Val & Yare 💋</title>
  <script type="module" src="{{ Vite::asset('resources/js/app.jsx') }}"></script>
  <link href="{{ Vite::asset('resources/css/app.css') }}" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f8c1d8, #f6a6c1);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #333;
      padding: 1rem;
    }

    .login-box {
      background: white;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 350px;
      text-align: center;
    }

    h2 {
      color: #d63384;
      margin-bottom: 0.5rem;
    }

    .subtitle {
      color: #999;
      font-size: 0.9rem;
      margin-bottom: 1.5rem;
    }

    input {
      width: 100%;
      padding: .8rem;
      margin: .6rem 0;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-family: 'Poppins', sans-serif;
    }

    input:focus {
      outline: none;
      border-color: #d63384;
      box-shadow: 0 0 5px rgba(214, 51, 132, 0.3);
    }

    button {
      width: 100%;
      background: #e85a9b;
      border: none;
      color: white;
      padding: .8rem;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
      margin-top: .8rem;
      transition: background 0.3s;
      font-family: 'Poppins', sans-serif;
    }

    button:hover {
      background: #d63384;
    }

    a {
      color: #d63384;
      text-decoration: none;
      display: block;
      margin-top: .8rem;
      font-size: 0.9rem;
    }

    a:hover {
      text-decoration: underline;
    }

    .divider {
      color: #ccc;
      margin: 1rem 0;
      font-size: 0.9rem;
    }

    .volver-inicio {
      margin-top: 1.5rem;
      padding-top: 1rem;
      border-top: 1px solid #eee;
    }

    .volver-inicio a {
      color: #999;
      font-size: 0.85rem;
    }

    .volver-inicio a:hover {
      color: #d63384;
    }

    .warning {
      background: #fff3cd;
      color: #856404;
      padding: 1rem;
      border-radius: 10px;
      margin-bottom: 1rem;
      font-size: 0.9rem;
      border: 1px solid #ffeaa7;
    }

    .error {
      background: #f8d7da;
      color: #721c24;
      padding: 0.8rem;
      border-radius: 8px;
      margin-bottom: 1rem;
      font-size: 0.9rem;
      border: 1px solid #f5c6cb;
    }

    .success {
      background: #d4edda;
      color: #155724;
      padding: 0.8rem;
      border-radius: 8px;
      margin-bottom: 1rem;
      font-size: 0.9rem;
      border: 1px solid #c3e6cb;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Inicia sesión 💄</h2>
    <p class="subtitle">Accede a tu cuenta para comprar y reservar</p>

    <!-- Mostrar mensajes de error o éxito -->
    @if ($errors->any())
      <div class="error">
        <strong>Error en el login</strong>
        @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
        @endforeach
      </div>
    @endif

    @if (session('success'))
      <div class="success">{{ session('success') }}</div>
    @endif

    <!-- Advertencia sobre restricciones -->
    <div class="warning">
      ⚠️ <strong>Debes estar registrado para:</strong>
      <ul style="text-align: left; margin-top: 0.5rem;">
        <li>Ver la tienda de productos</li>
        <li>Acceder a nuestros servicios</li>
        <li>Hacer reservaciones</li>
      </ul>
    </div>

    <!-- Formulario de login -->
    <form method="POST" action="/login">
      @csrf
      <input 
        type="email" 
        name="email" 
        placeholder="Correo electrónico" 
        required
        value="{{ old('email') }}"
      >
      @error('email')
        <div class="error-message" style="color: #d32f2f; font-size: 0.85rem; margin-top: 0.3rem;">{{ $message }}</div>
      @enderror
      <input 
        type="password" 
        name="password" 
        placeholder="Contraseña" 
        required
      >
      @error('password')
        <div class="error-message" style="color: #d32f2f; font-size: 0.85rem; margin-top: 0.3rem;">{{ $message }}</div>
      @enderror
      <button type="submit">Entrar</button>
      <a href="#">¿Olvidaste tu contraseña?</a>
    </form>

    <div class="divider">o</div>

    <!-- Sección de registro -->
    <div>
      <p style="color: #666; font-size: 0.95rem; margin-bottom: 1rem;">
        ¿No tienes cuenta?
      </p>
      <a href="/register" style="display: inline-block; background: #e85a9b; color: white; padding: 0.8rem 1.5rem; border-radius: 10px; text-decoration: none; font-weight: bold; margin-bottom: 1rem; transition: background 0.3s;">
        Crear cuenta
      </a>
    </div>

    <!-- Volver al inicio -->
    <div class="volver-inicio">
      <a href="/">← Volver al inicio</a>
    </div>
  </div>
</body>
</html>
