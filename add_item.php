<?php
$connect = mysqli_connect('localhost', 'root', '', 'sell-list-db');

if (!$connect) {
    exit("Błąd połączenia z serwerem MySQL");
}

$item = $_POST['przedmiot'];
$price = $_POST['price'];
$sprzedane = $_POST['sprzedane'];

$add = "INSERT INTO Rzeczy VALUES ('', '$item', '$price', '$sprzedane')";

$ask = mysqli_query($connect, $add);
if (!$add === true) {
    echo "Error";
} else {
    echo "Done";
}

mysqli_close($do_bazy);
?>
