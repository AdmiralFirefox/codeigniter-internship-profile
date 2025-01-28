<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['site_title' => 'James Joseph Cuadra | Portfolio']) ?>

    <script type="module" src="scripts/navbar.js" defer></script>
    <script type="module" src="scripts/titleslide.js" defer></script>
    <script type="module" src="scripts/revealanimate.js" defer></script>
</head>

<body>
    <?= view('components/header') ?>

    <main>
        <div class="projects-section" id="projects-section">
            <h1 id="title-slide">Projects</h1>
            <ul class="projects-container">
                <?php foreach ($projects as $project): ?>
                <li class="rev-block" id="reveal-animation">
                    <div class="project-content" id="reveal-opacity-animation">
                        <p><?= $project['project_name'] ?></p>
                        <p><?= $project['project_description'] ?></p>
                        <a href="<?= $project['project_link'] ?>" target="_blank">View the Site Here</a>
                    </div>
                </li>
                <?php endforeach?>
            </ul>
        </div>
    </main>
</body>

</html>