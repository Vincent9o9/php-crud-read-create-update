<?php
include __DIR__ .'/../database.php';
if(empty($_POST['roomNumber'])) {
    die('Non hai inserito il numero della stanza');
}
if(empty($_POST['floor'])) {
    die('Non hai inserito il numero del piano');
}
if(empty($_POST['beds'])) {
    die('Non hai inserito il numero dei letti');
}
$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, update_at) VALUES(?,?,?,NOW(),NOW())";
$stmt = $conn->prepare($sql);
// Istan<iamo il comando parametrico sostituendo i valori effettivi
// al posto dei ?. bind_param resituisce un valore booleano (true oppure false).
$sql->bind_param("iii", $roomN, $floor, $beds);
$roomN = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];
$stmt->execute();
if($stmt && $stmt->affected_rows > 0) {
    header("Location: $host.$folder/show.php?id=$stmt->insert_id");
} elseif($stmt) {
    die("Nessun inserimento");
}
$stmt->close();
$conn->close();
?>
