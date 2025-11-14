import React from "react";

export default function ProductoCard({ producto, onAdd }) {
  return (
    <div className="border p-4 rounded-lg shadow hover:shadow-lg transition">
      <img src={producto.imagen} alt={producto.nombre} className="w-full h-48 object-cover rounded"/>
      <h2 className="mt-2 font-bold text-lg">{producto.nombre}</h2>
      <p className="text-gray-600">{producto.descripcion}</p>
      <p className="mt-1 font-semibold">${producto.precio}</p>
      <button
        className="mt-2 bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600"
        onClick={() => onAdd(producto)}
      >
        Agregar al carrito
      </button>
    </div>
  );
}
