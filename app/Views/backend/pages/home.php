<?= $this->extend('layout/root_layout') ?>

<?= $this->section('content') ?>
<div style="padding-top: 7em;">
    <h1>Dashboard</h1>
    <a href="<?= route_to('admin.logout')?>">Log Out</a>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<script type="module" src="/scripts/titleslide.js"></script>
<?= $this->endsection() ?>