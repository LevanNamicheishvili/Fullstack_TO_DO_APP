<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css?v= <?php echo time(); ?>" >
</head>
<body>
    <div class="container">
    <div class="left_side">
        <div class="wrapper">
    <div class="typing-demo">
      Just Do It ...
    </div>
</div>
        </div>
        <div class="rightside">
    <!-- Signup Form -->
    <form id="signup-form" action="signup.php" method="post">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['signup_error'])) { ?>
            <p class="error"><?php echo $_GET['signup_error']; ?></p>
        <?php } ?>

        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name">

        <label>Password</label>
        <input type="password" name="password" placeholder="Password">

        <!-- Error Message Div -->
        <div id="error-message" class="error" style="display: none;">All fields are required for signup</div>

        <button type="submit" name="signup" id="signup-button">Sign Up</button>
    </form>
    </div>
    </div>
<script src="./js/signupf.js"></script>
</body>
</html>
