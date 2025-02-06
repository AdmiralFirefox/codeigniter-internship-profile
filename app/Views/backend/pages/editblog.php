<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>
<div class="edit-blog">
    <?php if (isset($validation)): ?>
    <div class="blog-error-list">
        <?= $validation->listErrors() ?>
    </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
    <p class="edit-blog-success">
        <?= session()->getFlashdata('success') ?>
    </p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
    <div class="edit-blog-error">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <form class="edit-blog-form" action="<?= route_to('admin.update_blog_handler', $post['id']) ?>" method="POST">
        <label for="post_banner_url">Banner URL</label>
        <input type="text" name="post_banner_url" id="post_banner_url" value="<?= $post['post_banner_url'] ?>"
            required />

        <label for="post_title">Post Title</label>
        <input type="text" name="post_title" id="post_title" value="<?= $post['post_title'] ?>" required />

        <label for="post_author">Author</label>
        <input type="text" name="post_author" id="post_author" value="<?= $post['post_author'] ?>" required />

        <label for="post_content">Content</label>
        <textarea name="post_content" id="post_content" value="<?= $post['post_content'] ?>"
            required><?= $post['post_content'] ?></textarea>

        <button type="submit">Update Blog</button>
    </form>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<?= $this->endsection() ?>