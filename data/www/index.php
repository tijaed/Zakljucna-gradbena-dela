<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts – Montserrat pisava -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Zaključna Dela Novak - Storitve</title>
</head>
 
<body>
  
  <!-- NAVIGACIJA -->
  <?php require_once 'nav.php'; ?>
 
 
  <!-- STORITVE -->
 
  <h1 class="naslov-storitve">NAŠE STORITVE</h1>
 
  <section class="storitve-ozadje">
    <div class="container">
      <div class="row g-3">
 
        <!-- Kartica 1: Pleskanje in fasaderstvo -->
        <!-- Gumb kaže na modal z id="modal-pleskanje" -->
        <div class="col-md-4">
          <div class="card">
            <img src="Pleskanje in fasaderstvo.jpg" class="card-img-top" alt="Slika pleskanja in fasaderstva">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Kakovostna zaščita in estetska obdelava zunanjih in notranjih površin</p><br>
              <button type="button" class="btn btn-cena" data-bs-toggle="modal" data-bs-target="#modal-pleskanje">
                25-70€/m2
              </button>
            </div>
          </div>
        </div>
 
        <!-- KARTICA 2: Polaganje talnih oblog -->
        <!-- Gumb kaže na modal z id="modal-talne" -->
        <div class="col-md-4">
          <div class="card">
            <img src="pOLAGANJE TALNIH OBLOG.jpg" class="card-img-top" alt="Slika polaganje talnih oblog">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Vgradnja parketa, laminata, vinila in drugih talnih rešitev</p><br><br>
              <button type="button" class="btn btn-cena" data-bs-toggle="modal" data-bs-target="#modal-talne">
                10-30€/m2
              </button>
            </div>
          </div>
        </div>
 
        <!-- KARTICA 3: Polaganje keramike -->
        <!-- Gumb kaže na modal z id="modal-keramika" -->
        <div class="col-md-4">
          <div class="card">
            <img src="Polaganje keramike.jpg" class="card-img-top" alt="Slika polaganje keramike">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Polaganje ploščic za kopalnice, kuhinje in druge prostore</p><br><br>
              <button type="button" class="btn btn-cena" data-bs-toggle="modal" data-bs-target="#modal-keramika">
                15-40€/m2
              </button>
            </div>
          </div>
        </div>
 
      </div>
    </div>
  </section>
 
  <div class="razmak-med-vrsticama"></div>
 
  <section class="storitve-ozadje">
    <div class="container">
      <div class="row g-3">
 
        <!-- KARTICA 4: Suhomontaža -->
        <!-- Gumb kaže na modal z id="modal-suho" -->
        <div class="col-md-4">
          <div class="card">
            <img src="Suhomontaža.jpg" class="card-img-top" alt="Slika Suhomontaža">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Izdelava predelnih sten, spuščenih stropov in drugih knauf rešitev</p><br><br>
              <button type="button" class="btn btn-cena" data-bs-toggle="modal" data-bs-target="#modal-suho">
                15-35€/m2
              </button>
            </div>
          </div>
        </div>
 
        <!-- KARTICA 5: Inštalacije -->
        <!-- Gumb kaže na modal z id="modal-instalacije" -->
        <div class="col-md-4">
          <div class="card">
            <img src="Inštalacije.jpg" class="card-img-top" alt="Slika Inštalacije">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Izvedba elektro in vodovodnih napeljav ter montaža opreme</p><br><br><br>
              <button type="button" class="btn btn-cena" data-bs-toggle="modal" data-bs-target="#modal-instalacije">
                od 20€
              </button>
            </div>
          </div>
        </div>
 
        <!-- KARTICA 6: Urejanje okolice -->
        <!-- Gumb kaže na modal z id="modal-okolica" -->
        <div class="col-md-4">
          <div class="card">
            <img src="Urejanje okolice.jpg" class="card-img-top" alt="Slika Urejanje okolice">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Celovita ureditev dvorišč, tlakovcev, teras, ograj in zunanjih površin</p><br><br>
              <button type="button" class="btn btn-cena" data-bs-toggle="modal" data-bs-target="#modal-okolica">
                20-60€/m2
              </button>
            </div>
          </div>
        </div>
 
      </div>
    </div>
  </section>
 
 
  <!-- REZERVIRAJ TERMIN -->
  <section class="cta-odsek">
      <div class="d-flex justify-content-center mt-5">
          <a href="#kontakt" class="btn-novak">Rezerviraj termin</a>
      </div>
  </section>
 
 
  <!-- MODALI -->
  
  <!-- MODAL 1: Pleskanje in fasaderstvo -->
  <div class="modal fade" id="modal-pleskanje" tabindex="-1" aria-labelledby="modal-pleskanje-naslov" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-pleskanje-naslov">Pleskanje in fasaderstvo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zapri"></button>
        </div>
        <div class="modal-body">

          <!-- VSEBINA:-->
          <p>Cena: 25–70 €/m2</p>
          <p>Izvajamo kakovostno notranje in zunanje pleskanje stanovanjskih, poslovnih in drugih objektov ter 
            izdelavo fasad različnih vrst. Poskrbimo za pripravo površin, zaščito prostorov, 
            glajenje sten in natančen nanos barv ter fasadnih materialov. 
            Pri delu uporabljamo preverjene materiale, ki zagotavljajo dolgotrajno zaščito in 
            estetski videz objekta.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zapri</button>
        </div>
      </div>
    </div>
  </div>
 
  <!-- MODAL 2: Polaganje talnih oblog -->
  <div class="modal fade" id="modal-talne" tabindex="-1" aria-labelledby="modal-talne-naslov" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-talne-naslov">Polaganje talnih oblog</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zapri"></button>
        </div>
        <div class="modal-body">
          
          <p>Cena: 10–30 €/m2</p>
          <p>Nudimo strokovno polaganje različnih talnih oblog, kot so parket, laminat, vinil in druge moderne 
            talne rešitve. Poskrbimo za pripravo in izravnavo podlage, natančno polaganje ter kakovostno 
            končno obdelavo. Naše storitve so primerne tako za novogradnje kot tudi za prenove stanovanjskih 
            in poslovnih prostorov.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zapri</button>
        </div>
      </div>
    </div>
  </div>
 
  <!-- MODAL 3: Polaganje keramike -->
  <div class="modal fade" id="modal-keramika" tabindex="-1" aria-labelledby="modal-keramika-naslov" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-keramika-naslov">Polaganje keramike</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zapri"></button>
        </div>
        <div class="modal-body">
          
          <p>Cena: 15–40 €/m2</p>
          <p>Izvajamo profesionalno polaganje keramike za kopalnice, kuhinje, hodnike, terase in 
            druge notranje ali zunanje površine. Poskrbimo za natančno pripravo podlage, ravno polaganje 
            ploščic ter kakovostno fugiranje za trajno obstojnost in lep videz prostora. 
            Dela izvajamo z veliko mero natančnosti in prilagoditve željam stranke.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zapri</button>
        </div>
      </div>
    </div>
  </div>
 
  <!-- MODAL 4: Suhomontaža -->
  <div class="modal fade" id="modal-suho" tabindex="-1" aria-labelledby="modal-suho-naslov" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-suho-naslov">Suhomontaža</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zapri"></button>
        </div>
        <div class="modal-body">
         
          <p>Cena: 15–35 €/m2</p>
          <p>Izdelujemo različne suhomontažne sisteme, kot so predelne stene, spuščeni stropi, 
            obloge sten in druge knauf rešitve. Poskrbimo za hitro, čisto in kakovostno izvedbo, 
            ki omogoča funkcionalno in estetsko ureditev prostora. Rešitve prilagodimo potrebam 
            prostora ter željam naročnika.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zapri</button>
        </div>
      </div>
    </div>
  </div>
 
  <!-- MODAL 5: Inštalacije -->
  <div class="modal fade" id="modal-instalacije" tabindex="-1" aria-labelledby="modal-instalacije-naslov" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-instalacije-naslov">Inštalacije</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zapri"></button>
        </div>
        <div class="modal-body">
          
          <p>Cena: od 20 €</p>
          <p>Izvajamo elektro in vodovodne inštalacije ter montažo različne opreme za stanovanjske in 
            poslovne objekte. Poskrbimo za varno, zanesljivo in profesionalno izvedbo vseh napeljav, 
            od manjših popravil do celovitih inštalacijskih del. Pri delu se osredotočamo na kakovost, 
            varnost in dolgoročno delovanje sistemov.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zapri</button>
        </div>
      </div>
    </div>
  </div>
 
  <!-- MODAL 6: Urejanje okolice -->
  <div class="modal fade" id="modal-okolica" tabindex="-1" aria-labelledby="modal-okolica-naslov" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-okolica-naslov">Urejanje okolice</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zapri"></button>
        </div>
        <div class="modal-body">
          
          <p>Cena: 20–60 €/m2</p>
          <p>Nudimo celovito urejanje zunanjih površin, vključno s polaganjem tlakovcev, izdelavo teras, 
            postavitvijo ograj ter urejanjem dvorišč in poti okoli objekta. 
            Poskrbimo za funkcionalno in estetsko ureditev okolice, ki izboljša videz in 
            uporabnost prostora. Vsak projekt prilagodimo željam stranke in značilnostim terena.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zapri</button>
        </div>
      </div>
    </div>
  </div>
 

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
  <!-- FOOTER -->
  <?php require_once 'footer.php'; ?>
 
</body>
</html>