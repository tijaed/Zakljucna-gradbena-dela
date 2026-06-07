<?php include 'db.php'; 

// DEL ZA SHRANJEVANJE PODATKOV (POST & INSERT) 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $email = $_POST['email'];
    $storitev = $_POST['storitev'];
    // Za polja ki niso obvezna preverimo če obstajajo 
    $velikost = isset($_POST['velikost']) ? $_POST['velikost'] : '';
    $sporocilo = isset($_POST['sporocilo']) ? $_POST['sporocilo'] : '';

    try {
        
        $sql = "INSERT INTO kontaktni_obrazec (ime, priimek, email, storitev, velikost, sporocilo) 
                VALUES (:ime, :priimek, :email, :storitev, :velikost, :sporocilo)";
        
        $stmt = $conn->prepare($sql);
        
        
        $stmt->bindParam(':ime', $ime);
        $stmt->bindParam(':priimek', $priimek);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':storitev', $storitev);
        $stmt->bindParam(':velikost', $velikost);
        $stmt->bindParam(':sporocilo', $sporocilo);
        
        
        $stmt->execute();

        
        echo "<p style='color:green; font-weight:bold; text-align:center; background-color:#d4edda; padding:15px; margin:0;'>
                Hvala! Vaše sporočilo za Novak Zaključna dela je bilo uspešno shranjeno v bazo.
              </p>";
              
    } catch(PDOException $e) {
        echo "<p style='color:red; font-weight:bold; text-align:center; background-color:#f8d7da; padding:15px; margin:0;'>
                Napaka pri shranjevanju v bazo: " . $e->getMessage() . "
              </p>";
    }
}
?>

<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- NASLOV -->
<div class="container text-center">
  <h1 class="hero-title">Kontakt</h1>
</div>

<!-- KARTICE -->
<div class="container pb-5">
  <div class="row justify-content-center g-4">

    <!-- TELEFON -->
    <div class="col-md-4 col-lg-3">
      <div class="contact-card card-phone">
        <i class="bi bi-telephone icon"></i>
        <h4>Telefon</h4>
        <p>040 434 565</p>
      </div>
    </div>

    <!-- NASLOV -->
    <div class="col-md-4 col-lg-3">
      <div class="contact-card card-address">
        <i class="bi bi-geo-alt icon"></i>
        <h4>Naslov</h4>
        <p>Cankarjeva ulica 4,<br>2000 Maribor</p>
      </div>
    </div>

    <!-- EMAIL -->
    <div class="col-md-4 col-lg-3">
      <div class="contact-card card-email">
        <i class="bi bi-envelope icon"></i>
        <h4>E-pošta</h4>
        <p>novak_zakljucnadela@gmail.com</p>
      </div>
    </div>

  </div>
</div>

<!-- OBRAZEC + MAPA -->
<div class="container my-5">
  <div class="row g-4 align-items-stretch">

    <!-- OBRAZEC -->
    <div class="col-lg-5">
      <div class="form-box">

        <form action="kontakt.php" method="POST">

          <div class="form-group">
            <label>Ime</label>
            <input type="text" name="ime" class="form-control" placeholder="Vnesite ime" required>
          </div>

          <div class="form-group">
            <label>Priimek</label>
            <input type="text" name="priimek" class="form-control" placeholder="Vnesite priimek" required>
          </div>

          <div class="form-group">
            <label>E-pošta</label>
            <input type="email" name="email" class="form-control" placeholder="Vnesite e-pošto" required>
          </div>

          <div class="form-group">
            <label>Storitev</label>
            <select name="storitev" class="form-select" required>
              <option selected disabled>Izberite storitev</option>
              <option>Pleskanje in fasaderstvo</option>
              <option>Polaganje talnih oblog</option>
              <option>Polaganje keramike</option>
              <option>Suhomontaža</option>
              <option>Inštalacije</option>
              <option>Urejanje okolice</option>
            </select>
          </div>

          <div class="form-group">
            <label>Velikost prostora</label>
            <select name="velikost" class="form-select">
              <option selected disabled>Izberite velikost prostora</option>
              <option>Do 20 m²</option>
              <option>20 – 50 m²</option>
              <option>50 – 100 m²</option>
              <option>100 – 200 m²</option>
              <option>Nad 200 m²</option>
            </select>
          </div>

          <div class="form-group">
            <label>Sporočilo</label>
            <textarea name="sporocilo" class="form-control" placeholder="Napišite sporočilo"></textarea>
          </div>

          <button type="submit" class="btn btn-submit w-100">
            Pošlji
          </button>

        </form>

      </div>
    </div>

    <!-- MAPA -->
    <div class="col-lg-7">
      <div class="map-box">
        <iframe 
          src="https://www.google.com/maps?q=Cankarjeva+ulica+4,+Maribor&output=embed"
          width="100%" 
          height="100%" 
          style="border:0;">
        </iframe>
      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html> 