<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>
<div style="padding-top: 6em;">
    <h1>Blog Page</h1>
    <h1><?= $post['post_title'] ?></h1>
    <h1><?= $post['post_author'] ?></h1>
    <p><?= $post['post_content'] ?></p>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<?= $this->endsection() ?>