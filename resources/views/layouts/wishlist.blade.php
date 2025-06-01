@extends('layouts.app')
@section('content')
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    .product {
      border: 1px solid #ccc;
      padding: 15px;
      margin-bottom: 10px;
      border-radius: 8px;
    }

    .wishlist {
      margin-top: 30px;
      border-top: 2px solid #333;
      padding-top: 15px;
    }

    button {
      padding: 8px 12px;
      border: none;
      background-color: #007bff;
      color: white;
      cursor: pointer;
      border-radius: 4px;
    }

    button:hover {
      background-color: #0056b3;
    }

    .remove-btn {
      background-color: #dc3545;
      margin-left: 10px;
    }

    .remove-btn:hover {
      background-color: #b52a37;
    }
  </style>
</head>
<body>

  <h1>Wishlist</h1>

  <div class="product">
    <img src="{{ asset('assets/images/cart-item-1.jpg') }}" alt="Item A" style="width: 150px; height: 150px;">
    <p>Price: $100</p>

    <button onclick="addToWishlist('Item1', 30)">Add to Wishlist</button>
  </div>

  <div class="product">
    <img src="{{ asset('assets/images/cart-item-2.jpg') }}" alt="Item A" style="width: 150px; height: 150px;">
    <p>Price: $50</p>
    <button onclick="addToWishlist('Item B', 50)">Add to Wishlist</button>
  </div>

  <div class="wishlist">
    <h2>Your Wishlist</h2>
    <ul id="wishlist-items"></ul>
  </div>

  <script>
    const wishlist = [];

    function addToWishlist(itemName, price) {
      if (wishlist.some(item => item.name === itemName)) {
        alert(`${itemName} is already in your wishlist.`);
        return;
      }
      wishlist.push({ name: itemName, price });
      updateWishlist();
    }

    function removeFromWishlist(itemName) {
      const index = wishlist.findIndex(item => item.name === itemName);
      if (index !== -1) {
        wishlist.splice(index, 1);
        updateWishlist();
      }
    }

    function updateWishlist() {
      const wishlistItems = document.getElementById('wishlist-items');
      wishlistItems.innerHTML = '';
      wishlist.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - $${item.price}`;
        const removeBtn = document.createElement('button');
        removeBtn.textContent = 'Remove';
        removeBtn.className = 'remove-btn';
        removeBtn.onclick = () => removeFromWishlist(item.name);
        li.appendChild(removeBtn);
        wishlistItems.appendChild(li);
      });
    }
  </script>

</body>
@endsection
