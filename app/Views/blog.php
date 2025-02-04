<?= $this->extend('layout/root_layout') ?>

<?= $this->section('content') ?>
<div style="padding-top: 6em;">
    <h1>Blog Page</h1>
</div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type=" module" src="scripts/navbar.js">
</script>
<script type="module" src="scripts/titleslide.js"></script>
<?= $this->endsection() ?>