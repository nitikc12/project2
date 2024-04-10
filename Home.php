<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="nav1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <h2 class="logo">Jensetter</h2>
        <div class="search">
            <input class="srch" type="search" name="" placeholder="Type to text">
            <a href="#">
                <button class="btn">Search</button>
            </a>
        </div>
        <nav class="navigation">
            <a class="your-button-class" href="Home.php">Home</a>
            <a class="your-button-class" href="about.php">About</a>
            <a class="your-button-class" href="product.php">Product</a>
            <a class="your-button-class" href="contacts.php">Contact</a>
            <button class="btnLogin-popup" onclick="location.href='Login.php';">Login</button>
        </nav>
    </header>
    <div class="content">
        <a href="#" class="btn">Get started</a>
        <h3>Find your style</h3>
        <p>Refresh your style with in-trend pieces<br>from our clothing collection</p>
    </div>
    <img src="img.png" class="feature-img">
</body>

</html>
