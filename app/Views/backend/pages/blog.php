<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>
<div class="blog-page-content">
    <div class="image-wrapper">
        <img src="<?= $post['post_banner_url'] ?>" alt="Blog Banner">
    </div>
    <h1><?= $post['post_title'] ?></h1>
    <h1>by: <?= $post['post_author'] ?></h1>
    <p><?= $post['post_content'] ?></p>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<?= $this->endsection() ?>