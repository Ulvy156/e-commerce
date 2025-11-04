<?php
    include "../Server/connection.php";
    session_start();


    // Get logged-in user info
    $userEmail = $_SESSION['user_email'];
    $query     = "SELECT user_name, user_email FROM users WHERE user_email='$userEmail'";
    $result    = $con->query($query);

    // logout
    if ($result->num_rows === 0) {
        session_destroy();
        header("Location: login.php");
        exit;
    }

    $user = $result->fetch_assoc();

    // update psw
    $changeMsg = '';
    if (isset($_POST['changePassword'])) {
        $password         = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if (strlen($password) < 6) {
            $changeMsg = "Password must be at least 6 characters";
        } elseif ($password !== $confirm_password) {
            $changeMsg = "Passwords do not match";
        } else {
            $update = "UPDATE users SET user_password='$password' WHERE user_email='$userEmail'";
            if ($con->query($update)) {
                $changeMsg = "Password updated successfully!";
            } else {
                $changeMsg = "Failed to update password. Please try again.";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="/style/home/main.css">
    <link rel="stylesheet" href="/style/home/footer.css">
    <link rel="stylesheet" href="/style/account/account.css">
</head>
<body>

<!-- Navbar -->
<?php include "../Components/navbar.php"; ?>

<!-- Account -->
<section class="account">
    <div class="account-info">
        <h2>Account Info</h2>
        <hr>
        <p><strong>Name:</strong>                                  <?php echo htmlspecialchars($user['user_name']); ?></p>
        <p><strong>Email:</strong>                                   <?php echo htmlspecialchars($user['user_email']); ?></p>
        <ul>
            <li><a href="orders.php">Your Orders</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>

    <div class="account-form">
        <h2>Change Password</h2>
        <hr>
        <?php if ($changeMsg) {
                echo "<p style='color:green;'>$changeMsg</p>";
            }
        ?>
        <form method="post">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>

            <button type="submit" name="changePassword">Change Password</button>
        </form>
    </div>
</section>

<!-- Footer -->
<?php include "../Components/footer.php"; ?>

</body>
</html>
