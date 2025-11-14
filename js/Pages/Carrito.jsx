import React from 'react';
import Navbar from '../Components/Navbar';
import Footer from '../Components/Footer';

export default function Carrito({ carrito }) {
  return (
    <div>
      <Navbar carrito={carrito} />
      <div className="p-4">
        <h1 className="text-2xl font-bold mb-4">Tu carrito</h1>
        {carrito.length === 0 ? (
          <p>El carrito está vacío</p>
        ) : (
          <ul>
            {carrito.map((producto, index) => (
              <li key={index} className="mb-2">
                {producto.nombre} - ${producto.precio}
              </li>
            ))}
          </ul>
        )}
      </div>
      <Footer />
    </div>
  );
}
