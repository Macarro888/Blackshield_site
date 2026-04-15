<?php
$baseUrl = "blackshield.test";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="style/black.css">

    <!-- Classic Elements -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackshield - Home</title>
    <meta name="description" content="Home page di Blackshield, azienda leader nel settore  della sicurezza informatica. Scopri i nostri servizi e progetti.">

</head>

<body>
    <header>
        <section class="top-bar">
            <!-- ogni voce è un contenitore (.navigation_header) con label + submenu nascosto -->
            <div class="navigation_header" tabindex="0" aria-haspopup="true">
                <label>l'azienda</label>
                <div class="submenu">
                    <a href="/page_static/chi_siamo.php">Chi siamo?</a>
                    <a href="/page_static/missione.php">La nostra missione</a>
                    <a href="/page_static/collaborazioni.php">Collaborazione</a>
                    <a href="/page_static/team.php">Il nostro team</a>
                </div>
            </div>

            <div class="navigation_header" tabindex="0" aria-haspopup="true">
                <label>Servizi</label>
                <div class="submenu">
                    <a href="/page_static/el_servi.php">Elenco servizi</a>
                    <a href="/page_static/Tech_ad.php">Tecnologie adottate</a>
                    <a href="/page_static/hardware.php">Hardware</a>
                    <a href="/page_static/software.php">Software</a>
                </div>
            </div>
            <div class="navigation_header" tabindex="0" aria-haspopup="true">
                <label>Clienti & Progetti</label>
                <div class="submenu">
                    <a href="/page_static/testimonianze.php">Testimonianze</a>
                    <a href="/page_static/Progetti_n.php">Progetti noti</a>
                    <a href="/page_static/corsi.php">Corsi</a>
                </div>
            </div>

            <div class="navigation_header" tabindex="0" aria-haspopup="true">
                <label>Contatti</label>
                <div class="submenu">
                    <a href="/page_static/assistenza.php">Assistenza</a>
                    <a href="#">Lavora con noi</a>
                </div>
            </div>
            </div>
        </section>
    </header>

    <main>
        <div class="Info-sedi">
            <img src="img_static\logo.png" alt="Logo Est Sesia" class="logo-blackshield">
            <br>
            <h2 id="scritta_sedeCentrale">Sedi principali</h2>
            <hr id="linea_sedeCentrale" />
            <div class="Info-sediC">
                <br>
                <h3> Milano </h3>
                <br>
                <p>
                    <img src="img_static/icon/map.png" alt="Mappa Icon" class="mappa-icon">
                    <strong>Indirizzo</strong> Via Cesare Correnti, 8<br />
                    <img src="img_static/icon/telefono.png" alt="Telefono Icon" class="telefono-icon">
                    <strong>Telefono</strong> +39 xxx xxx xxxx<br />
                    <img src="img_static/icon/email.png" alt="Email Icon" class="email-icon">
                    <strong>Email</strong> <a href="mailto: www.email@gmail.it">www.email@gmail.it</a>
                </p>
            </div>

            <div class="Info-sediC">
                <br>
                <h3>Roma</h3>
                <br>
                <p>
                    <img src="img_static/icon/map.png" alt="Mappa Icon" class="mappa-icon">
                    <strong>Indirizzo</strong> Via Tuscolana, 1<br />
                    <img src="img_static/icon/telefono.png" alt="Telefono Icon" class="telefono-icon">
                    <strong>Telefono</strong> +39 xxx xxx xxxx<br />
                    <img src="img_static/icon/email.png" alt="Email Icon" class="email-icon">
                    <strong>Email</strong> <a href="mailto:www.email@gmail.it">www.email@gmail.it</a>
                </p>
            </div>

            <div class="Info-sediC">
                <br>
                <h3>Palermo</h3>
                <br>
                <p>
                    <img src="img_static/icon/map.png" alt="Mappa Icon" class="mappa-icon">
                    <strong>Indirizzo</strong> Via della Libertà, 30<br />
                    <img src="img_static/icon/telefono.png" alt="Telefono Icon" class="telefono-icon">
                    <strong>Telefono</strong> +39 xxx xxx xxxx<br />
                    <img src="img_static/icon/email.png" alt="Email Icon" class="email-icon">
                    <strong>Email</strong> <a href="mailto:www.email@gmail.it">www.email@gmail.it</a>
                </p>
            </div>
            <br>
            <a href="#" class="info-link">Sedi Esterne</a>
        </div>
        <div class="showbar">
            <img src="img_static\example_img.jpg" alt="Shwobard Est Sesia" class="showbar-img">
        </div>
        </div>
    </main>
    <?php include  'footer.php'; ?>
</body>

</html>