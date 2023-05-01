<?php
    if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Landing Page</title>
</head>
<body>
    <main id="directory">
        <header>
            <div class="horizontal-container home-nav nav">
                <!-- Open Menu For Profile Options -->
                <a href="accounts.view.php"><ion-icon class="profile-button" name="person-circle-outline"></ion-icon></a>
            </div>
        </header>
        <article id="landing-page">
            <div class="horizontal-container flex-center">
                <div class="left-directory-icon directory-icon">
                    <a class="directory-link to-builder" href="characterBuilder/race.php">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </a>
                    <p class="hide hide-builder">Builder</p>
                </div>
                <div class="directory-icon">
                    <a class="directory-link to-roster" href="roster.view.php">
                        <ion-icon name="people-outline"></ion-icon>
                    </a>
                    <p class="hide hide-roster">Roster</p>
                </div>
                <div class="directory-icon right-directory-icon">
                    <a class="directory-link to-edit" href="character-sheet.view.php">
                        <ion-icon name="document-outline"></ion-icon>
                    </a>
                    <p class="hide hide-edit">Character<br>Sheetz</p>
                </div>
            </div>
        </article>
        <footer>
            <div class="footer">

            </div>
        </footer>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>