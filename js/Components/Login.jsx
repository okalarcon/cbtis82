import React from "react";

export default function Login() {
  return (
    <div className="min-h-screen bg-gradient-to-br from-pink-200 via-pink-100 to-white flex items-center justify-center p-4">
      <div className="bg-white/80 backdrop-blur-md shadow-2xl rounded-3xl w-full max-w-md p-8 border border-pink-200">
        <h1 className="text-4xl font-extrabold text-center text-pink-600 mb-3 tracking-tight">
          Beauty Creations 💋
        </h1>
        <p className="text-center text-gray-500 mb-8">
          Bienvenida a tu tienda favorita de maquillaje
        </p>

        <form className="space-y-5">
          <div>
            <label className="block text-sm font-medium text-gray-600 mb-1">
              Correo electrónico
            </label>
            <input
              type="email"
              placeholder="ejemplo@gmail.com"
              className="w-full px-4 py-2 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none transition"
            />
          </div>

          <div>
            <label className="block text-sm font-medium text-gray-600 mb-1">
              Contraseña
            </label>
            <input
              type="password"
              placeholder="••••••••"
              className="w-full px-4 py-2 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:outline-none transition"
            />
          </div>

          <button
            type="submit"
            className="w-full bg-gradient-to-r from-pink-500 to-pink-400 text-white font-semibold py-2.5 rounded-xl shadow-md hover:from-pink-600 hover:to-pink-500 transition-all duration-300"
          >
            Iniciar sesión
          </button>
        </form>

        <div className="text-center mt-6">
          <p className="text-sm text-gray-600">
            ¿No tienes cuenta?{" "}
            <a
              href="#"
              className="text-pink-600 font-semibold hover:underline"
            >
              Crear una
            </a>
          </p>
        </div>

        <div className="mt-10 text-center text-xs text-gray-400">
          © 2025 Beauty Creations. Todos los derechos reservados.
        </div>
      </div>
    </div>
  );
}
