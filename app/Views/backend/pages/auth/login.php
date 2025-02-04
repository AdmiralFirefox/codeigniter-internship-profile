<?= $this->extend('layout/root_layout') ?>

<?= $this->section('content') ?>
<div class="login-content">

    <div class="login-text">
        <h1>Log In Account</h1>
    </div>

    <?php $validation = \Config\Services::validation(); ?>
    <form class="login-form" action="<?= route_to('admin.login.handler') ?>" method="POST">
        <? csrf_field() ?>
        <?php if(!empty(session()->getFlashData('success'))): ?>
        <p class="login-success">
            <?= session()->getFlashdata('success') ?>
        </p>
        <?php endif;?>

        <?php if(!empty(session()->getFlashData('error'))): ?>
        <p class="login-error">
            <?= session()->getFlashdata('error') ?>
        </p>
        <?php endif;?>

        <label for="login_id">Username or Email</label>
        <input type="text" name="login_id" required />

        <?php if($validation->getError('login_id')): ?>
        <p class="login-error">
            <?= $validation->getError('login_id') ?>
        </p>
        <?php endif; ?>

        <label for="password">Password</label>
        <input type="password" name="password" required />

        <?php if($validation->getError('password')): ?>
        <p class="login-error">
            <?= $validation->getError('password') ?>
        </p>
        <?php endif; ?>

        <button type="submit">Log In</button>
    </form>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<script type="module" src="/scripts/titleslide.js"></script>
<?= $this->endsection() ?>