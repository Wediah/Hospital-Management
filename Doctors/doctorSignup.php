<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Mememorial</title>
    <link rel="stylesheet" href="./doctor.css">
</head>
<body>
<h2>Lucy Mememorial</h2>
    <div>
        <h3>Create a new account</h3>
        <p>It's quick and simple</p>
        <hr>
        <form name="signup" action="doctorProcessSignup.php" method="post">
        <input type="text" name="fname" id="fname" placeholder="Full Name">
        <input type="text" name="depart" id="depart" placeholder="Department">
        <input type="text" name="email" id="email" placeholder="Email Address">
        <input type="text" name="phone" id="phone" placeholder="Phone Number">
        <input type="password" name="password" id="password" placeholder="New Password">
        <button type="submit" value="submit" onclick="validateForm()">Sign up</button>
        </form>
        

        
        <a href="./doctorSignin.php"><p class="login-refer">Already having an account?</p></a>
    </div>

    <script src="./doctor.js"></script>
</body>
</html>