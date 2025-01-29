<?= $this->extend('layout/root_layout') ?>

<?= $this->section('scripts') ?>
<script type="module" src="scripts/navbar.js" defer></script>
<script type="module" src="scripts/contacts.js" defer></script>
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<div class="contacts-section" id="contacts-section">
    <div class="contact-info">
        <h1>Let&apos;s work together!</h1>
    </div>

    <?php if (isset($validation)): ?>
    <div class="error-list">
        <?= $validation->listErrors() ?>
    </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
    <p class="message-sent-success">
        <?= session()->getFlashdata('success') ?>
    </p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
    <div class="message-sent-error">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <form class="contact-form" id="contactForm" action=" /sendEmail" method="POST">
        <label for=" email">Your Email</label>
        <input type="text" name="email" id="email" required />

        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" required />

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required />

        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>

        <button type="submit" id="submitButton">Send Message</button>
    </form>
    <div class=" contact-links">
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