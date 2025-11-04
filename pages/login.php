<?php
include "../Server/connection.php"; 

$loginErr = '';
$loginSuccess = '';

if(isset($_POST["login"])){
    $email = trim($_POST["email"]);
    $psw = $_POST["psw"];

    if(empty($email) || empty($psw)){
        $loginErr = "Please enter both email and password";
    } else {

        $query = "SELECT * FROM users WHERE user_email='$email' AND user_password='$psw'";
        $result = $con->query($query);

        if($result->num_rows > 0){
         
            $loginSuccess = "Login successful!";
         
            session_start();
            $_SESSION['user_email'] = $email;
            $_SESSION['loggedin'] = true;

            // redirect to account page
            header("Location: account.php");
            exit;
        } else {
            $loginErr = "Invalid email or password";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="/style/home/main.css" />
    <link rel="stylesheet" href="/style/home/footer.css" />
    <link rel="stylesheet" href="/style/Account/login_register.css" />
</head>

<body>
    <!-- Navbar -->
    <?php include "../Components/navbar.php"; ?>

    <!-- Login-->
    <div class="login">
        <h2>Login</h2>
        <hr>

        <!--  message -->
        <?php if($loginErr) echo "<p style='color:red;'>$loginErr</p>"; ?>
        <?php if($loginSuccess) echo "<p style='color:green;'>$loginSuccess</p>"; ?>

        <hr class="line">
        <form method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" placeholder="Email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" />
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="psw" />
            </div>

            <button type="submit" name="login">Login</button>
            <a href="register.php">Don't have account? Register</a>
        </form>
    </div>

    <!-- Footer -->
    <?php include "../Components/footer.php"; ?>
</body>

</html>