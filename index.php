<?php
$conn = mysqli_connect('localhost', 'username', 'password', 'dbname') or die("Unable to connect to database");
echo "Great Work!";

//sql staments
$sql = 'SELECT id, name, ex FROM table_name ORDER BY id';

//print out the result
$result = mysqli_query($conn, $sql);


//rep result in the form of an array
$final = mysqli_fetch_all($result, MYSQLI_ASSOC);


//free result from memory
print_r($final);
?>
<html>
    <body>
        <p>Hello</p>

    </body>
</html>