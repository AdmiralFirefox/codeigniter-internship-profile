<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->setVar('site_title', 'James Joseph Cuadra | Portfolio')->include('components/head') ?>

    <?= $this->renderSection('datatables')?>
</head>

<body>
    <?= $this->include('components/header') ?>
    <?= $this->include('components/admin_header') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->renderSection('scripts') ?>
</body>

</html>