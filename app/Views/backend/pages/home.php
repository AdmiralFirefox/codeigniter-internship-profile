<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>
<div class="blog-dashboard">
    <div class="blog-actions">
        <a href="<?= route_to('admin.create_blog') ?>">Create Blog</a>
        <a href="<?= route_to('admin.logout')?>">Log Out</a>
    </div>
    <?php if(!empty(session()->getFlashData('success'))): ?>
    <p class="delete-success">
        <?= session()->getFlashdata('success') ?>
    </p>
    <?php endif;?>

    <?php if(!empty(session()->getFlashData('error'))): ?>
    <p class="delete-error">
        <?= session()->getFlashdata('error') ?>
    </p>
    <?php endif;?>
    <ul class="blog-posts">
        <?php foreach($posts as $post): ?>
        <li>
            <p><?= $post['post_title']?></p>
            <p><?= $post['post_author']?></p>
            <p id="postContent"><?= $post['post_content']?></p>
            <div class="post-actions">
                <a href="<?= route_to('post.view', $post['post_slug']) ?>">View Post</a>
                <a href="">Edit Post</a>
                <form action="<?= route_to('admin.delete_blog_handler', $post['id']) ?>" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this post?');">
                    <button type="submit">Delete Post</button>
                </form>
            </div>
        </li>
        <?php endforeach;?>
    </ul>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<script type="module" src="/scripts/titleslide.js"></script>
<script type="module" src="/scripts/blog.js"></script>
<?= $this->endsection() ?>