<?php
$conn = mysqli_connect('localhost', 'userme', 'test1234', 'newnww') or die("Unable to connect to database");
echo "Great Work!";

$sql = 'SELECT id, name, ex FROM exampletbl ORDER BY id';

$result = mysqli_query($conn, $sql);

$final = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($final);
?>
<html>
    <body>
        <p>Hello</p>
    </body>
</html>