<?= $this->extend('layout/root_layout') ?>

<?= $this->section('content') ?>
<div class="blog-dashboard">
    <div class="blog-actions">
        <a href="">Create Blog</a>
        <a href="<?= route_to('admin.logout')?>">Log Out</a>
    </div>
    <ul class="blog-posts">
        <?php foreach($posts as $post): ?>
        <li>
            <p><?= $post['post_title']?></p>
            <p><?= $post['post_author']?></p>
            <p id="postContent"><?= $post['post_content']?></p>
            <div class="post-links">
                <a href="">View Post</a>
                <a href="">Edit Post</a>
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