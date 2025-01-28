<?= $this->extend('layout/root_layout') ?>

<?= $this->section('scripts') ?>
<script type="module" src="scripts/navbar.js" defer></script>
<script type="module" src="scripts/titleslide.js" defer></script>
<script type="module" src="scripts/revealanimate.js" defer></script>
<?= $this->endsection() ?>

<?= $this->section('content') ?>
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
<?= $this->endsection() ?>