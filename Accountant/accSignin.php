<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Mememorial</title>
    <link rel="stylesheet" href="./acc.css">
</head>
<body>
    <h2>Lucy Mememorial</h2>
    <div>
        <h3>Log into your account</h3>
        <hr>
        <form name="signup" action="./accLogin.php" method="post">
        <input type="text" name="email" id="email" placeholder="Email Address">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" value="submit" onclick="validateForm()">Sign in</button>
        </form>

        <p>Forgotten Password?</p>

        <hr class="hr-text" data-content="OR">

        <a href="./accSignup.php"><p class="login-refer">Create a new account?</p></a>
    </div>

    <script src="./acc.js"></script>
</body>
</html>