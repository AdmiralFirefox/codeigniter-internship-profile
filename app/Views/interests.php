<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['site_title' => 'James Joseph Cuadra | Portfolio']) ?>

    <script type="module" src="scripts/navbar.js" defer></script>
    <script type="module" src="scripts/titleslide.js" defer></script>
    <script type="module" src="scripts/fadeupanimate.js" defer></script>
</head>

<body>
    <?= view('components/header') ?>

    <main>
        <div class="interests-section" id="interests-section">
            <h1 id="title-slide">Interests</h1>

            <div class="interests-content">
                <div class="interests-info" id="fade-up-animation">
                    <div class="interests-icon">
                        <img src="assets/youtube.png" alt="hobbies" />
                    </div>
                    <p>
                        My hobbies include playing games, listen to music and watching
                        Netflix and YouTube.
                    </p>
                </div>

                <div class="interests-info" id="fade-up-animation">
                    <div class="interests-icon">
                        <img src="assets/microphone.png" alt="talents" />
                    </div>
                    <p>My talents include Speaking/VO and Dancing.</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>