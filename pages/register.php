<?php
include "../Server/connection.php";

$nameErr = $emailErr = $pswErr = $cpswErr = '';
$successMsg = '';

if(isset($_POST["register"])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $psw = $_POST["psw"];
    $cpsw = $_POST["cpsw"];

    $errors = [];
    if(empty($name)) {
        $errors['nameErr'] = "Name is required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailErr'] = "Invalid email format";
    }

    // Check if email already exists
   $checkEmail = "SELECT user_name FROM users WHERE user_email='$email'";
  $result = $con->query($checkEmail);
  if($result->num_rows > 0){
      $row = $result->fetch_assoc();
      $getName = $row['user_name'];
      $errors['emailErr'] = "This email is already used by: " . $getName;
  }

    if(strlen($psw) < 6) {
        $errors['pswErr'] = "Password must be at least 6 characters";
    }
    if($psw !== $cpsw) {
        $errors['cpswErr'] = "Passwords do not match";
    }

    $nameErr = $errors['nameErr'] ?? '';
    $emailErr = $errors['emailErr'] ?? '';
    $pswErr = $errors['pswErr'] ?? '';
    $cpswErr = $errors['cpswErr'] ?? '';

    if(empty($errors)) {
        $successMsg = "Registration successful!";

        $insert ="INSERT INTO users(user_name,user_email,user_password)
                  VALUES ('$name','$email','$psw')";
        $insert_send = $con->query($insert);
        if($insert_send){
        header("Location: account.php");
        

        } else {
            echo "<script>alert('Add new user fail');</script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="/style/home/main.css" />
    <link rel="stylesheet" href="/style/home/footer.css" />
    <link rel="stylesheet" href="/style/Account/login_register.css" />
</head>

<body>


    <!-- Navbar -->
    <?php include "../Components/navbar.php"; ?>

    <div class="register">
        <h2>Register</h2>
        <hr />
        <form method="post" id="registerForm">
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Name" name="name" value="<?php echo $_POST['name'] ?? ''; ?>" />
                <span class="error"><?php echo $nameErr; ?></span>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" placeholder="Email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" />
                <span class="error"><?php echo $emailErr; ?></span>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="psw" />
                <span class="error"><?php echo $pswErr; ?></span>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name="cpsw" />
                <span class="error"><?php echo $cpswErr; ?></span>
            </div>

            <button type="submit" name="register">Register</button>
            <a href="login.php">Do you have an account? Login</a>
        </form>

        <?php if($successMsg) echo "<p style='color:green'>$successMsg</p>"; ?>
    </div>

    <?php include "../Components/footer.php"; ?>
</body>

</html>