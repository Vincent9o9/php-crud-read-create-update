<?php
include __DIR__ .'/../database.php';
if (empty($_POST['id'])) {
    die('Nessun id');
}
$id = $_POST['id'];
$sql = "DELETE FROM stanze WHERE id = $id";
$result = $conn->query($sql);
if($result) {
    echo "Ok";
} else {
    echo "Non ho cancellato";
}
$conn->close();
?>
