<?php
include 'db.php';

//  DEL ZA BRISANJE PODATKOV (DELETE) 
if (isset($_GET['izbrisi_id'])) {
    $id_za_brisat = $_GET['izbrisi_id'];
    try {
        $sql_delete = "DELETE FROM kontaktni_obrazec WHERE id = :id";
        $stmt_del = $conn->prepare($sql_delete);
        $stmt_del->bindParam(':id', $id_za_brisat);
        $stmt_del->execute();
        
        // Osveži stran
        header("Location: admin.php");
        exit();
    } catch(PDOException $e) {
        echo "Napaka pri brisanju: " . $e->getMessage();
    }
}

//  DEL ZA BRANJE PODATKOV (SELECT) 
try {
    $sql_select = "SELECT * FROM kontaktni_obrazec ORDER BY datum_vnosa DESC";
    $stmt = $conn->query($sql_select);
    $vsa_sporocila = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Napaka pri branju podatkov: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Admin Plošča - Novak Zaključna Dela</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container my-5">
    <h1 class="mb-4 text-center">Pregled prejetih povpraševanj (Admin)</h1>
    
    <table class="table table-striped table-hover table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Ime in Priimek</th>
                <th>E-pošta</th>
                <th>Storitev</th>
                <th>Velikost</th>
                <th>Sporočilo</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($vsa_sporocila) > 0): ?>
                <?php foreach ($vsa_sporocila as $row): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['ime'] . " " . $row['priimek']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['storitev']; ?></td>
                        <td><?php echo $row['velikost']; ?></td>
                        <td><?php echo nl2br($row['sporocilo']); ?></td>
                        <td>
                            <a href="uredi.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm me-1">Uredi</a>
                            
                            <a href="admin.php?izbrisi_id=<?php echo $row['id']; ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Ali ste prepričani, da želite izbrisati to sporočilo?');">
                               Izbriši
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">Ni prejetih sporočil v bazi.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>

</body>
</html>