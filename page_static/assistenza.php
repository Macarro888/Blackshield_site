<?php
$baseUrl = "blackshield.test";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="../style/black.css">

    <!-- Classic Elements -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackshield - Assistenza</title>
    <meta name="description" content="Pagina di assistenza di Blackshied, con questa pagina è possibile per gli utenti contattare l'assistenza tecnica oppure commerciale">

</head>

<body>
    <header>
        <section class="top-bar-icon">
            <div class="navigation_header_icon" tabindex="0" aria-haspopup="true">
                <a href="../index.php">
                    <img src="../img_static/icon/home.png" alt="Logo" class="home-icon">
                </a>
            </div>
        </section>
    </header>
    <main>
        <section class="article-container">
            <div class="head_article">
                <img src="../img_static/logo.png " alt="Logo" class="logo_article">
                <h1>Assistenza</h1>
            </div>
        </section>
        <?php if (isset($_GET['mode']) && $_GET['mode'] == 1){ ?>

        <section class="article_content">
            <p> Grazie per averci contattato! Il tuo messaggio è stato ricevuto e il nostro team di assistenza ti risponderà al più presto. Se hai ulteriori domande o necessiti di assistenza immediata, non esitare a contattarci nuovamente. Siamo qui per aiutarti!</p>
        </section>
       <?php } else { ?>
        <section>
            <div class="assistenza">
                <form class="form-card" action="?mode=1" method="post">
                    <h2>Contattaci</h2>

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="messaggio">Messaggio</label>
                        <textarea id="messaggio" name="messaggio" rows="4" required></textarea>
                    </div>

                    <button type="submit">Invia</button>
                </form>
            </div>
            <?php } ?>
    </main>
</body>



</html>