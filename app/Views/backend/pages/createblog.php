<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>
<div class="create-blog">
    <?php if (isset($validation)): ?>
    <div class="blog-error-list">
        <?= $validation->listErrors() ?>
    </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
    <p class="create-blog-success">
        <?= session()->getFlashdata('success') ?>
    </p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
    <div class="create-blog-error">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <form class="create-blog-form" id="createBlogForm" action="<?= route_to('admin.create_blog_handler') ?>"
        method="POST">
        <label for="banner_url">Banner URL</label>
        <input type="text" name="banner_url" id="banner_url" required />

        <label for="post_title">Post Title</label>
        <input type="text" name="post_title" id="post_title" required />

        <label for="post_author">Author</label>
        <input type="text" name="post_author" id="post_author" required />

        <label for="post_content">Content</label>
        <textarea name="post_content" id="post_content" required></textarea>

        <button type="submit" id="createBlogButton">Create Blog</button>
    </form>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<script type="module" src="/scripts/createblog.js"></script>
<?= $this->endsection() ?>