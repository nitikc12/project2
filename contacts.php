<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="contacts.css">
    <!-- <link rel="stylesheet" href="nav1.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <h2 class="logo">Jensetter</h2>
        <!-- <div class="search">
            <input class="srch" type="search" name="" placeholder="Type to text">
            <a href="#">
                <button class="btn">Search</button>
            </a>
        </div> -->
        <nav class="navigation">
            <a class="your-button-class" href="Home.php">Home</a>
            <a class="your-button-class" href="about.php">About</a>
            <a class="your-button-class" href="product.php">Product</a>
            <a class="your-button-class" href="contacts.php">Contact</a>
            <button class="btnLogin-popup" onclick="location.href='Login.php';">Login</button>
        </nav>
    </header>
    <div class="contact-form">
        <h1>Contact Us</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Contact Us</h2>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Enter Your Name">
                      
                        <input type="email" name="name" placeholder="Enter Your Email">
                        <textarea name="message" placeholder="Your Message"></textarea>                   
             <button type="submit" class="btn">Send <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="form-img">
                    <img src="./images/contact.png" alt="">
                </div>
            </div>
        </div>
    </div> 
</body>
</html>