<?php

        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "login";
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        
        $search = $_POST["search"];
        $sql = "SELECT * FROM product WHERE Name LIKE '%$search%'";
        $result = mysqli_query($connection, $sql);

        while ($row = mysqli_fetch_row($result)) {
            // Display each result inside the loop
            echo"<h3>{$row [1]}</h3>";
            echo("<img src= '$row[4]'>");

            // Add other elements you want to display
        }
        ?>