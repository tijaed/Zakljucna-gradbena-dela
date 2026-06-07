<?php
include 'db.php';

// 1. Poiščemo trenutne podatke za izbrani ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    try {
        $sql = "SELECT * FROM kontaktni_obrazec WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $podatki = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$podatki) {
            die("Sporočilo s tem ID-jem ne obstaja.");
        }
    } catch(PDOException $e) {
        echo "Napaka: " . $e->getMessage();
    }
}

// 2. Procesiramo oddan obrazec in posodobimo bazo 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $email = $_POST['email'];
    $storitev = $_POST['storitev'];
    $velikost = isset($_POST['velikost']) ? $_POST['velikost'] : '';
    $sporocilo = isset($_POST['sporocilo']) ? $_POST['sporocilo'] : '';

    try {
        $sql_update = "UPDATE kontaktni_obrazec 
                       SET ime = :ime, priimek = :priimek, email = :email, storitev = :storitev, velikost = :velikost, sporocilo = :sporocilo 
                       WHERE id = :id";
        
        $stmt_up = $conn->prepare($sql_update);
        $stmt_up->bindParam(':id', $id);
        $stmt_up->bindParam(':ime', $ime);
        $stmt_up->bindParam(':priimek', $priimek);
        $stmt_up->bindParam(':email', $email);
        $stmt_up->bindParam(':storitev', $storitev);
        $stmt_up->bindParam(':velikost', $velikost);
        $stmt_up->bindParam(':sporocilo', $sporocilo);
        
        $stmt_up->execute();
        
        // Po uspešnem posodabljanju skočimo nazaj na admin.php
        header("Location: admin.php");
        exit();
        
    } catch(PDOException $e) {
        echo "Napaka pri posodabljanju: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Uredi povpraševanje</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container my-5" style="max-width: 600px;">
    <h2 class="mb-4 text-center">Uredi povpraševanje #<?php echo $podatki['id']; ?></h2>
    
    <div class="card p-4 shadow-sm">
        <form action="uredi.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $podatki['id']; ?>">

            <div class="mb-3">
                <label class="form-label">Ime</label>
                <input type="text" name="ime" class="form-control" value="<?php echo $podatki['ime']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Priimek</label>
                <input type="text" name="priimek" class="form-control" value="<?php echo $podatki['priimek']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">E-pošta</label>
                <input type="email" name="email" class="form-control" value="<?php echo $podatki['email']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Storitev</label>
                <select name="storitev" class="form-select" required>
                    <option value="Pleskanje in fasaderstvo" <?php if($podatki['storitev'] == 'Pleskanje in fasaderstvo') echo 'selected'; ?>>Pleskanje in fasaderstvo</option>
                    <option value="Polaganje talnih oblog" <?php if($podatki['storitev'] == 'Polaganje talnih oblog') echo 'selected'; ?>>Polaganje talnih oblog</option>
                    <option value="Polaganje keramike" <?php if($podatki['storitev'] == 'Polaganje keramike') echo 'selected'; ?>>Polaganje keramike</option>
                    <option value="Suhomontaža" <?php if($podatki['storitev'] == 'Suhomontaža') echo 'selected'; ?>>Suhomontaža</option>
                    <option value="Inštalacije" <?php if($podatki['storitev'] == 'Inštalacije') echo 'selected'; ?>>Inštalacije</option>
                    <option value="Urejanje okolice" <?php if($podatki['storitev'] == 'Urejanje okolice') echo 'selected'; ?>>Urejanje okolice</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Velikost prostora</label>
                <select name="velikost" class="form-select">
                    <option value="Do 20 m²" <?php if($podatki['velikost'] == 'Do 20 m²') echo 'selected'; ?>>Do 20 m²</option>
                    <option value="20 – 50 m²" <?php if($podatki['velikost'] == '20 – 50 m²') echo 'selected'; ?>>20 – 50 m²</option>
                    <option value="50 – 100 m²" <?php if($podatki['velikost'] == '50 – 100 m²') echo 'selected'; ?>>50 – 100 m²</option>
                    <option value="100 – 200 m²" <?php if($podatki['velikost'] == '100 – 200 m²') echo 'selected'; ?>>100 – 200 m²</option>
                    <option value="Nad 200 m²" <?php if($podatki['velikost'] == 'Nad 200 m²') echo 'selected'; ?>>Nad 200 m²</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Sporočilo</label>
                <textarea name="sporocilo" class="form-control" rows="4"><?php echo $podatki['sporocilo']; ?></textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="admin.php" class="btn btn-secondary">Prekliči</a>
                <button type="submit" class="btn btn-success">Shrani spremembe</button>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>