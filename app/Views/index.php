<?= $this->extend('layout/root_layout') ?>

<?= $this->section('content') ?>
<aside id="initialTextAnimation" class="initial-text-animation">
    <p>James Joseph Cuadra | Profile</p>
</aside>

<div class="hero-section" id="hero-section">
    <div class="hero-title">
        <h1>Hello! I&apos;m</h1>
        <h1>James Joseph Cuadra</h1>
    </div>

    <div class="hero-landscape">
        <img src="assets/neon-landscape.webp" alt="" />
    </div>

    <div class="hero-mountain">
        <img src="assets/neon-mountains.webp" alt="" />
    </div>

    <div class="gradient-shadow"></div>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<script type="module" src="/scripts/navbar.js"></script>
<script type="module" src="/scripts/initialanimation.js"></script>
<?= $this->endsection() ?>