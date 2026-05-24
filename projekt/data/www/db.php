<?php  

$servername = "podatkovna-baza";
$username = "root";
$password = "superVarnoGeslo";
$dbname = "gradbenistvo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // nastavi PDO error mode na exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<p style='color:green; text-align:center;'>
    Povezava na bazo uspešna
    </p>";

} catch(PDOException $e) {
    echo "<p style='color:red; text-align:center;'>
    Napaka pri vzpostavljanju povezave: " . $e->getMessage() . "
    </p>";
}  

?>