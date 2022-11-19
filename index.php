<?php
$conn = mysqli_connect('localhost', 'root', '', 'projectdb') or die("Unable to connect to database");
echo "Great Work!";


$sql = 'SELECT id, name, ex FROM exampletbl ORDER BY id';

$result = mysqli_query($conn, $sql);

$final = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($final);
?>
<html>
    <body>
        <p>My first paragraph.</p>
        <h1>Hello World !</h1>
    </body>
</html>