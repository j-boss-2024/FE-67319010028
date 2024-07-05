<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="func.js"></script>
</head>

<body>
    <div class="container">
        <div class="select-opt">
            <button onclick="stdForm()" class="btn">Student</button>
            <button onclick="tchForm()" class="btn">Teacher</button>
            <button onclick="regForm()" class="btn">Register</button>
        </div>
    </div>

    <div class="form-1" id="stdForm">
        <p>Student Sign-in Form</p>
        <form action="auth.php" method="get">
            <input type="text" name="username" id="" placeholder="Username">
            <br>
            <input type="password" name="password" id="" placeholder="Password">
            <br>
            <input type="submit" value="Confirm" class="btn">
        </form>
    </div>

    <div class="form-2" id="tchForm">
        <p>Teacher Sign-in Form</p>
        <form action="auth.php" method="get">
            <input type="text" name="username" id="" placeholder="Username">
            <br>
            <input type="password" name="password" id="" placeholder="Password">
            <br>
            <input type="submit" value="Confirm" class="btn">
        </form>

    </div>
    <div class="form-3" id="regForm">
        <p>Register Sign-up Form</p>
        <form action="signup.php" method="post">
            <input type="text" name="fullname" placeholder="Full Name">
            <br>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="burger">Big Black Gay</option>
                <option value="other">Other</option>
            </select>
            <br>
            <input type="number" name="age" placeholder="Age" min="1" max="99">
            <br>
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <input type="password" name="repassword" placeholder="Re-enter Password">
            <br>
            <input type="submit" value="Confirm" class="btn">
        </form>
    </div>
</body>

</html>