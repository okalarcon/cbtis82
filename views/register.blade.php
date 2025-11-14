<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro — Beauty by Val & Yare 💋</title>
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

    .register-box {
      background: white;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      color: #d63384;
      margin-bottom: 0.5rem;
      text-align: center;
    }

    .subtitle {
      color: #999;
      font-size: 0.9rem;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    label {
      display: block;
      color: #333;
      font-weight: 500;
      margin-bottom: 0.4rem;
      font-size: 0.9rem;
    }

    input {
      width: 100%;
      padding: .8rem;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-family: 'Poppins', sans-serif;
    }

    input:focus {
      outline: none;
      border-color: #d63384;
      box-shadow: 0 0 5px rgba(214, 51, 132, 0.3);
    }

    .error-message {
      color: #d32f2f;
      font-size: 0.85rem;
      margin-top: 0.3rem;
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
      margin-top: 1rem;
      transition: background 0.3s;
      font-family: 'Poppins', sans-serif;
    }

    button:hover {
      background: #d63384;
    }

    a {
      color: #d63384;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .volver-inicio {
      margin-top: 1.5rem;
      padding-top: 1rem;
      border-top: 1px solid #eee;
      text-align: center;
    }

    .volver-inicio a {
      font-size: 0.85rem;
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

    .login-link {
      text-align: center;
      margin-top: 1rem;
      color: #666;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="register-box">
    <h2>Crear Cuenta 💄</h2>
    <p class="subtitle">Regístrate para acceder a todos nuestros servicios</p>

    <!-- Mostrar mensajes de error o éxito -->
    @if ($errors->any())
      <div class="error">
        <strong>Error en el registro:</strong>
        @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
        @endforeach
      </div>
    @endif

    @if (session('success'))
      <div class="success">{{ session('success') }}</div>
    @endif

    <!-- Formulario de registro -->
    <form method="POST" action="/register">
      @csrf

      <div class="form-group">
        <label for="name">Nombre Completo</label>
        <input 
          type="text" 
          id="name"
          name="name" 
          placeholder="Tu nombre" 
          required
          value="{{ old('name') }}"
        >
        @error('name')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input 
          type="email" 
          id="email"
          name="email" 
          placeholder="tu@email.com" 
          required
          value="{{ old('email') }}"
        >
        @error('email')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="phone">Teléfono (Opcional)</label>
        <input 
          type="tel" 
          id="phone"
          name="phone" 
          placeholder="+34 XXX XXX XXX"
          value="{{ old('phone') }}"
        >
        @error('phone')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="password">Contraseña</label>
        <input 
          type="password" 
          id="password"
          name="password" 
          placeholder="Mínimo 6 caracteres" 
          required
        >
        @error('password')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input 
          type="password" 
          id="password_confirmation"
          name="password_confirmation" 
          placeholder="Repite tu contraseña" 
          required
        >
        @error('password_confirmation')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit">Crear Cuenta</button>
    </form>

    <div class="login-link">
      ¿Ya tienes cuenta? <a href="/login">Inicia sesión aquí</a>
    </div>

    <!-- Volver al inicio -->
    <div class="volver-inicio">
      <a href="/">← Volver al inicio</a>
    </div>
  </div>
</body>
</html>
