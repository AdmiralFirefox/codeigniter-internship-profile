<?= $this->extend('layout/root_layout') ?>

<?= $this->section('scripts') ?>
<script type="module" src="scripts/navbar.js" defer></script>
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<div class="contacts-section" id="contacts-section">
    <div class="contact-info">
        <h1>Let&apos;s work together!</h1>
        <p>jamesjoseph.cuadra@wvsu.edu.ph</p>
    </div>
    <div class="contact-links">
        <a href="https://github.com/admiralfirefox" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>
        <a href="https://m.me/jjlcuadra" target="_blank">
            <i class="fa-brands fa-facebook-messenger"></i>
        </a>
        <a href="https://www.linkedin.com/in/jjlcuadra" target="_blank">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
    </div>
</div>
<?= $this->endsection() ?>