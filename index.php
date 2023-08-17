<?php
  require './inc/header.php';
?>
    <div class="container my-5">
        <h1>Museum Registration Portal </h1>               
        <br>

        <h2>Visitors</h2>
        <a class="btn btn-primary" href="register.php" role="button">New visitor</a>
        <a href="login.php" class = "btn btn-primary login">Login</a>
        <br>
        <table class = 'table'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "museum";

                    // create connection
                    $connection = new mysqli($server, $username, $password, $dbname);

                    // check connection
                    if($connection->connect_error) {
                        die("Connection Failed: " . $connection->connect_error);
                    }

                    // read all row from table
                    $sql = "SELECT * FROM people";
                    $result = $connection->query($sql);

                    if(!$result) {
                        die("Invalid querry: " . $connection->error);
                    }

                    while ($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[fname]</td>
                            <td>$row[city]</td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php
  require './inc/footer.php';
?>