<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Cart</title>
    <link rel="stylesheet" href="/style/home/main.css" />
    <link rel="stylesheet" href="/style/home/footer.css" />
    <link rel="stylesheet" href="/style/cart/cart-detail.css" />
    <link rel="stylesheet" href="/style/cart/cart-totla.css" />
</head>

<body>
    <!-- Navbar -->
    <?php include "../Components/navbar.php"; ?>

    <!-- Cart -->
    <section class="cart">
        <h2>Your Cart</h2>
        <table id="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody id="cart-body"></tbody>
        </table>
        <?php
          include "../Server/connection.php";

          $id = $_GET['id'] ?? null;
          $product = null;

          if ($id) {
            $query = "SELECT * FROM products WHERE product_id = $id";
            $result = $con->query($query);
            if ($result && mysqli_num_rows($result) > 0) {
              $product = mysqli_fetch_assoc($result);
            }
          }
          ?>

        <div class="cart-total">
            <table>
                <thead>
                    <tr>
                        <td>Subtotal</td>
                        <td id="subtotal">$0</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td id="total">$0</td>
                    </tr>
                </thead>
            </table>
            <button type="button" id="checkoutBtn">Check Out</button>
        </div>
    </section>

    <!-- Footer -->
    <?php include "../Components/footer.php"; ?>

    <script>
    // Get product data from PHP
    const newProduct = <?php echo json_encode($product ?? null); ?>;

    // Load cart from localStorage
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Add or update product in cart
    if (newProduct) {
        const existing = cart.find(p => p.product_id === newProduct.product_id);
        if (existing) {
            existing.quantity += 1;
        } else {
            newProduct.quantity = 1;
            cart.push(newProduct);
        }
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    // render cart
    function renderCart() {
        const tbody = document.getElementById("cart-body");
        tbody.innerHTML = "";

        let total = 0;

        cart.forEach((item, index) => {
            const subtotal = item.product_price * item.quantity;
            total += subtotal;

            const row = document.createElement("tr");
            row.innerHTML = `
            <td class="product">
              <img src="${item.product_image}" alt="${item.product_name}" />
              <div class="text">
                <a href="#" class="product-name">${item.product_name}</a>
                <span>$${item.product_price}</span>
                <a href="#" class="remove" data-index="${index}">Remove</a>
              </div>
            </td>
            <td>
              <input type="number" value="${item.quantity}" min="1" data-index="${index}" />
            </td>
            <td class="subtotal">$${subtotal.toFixed(2)}</td>
          `;
            tbody.appendChild(row);
        });

        document.getElementById("subtotal").textContent = `$${total.toFixed(2)}`;
        document.getElementById("total").textContent = `$${total.toFixed(2)}`;
    }

    // Event: Update quantity
    document.addEventListener("input", function(e) {
        if (e.target.matches('input[type="number"]')) {
            const index = e.target.getAttribute("data-index");
            cart[index].quantity = parseInt(e.target.value);
            localStorage.setItem("cart", JSON.stringify(cart));
            renderCart();
        }
    });

    // Event: Remove item
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("remove")) {
            const index = e.target.getAttribute("data-index");
            cart.splice(index, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            renderCart();
        }
    });


    renderCart();

    // Checkout button logic
    document.getElementById("checkoutBtn").addEventListener("click", function() {
        if (cart.length > 0) {
            // Save total in localStorage
            let total = cart.reduce((sum, item) => sum + item.product_price * item.quantity, 0);
            localStorage.setItem("cartTotal", total.toFixed(2));
            window.location.href = "checkout.php";
        } else {
            window.location.href = "/";
        }
    });
    </script>
</body>

</html>