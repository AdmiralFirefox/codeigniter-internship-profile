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
        <div class="skills-section" id="skills-section">
            <h1 id="title-slide">Skills</h1>

            <div class="skills-container">
                <div class="skill-content" id="fade-up-animation">
                    <p>Frontend</p>
                    <ul>
                        <?php foreach ($frontend_skills as $key => $skills): ?>
                        <li><?= $skills['skill_name'].($key === array_key_last($frontend_skills) ? '' : ',') ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="skill-content" id="fade-up-animation">
                    <p>Backend</p>
                    <ul>
                        <?php foreach ($backend_skills as $key => $skills): ?>
                        <li><?= $skills['skill_name'].($key === array_key_last($backend_skills) ? '' : ',') ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="skill-content" id="fade-up-animation">
                    <p>Databases</p>
                    <ul>
                        <?php foreach ($databases_skills as $key => $skills): ?>
                        <li><?= $skills['skill_name'].($key === array_key_last($databases_skills) ? '' : ',') ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="skill-content" id="fade-up-animation">
                    <p>AI/ML</p>
                    <ul>
                        <?php foreach ($ml_skills as $key => $skills): ?>
                        <li><?= $skills['skill_name'].($key === array_key_last($ml_skills) ? '' : ',') ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>

</html>