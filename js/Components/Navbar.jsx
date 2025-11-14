import React from 'react';
import { Link } from '@inertiajs/react';

export default function Navbar({ carrito }) {
  return (
    <nav className="bg-pink-500 text-white p-4 flex justify-between items-center">
      <h1 className="text-2xl font-bold">Beauty Creations</h1>
      <div>
        <Link href="/" className="mr-4 hover:underline">Inicio</Link>
        <Link href="/carrito" className="hover:underline">
          Carrito ({carrito.length})
        </Link>
      </div>
    </nav>
  );
}
