<?= $this->extend('layout/root_layout') ?>

<?= $this->section('datatables') ?>
<!-- Bulma -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.1/css/bulma.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.2.1/css/dataTables.bulma.css" rel="stylesheet">
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

<div class="user-table-content">
    <table id="example" class="table is-striped" style="width:100%">
        <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user):?>
            <tr>
                <td><?= $user['email'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['subject'] ?></td>
                <td><?= $user['message'] ?></td>
                <td><?= $user['created_at'] ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="scripts/navbar.js"></script>
<script type="module" src="scripts/contacts.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.bulma.js"></script>
<?= $this->endsection() ?>