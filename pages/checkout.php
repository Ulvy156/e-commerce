<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut</title>
    <link rel="stylesheet" href="/style/home/main.css">
    <link rel="stylesheet" href="/style/home/footer.css">
    <link rel="stylesheet" href="/style/Account/checkout_payment.css">
</head>

<body>
    <!-- navbar -->
    <?php include "../Components/navbar.php" ?>

    <!-- check out -->
    <div class="checkout">
        <h2>Checkout</h2>
        <hr>
        <!-- send data place order page-->
        <form method="POST" action="../Server/place-order.php" id="checkoutForm">
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Name" name="name" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" placeholder="Email" name="email" required>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" placeholder="Phone" name="phone" required>
            </div>

            <div class="form-group">
                <label>City</label>
                <input type="text" placeholder="City" name="city" required>
            </div>

            <div class="form-group" style="width: 95%;">
                <label>Address</label>
                <input type="text" placeholder="Address" name="address" required>
            </div>

            <div class="button">
                <p id="totalDisplay" style="font-weight:bold; margin-right:20px">Total: $0</p>

                <input type="hidden" id="totalInput" name="order_cost">

                <button type="submit" name="placeOrder">Place order</button>
            </div>
        </form>
    </div>


    <!-- footer -->
    <?php include "../Components/footer.php" ?>

    <script>
    const total = localStorage.getItem("cartTotal") || "0";

    document.getElementById("totalDisplay").textContent = "Total: $" + total;
    document.getElementById("totalInput").value = total;
    document.getElementById("checkoutForm").addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const cart = JSON.parse(localStorage.getItem("cart") || "[]");

        const data = {
            placeOrder: true,
            order_cost: formData.get("order_cost"),
            name: formData.get("name"),
            email: formData.get("email"),
            phone: formData.get("phone"),
            city: formData.get("city"),
            address: formData.get("address"),
            cart: cart
        };

        fetch("../Server/place-order.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            })
            .then(res => res.json()) 
            .then(response => {
                if (response.success) {
                    const orderId = response.orderId;
                    const orderStatus = response.orderStatus;
                    window.location.href = `payment.php?orderId=${orderId}&status=${orderStatus}`;
                } else {
                    alert("Order failed: " + (response.error || "Unknown error"));
                }
            })
            .catch(err => {
                console.error("Fetch error:", err);
                alert("Something went wrong. Please try again.");
            });

    });
    </script>

</body>

</html>