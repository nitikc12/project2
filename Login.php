<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="nav1.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <h2 class="logo">Jensetter</h2>
        <nav class="navigation">
            <a class="your-button-class" href="Home.php">Home</a>
            <a class="your-button-class" href="about.php">About</a>
            <a class="your-button-class" href="product.php">Product</a>
            <a class="your-button-class" href="contacts.php">Contact</a>
            <button class="btnLogin-popup" onclick="location.href='Login.php';">Login</button>
        </nav>
    </header>

    <form action="database.php" method="post">
        <div class="wrapper">
            <span class="material-symbols-outlined">close</span>
            <h1>Login</h1>
            <p>Sign in to continue</p>
            <div class="input-box">
                <input type="text" name="username" class="form-control" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" class="form-control" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="form-control" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <select name="age" required>
                    <option value="" disabled selected>Select your age range</option>
                    <option value="18-25">18-25</option>
                    <option value="26-35">26-35</option>
                    <option value="36-45">36-45</option>
                    <option value="46+">46+</option>
                </select>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox" name="terms" required>
                    I accept the terms and conditions
                </label>
            </div>
            <button type="submit" class="btn">Login</button>
        </div>
    </form>
</body>

</html>
