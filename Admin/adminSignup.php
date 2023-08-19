



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Signup</title>
    <link rel="stylesheet" href="./admin.css">
    
</head>
<body>
    <h2>Ayao Medical Center</h2>
    <div>
        <h3>Create a new account</h3>
        <p>It's quick and simple</p>
        <hr>
        <form name="signup" action="processSignup.php" method="post" onsubmit="return submitForm()">
        <input type="text" name="fname" id="fname" placeholder="Full Name">
        <input type="text" name="email" id="email" placeholder="Email Address">
        <input type="text" name="phone" id="phone" placeholder="Phone Number">
        <input type="password" name="password" id="password" placeholder="New Password">
        <button type="submit" value="submit" onclick="validateForm()">Sign up</button>
        </form>
        

        
        <a href="./adminSignIn.php"><p class="login-refer">Already having an account?</p></a>
    </div>

    <script src="./admin.js"></script>
</body>
</html>