import React, { useState, useEffect } from "react";
import Navbar from "../Components/Navbar";
import Footer from "../Components/Footer";
import ProductoCard from "../Components/ProductoCard";
import axios from "axios";

export default function Home() {
  const [productos, setProductos] = useState([]);
  const [carrito, setCarrito] = useState([]);

  useEffect(() => {
    axios.get("/api/productos").then(res => setProductos(res.data));
  }, []);

  const agregarAlCarrito = (producto) => {
    setCarrito([...carrito, producto]);
    alert(`${producto.nombre} agregado al carrito`);
  };

  return (
    <div>
      <Navbar carrito={carrito} />
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4">
        {productos.map((producto) => (
          <ProductoCard key={producto.id} producto={producto} onAdd={agregarAlCarrito} />
        ))}
      </div>
      <Footer />
    </div>
  );
}
