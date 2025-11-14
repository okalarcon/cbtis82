<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito — Beauty by Val & Yare</title>
  <link href="{{ Vite::asset('resources/css/app.css') }}" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; padding: 2rem; background: #f9f9f9; }
    .cart { max-width: 900px; margin: 0 auto; background: #fff; padding: 1.5rem; border-radius: 12px; }
    .item { display:flex; gap:1rem; align-items:center; padding: .8rem 0; border-bottom:1px solid #eee; }
    .thumb { width:80px; height:80px; border-radius:8px; background:#f1f1f1; display:flex; align-items:center; justify-content:center }
    .meta { flex:1 }
    .price { color:#e85a9b; font-weight:bold }
    .qty { width:72px }
    .actions button { background:#e85a9b; color:white; border:none; padding:.5rem .8rem; border-radius:8px }
  </style>
</head>
<body>
  <div class="cart">
    <h2>Tu Carrito</h2>
    @forelse ($cart->items as $item)
      <div class="item">
        <div class="thumb" style="background-image:url('{{ $item->image_url }}'); background-size:cover; background-position:center"></div>
        <div class="meta">
          <div><strong>{{ $item->product_name }}</strong></div>
          <div class="price">${{ number_format($item->price, 2) }}</div>
        </div>
        <div>
          <form onsubmit="event.preventDefault(); updateItem({{ $item->id }}, this.qty.value)">
            <input name="qty" type="number" min="1" value="{{ $item->quantity }}" class="qty">
            <div class="actions">
              <button onclick="updateItem({{ $item->id }}, this.closest('form').qty.value)">Actualizar</button>
              <button onclick="removeItem({{ $item->id }})" style="background:#999; margin-left:.5rem">Eliminar</button>
            </div>
          </form>
        </div>
      </div>
    @empty
      <p>Tu carrito está vacío.</p>
    @endforelse

    <div style="text-align:right; margin-top:1rem;">
      <strong>Total: ${{ number_format($cart->total, 2) }}</strong>
    </div>
  </div>

  <script>
    async function updateItem(itemId, qty) {
      const token = document.querySelector('meta[name="csrf-token"]').content;
      const res = await fetch('/cart/update', { method:'POST', headers:{'Content-Type':'application/json','X-CSRF-TOKEN':token}, body: JSON.stringify({ item_id:itemId, quantity: qty }) });
      const json = await res.json();
      if (json.success) location.reload();
    }

    async function removeItem(itemId) {
      const token = document.querySelector('meta[name="csrf-token"]').content;
      const res = await fetch('/cart/remove', { method:'POST', headers:{'Content-Type':'application/json','X-CSRF-TOKEN':token}, body: JSON.stringify({ item_id:itemId }) });
      const json = await res.json();
      if (json.success) location.reload();
    }
  </script>
</body>
</html>
