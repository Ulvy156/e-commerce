<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut</title>
    <link rel="stylesheet" href="/style/home/main.css">
    <link rel="stylesheet" href="/style/home/footer.css">
    <link rel="stylesheet" href="/style/Account/checkout.css">
</head>

<body>
    <!-- navbar -->
    <?php include "../Components/navbar.php" ?>

    <!-- check out -->
    <div class="checkout">
        <h2>Checkout</h2>
        <hr>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" placeholder="Email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" placeholder="Phone">
            </div>

            <div class="form-group">
                <label>City</label>
                <input type="text" placeholder="City">
            </div>

            <div class="form-group" style="width: 95%;">
                <label>Address</label>
                <input type="text" placeholder="Address">
            </div>

            <div class="button">
              
                <p id="totalDisplay" style="font-weight:bold; margin-right:20px">Total: $0</p>
                <button type="button">Check Out</button>
            </div>
        </form>
    </div>

    <!-- footer -->
    <?php include "../Components/footer.php" ?>

    <script>
    //total of product from local storage
        const total = localStorage.getItem("cartTotal") || "0";
        document.getElementById("totalDisplay").textContent = "Total: $" + total;
    </script>
</body>

</html>
