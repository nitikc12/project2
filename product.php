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
        <div class="search">
            <form action="search.php" method="post"><input class="srch" type="text" name="search" placeholder="Type to text">
            <a href="#">
                <button class="btn">Search</button>
            </a></form>
        </div>
        <nav class="navigation">
            <a class="your-button-class" href="Home.php">Home</a>
            <a class="your-button-class" href="about.php">About</a>
            <a class="your-button-class" href="product.php">Product</a>
            <a class="your-button-class" href="contacts.php">Contact</a>
            <button class="btnLogin-popup" onclick="location.href='Login.php';">Login</button>
        </nav>
    </header>
    <div class="heading">
        <h1>Winter Collection</>
        
    </div>

    <div class="row">
        <div class="col-md-10">
    <?php 
      
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "login";
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        $sql="SELECT * FROM product";
        $result=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_row($result)){
            echo("<div class='row'>");
                echo("<div class='col-md-4 mb-2'><div class='card' >");
                    echo("<img src='$row[4]' class='card-img-top' alt='...''>");
                    echo("<div class='card-body'>
                      <h5 class='card-title'>$row[1]</h5>
                      <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href='#' class='btn btn-primary'>Add to cart</a>
                      <a href='#' class='btn btn-primary'>View more</a>
                    </div>
                </div>
            </div>");
        } 
    ?>   
                <!-- <div class="col-md-4 mb-2"><div class="card" >
  </div> -->
  </div></div>

            </div>
        

    </div>
    <!-- <div class="row"> -->
    <div class="col-md-2 bg-secondary">
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Category</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Jacket</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Hoodie</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Gloves</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Coat</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Socks</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Scarf</h4></a>
            </li>
        </ul> 
        

    </div>
</body>
</html>